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

    // Generate TCPDF PDF
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
    $pdf->MultiCell(0, 5, "Company: EseSphere Limited\nProject: StaffLinks – Simplify. Organize. Thrive\nEffective Date: " . date('d F Y'), 0, 'L');
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
        "Compensation & Revenue-Based Remuneration" => "No payment will be made at this stage. Compensation will commence after full development and commercial success of the project, subject to a written agreement. Payment will be made to all contributors under the terms of an agreed employment contract, which will commence once the project has been successfully completed and begins generating profit.",
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
    $pdf->Image($fileName, '', '', 60, 30);
    $pdf->Ln(5);
    $pdf->MultiCell(0, 5, "Date: $date", 0, 'L', false);

    $pdfFileName = 'Contributor_Agreement_' . time() . '.pdf';
    $pdfOutput = $pdf->Output('', 'S'); // Save PDF as string

    // Send PDF via email using mail()
    $to = 'info@esesphere.com';
    $subject = 'New Contributor Agreement Submitted';
    $message = "A new contributor agreement has been submitted.\n\nName: $name\nRole: $role\nDate: $date";
    $separator = md5(time());
    $eol = "\r\n";

    // Email headers
    $headers  = "From: noreply@esesphere.com" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;

    // Email body with attachment
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"utf-8\"" . $eol;
    $body .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
    $body .= $message . $eol;

    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/pdf; name=\"" . $pdfFileName . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment; filename=\"" . $pdfFileName . "\"" . $eol . $eol;
    $body .= chunk_split(base64_encode($pdfOutput)) . $eol;
    $body .= "--" . $separator . "--";

    mail($to, $subject, $body, $headers);

    // Force download for contributor
    $pdf->Output($pdfFileName, 'D');
}
