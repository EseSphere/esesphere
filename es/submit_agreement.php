<?php
require_once('tcpdf/tcpdf.php');
require_once('dbconnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $role = $conn->real_escape_string($_POST['role']);
    $date = $_POST['date'];
    $signatureData = $_POST['signature'];

    // Save signature as flattened JPEG
    $signatureData = str_replace('data:image/jpeg;base64,', '', $signatureData);
    $signatureData = str_replace(' ', '+', $signatureData);
    $signatureDir = 'signatures/';
    if (!is_dir($signatureDir)) mkdir($signatureDir, 0755, true);
    $fileName = $signatureDir . 'signature_' . time() . '.jpg';
    file_put_contents($fileName, base64_decode($signatureData));

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO contributor_agreements (name, role, date, signature_path) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $role, $date, $fileName);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // TCPDF PDF
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
    $pdf->SetCreator('EseSphere Limited');
    $pdf->SetAuthor('EseSphere Limited');
    $pdf->SetTitle('Contributor Agreement');
    $pdf->SetMargins(20, 20, 20);
    $pdf->SetAutoPageBreak(TRUE, 20);
    $pdf->AddPage();

    $headingColor = [0, 31, 77];
    $borderColor = [0, 31, 77];

    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->SetTextColor(...$headingColor);
    $pdf->Cell(0, 10, 'Contributor Confidentiality & IP Agreement', 0, 1, 'C');
    $pdf->Ln(3);

    $pdf->SetFont('helvetica', '', 11);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->MultiCell(0, 5, "Company: EseSphere Limited\nProject: StaffLinks – Simplify. Organize. Thrive\nEffective Date: 22 December 2025", 0, 'L');
    $pdf->Ln(5);

    // Contributor Details
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(...$headingColor);
    $pdf->Cell(0, 7, 'Contributor Details', 0, 1);
    $pdf->SetFont('helvetica', '', 11);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFillColor(224, 235, 255);
    $pdf->SetDrawColor(...$borderColor);
    $pdf->MultiCell(0, 6, "Name: $name\nRole / Company: $role\nDate: $date", 1, 'L', true);
    $pdf->Ln(5);

    // Agreement sections
    $sections = [
        "Definitions & Interpretation" => "Confidential Information, Contribution, Project, and Company Materials as defined in the web agreement.",
        "Purpose" => "Access Confidential Information solely for evaluating, developing, testing, or contributing to StaffLinks platform.",
        "Representations & Warranties" => "All contributions are original, do not infringe third-party rights, and Contributor has authority to assign IP.",
        "Confidentiality Obligations" => "Maintain information in strict confidence, use for authorized purposes, prevent unauthorized access.",
        "Confidentiality Exceptions" => "Information that is public, independently developed, lawfully obtained, or legally required disclosure.",
        "Intellectual Property Assignment" => "All rights, title, and interest in work products are irrevocably assigned to EseSphere Limited.",
        "GitHub & Code Contributions" => "All repository contributions are work made for hire and exclusive property of the Company.",
        "Founder, Equity & Ownership Disclaimer" => "Contributions do not confer founder status, equity, or ownership unless agreed in writing.",
        "No Partnership or Employment" => "Nothing creates employment, partnership, agency, or joint venture.",
        "Compensation & Revenue-Based Remuneration" => "No payment at this stage. Compensation may be considered after development and commercial success.",
        "Term & Termination" => "Agreement remains effective until terminated; IP and confidentiality sections survive termination.",
        "Liability Limitations" => "Company not liable for indirect, incidental, or consequential damages; participation at Contributor’s own risk.",
        "Indemnification" => "Contributor indemnifies the Company against claims, damages, or losses arising from breach or illegal contributions.",
        "Dispute Resolution" => "Attempt negotiation first; if unresolved, binding arbitration under laws of England and Wales.",
        "Governing Law & Jurisdiction" => "Laws of England and Wales apply; courts of England and Wales have exclusive jurisdiction.",
        "Entire Agreement & Amendments" => "Constitutes entire agreement; amendments must be in writing and signed by both parties."
    ];

    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(...$headingColor);
    $count = 0;
    foreach ($sections as $title => $content) {
        $pdf->SetFillColor(224, 235, 255);
        $pdf->SetDrawColor(...$borderColor);
        $pdf->MultiCell(0, 6, $title, 1, 'L', true);
        $pdf->Ln(1);
        $pdf->SetFont('helvetica', '', 11);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->MultiCell(0, 5, $content, 1, 'L', false);
        $pdf->Ln(3);
        $count++;
        if ($count % 5 == 0) $pdf->AddPage();
        $pdf->SetFont('helvetica', 'B', 12);
        $pdf->SetTextColor(...$headingColor);
    }

    // Signature
    $pdf->Ln(5);
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(...$headingColor);
    $pdf->Cell(0, 7, 'Contributor Signature', 0, 1);
    $pdf->SetFont('helvetica', '', 11);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->MultiCell(0, 5, "By signing below, the contributor acknowledges and agrees to all terms of this Agreement.", 0, 'L', false);
    $pdf->Ln(3);
    $pdf->Image($fileName, '', '', 60, 30); // Proper scaling
    $pdf->Ln(5);
    $pdf->MultiCell(0, 5, "Date: $date", 0, 'L', false);

    $pdfFileName = 'Contributor_Agreement_' . time() . '.pdf';
    $pdf->Output($pdfFileName, 'D'); // Download
}
