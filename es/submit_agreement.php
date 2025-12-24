<?php
require_once('tcpdf/tcpdf.php'); // Include TCPDF

// Database credentials
$host = "localhost";
$user = "root";
$pass = "";
$db   = "esesphere";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $role = $conn->real_escape_string($_POST['role']);
    $date = $_POST['date'];
    $signatureData = $_POST['signature'];

    // Save signature image
    $signatureData = str_replace('data:image/png;base64,', '', $signatureData);
    $signatureData = str_replace(' ', '+', $signatureData);

    $signatureDir = 'signatures/';
    if (!is_dir($signatureDir)) mkdir($signatureDir, 0755, true);

    $fileName = $signatureDir . 'signature_' . time() . '.png';
    file_put_contents($fileName, base64_decode($signatureData));

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO contributor_agreements (name, role, date, signature_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $role, $date, $fileName);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Generate PDF
    $pdf = new TCPDF();
    $pdf->SetCreator('EseSphere Limited');
    $pdf->SetAuthor('EseSphere Limited');
    $pdf->SetTitle('Contributor Agreement');
    $pdf->SetMargins(20, 20, 20);
    $pdf->AddPage();

    $html = '
    <h1 style="color:#001f4d;text-align:center;">Contributor Confidentiality & IP Agreement</h1>
    <p><strong>Company:</strong> EseSphere Limited</p>
    <p><strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive</p>
    <p><strong>Effective Date:</strong> 22 December 2025</p>
    <h3 style="color:#001f4d;">Contributor Details</h3>
    <p><strong>Name:</strong> ' . $name . '</p>
    <p><strong>Role / Company:</strong> ' . $role . '</p>
    <p><strong>Date:</strong> ' . $date . '</p>
    <h3 style="color:#001f4d;">Signature</h3>
    <p><img src="' . $fileName . '" width="300" height="100"/></p>
    <p>By signing above, the contributor acknowledges and agrees to all terms of this Agreement.</p>
    ';

    $pdf->writeHTML($html, true, false, true, false, '');
    $pdfFileName = 'Contributor_Agreement_' . time() . '.pdf';

    // Output PDF for download
    $pdf->Output($pdfFileName, 'D'); // 'D' forces download
}
