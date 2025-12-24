<?php
require_once('tcpdf/tcpdf.php'); // Include TCPDF

// Database credentials
//submit_agreement.php
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
    $pdf->SetAutoPageBreak(TRUE, 20);
    $pdf->AddPage();

    // Set colors
    $pdf->SetTextColor(0, 31, 77); // Navy blue for headings
    $pdf->SetDrawColor(0, 31, 77);

    // Build HTML with all 16 sections
    $html = '
    <h1 style="text-align:center;color:#001f4d;">Contributor Confidentiality & IP Agreement</h1>
    <p><strong>Company:</strong> EseSphere Limited</p>
    <p><strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive</p>
    <p><strong>Effective Date:</strong> 22 December 2025</p>

    <h2 style="color:#001f4d;">Contributor Details</h2>
    <table cellpadding="5">
        <tr><td><strong>Name:</strong></td><td>' . $name . '</td></tr>
        <tr><td><strong>Role / Company:</strong></td><td>' . $role . '</td></tr>
        <tr><td><strong>Date:</strong></td><td>' . $date . '</td></tr>
    </table>

    <h2 style="color:#001f4d;">Agreement Sections</h2>
    <ol>
        <li><strong>Definitions & Interpretation:</strong> Confidential Information, Contribution, Project, and Company Materials are as defined in the web agreement.</li>
        <li><strong>Purpose:</strong> Access Confidential Information solely for evaluating, developing, testing, or contributing to StaffLinks platform.</li>
        <li><strong>Representations & Warranties:</strong> All contributions are original, do not infringe third-party rights, and Contributor has authority to assign IP.</li>
        <li><strong>Confidentiality Obligations:</strong> Maintain information in strict confidence, use for authorized purposes, prevent unauthorized access.</li>
        <li><strong>Confidentiality Exceptions:</strong> Information that is public, independently developed, lawfully obtained from third parties, or legally required disclosure.</li>
        <li><strong>Intellectual Property Assignment:</strong> All rights, title, and interest in work products are irrevocably assigned to EseSphere Limited.</li>
        <li><strong>GitHub & Code Contributions:</strong> All repository contributions are work made for hire and exclusive property of the Company.</li>
        <li><strong>Founder, Equity & Ownership Disclaimer:</strong> Contributions do not confer founder status, equity, or ownership unless explicitly agreed in writing.</li>
        <li><strong>No Partnership or Employment:</strong> Nothing creates employment, partnership, agency, or joint venture.</li>
        <li><strong>Compensation & Revenue-Based Remuneration:</strong> No payment at this stage. Compensation may be considered after development and commercial success.</li>
        <li><strong>Term & Termination:</strong> Agreement remains effective until terminated by either party; IP and confidentiality sections survive termination.</li>
        <li><strong>Liability Limitations:</strong> Company not liable for indirect, incidental, or consequential damages; participation at Contributor’s own risk.</li>
        <li><strong>Indemnification:</strong> Contributor indemnifies the Company against claims, damages, or losses arising from breach or illegal contributions.</li>
        <li><strong>Dispute Resolution:</strong> Attempt negotiation first; if unresolved, binding arbitration under laws of England and Wales.</li>
        <li><strong>Governing Law & Jurisdiction:</strong> Laws of England and Wales apply; courts of England and Wales have exclusive jurisdiction.</li>
        <li><strong>Entire Agreement & Amendments:</strong> Constitutes entire agreement; amendments must be in writing and signed by both parties.</li>
    </ol>

    <h2 style="color:#001f4d;">Signature</h2>
    <p>Please find the contributor signature below:</p>
    <p><img src="' . $fileName . '" width="300" height="100" /></p>
    <p>By signing above, the contributor acknowledges and agrees to all terms of this Agreement.</p>
    ';

    $pdf->writeHTML($html, true, false, true, false, '');
    $pdfFileName = 'Contributor_Agreement_' . time() . '.pdf';

    // Force download
    $pdf->Output($pdfFileName, 'D');
}
