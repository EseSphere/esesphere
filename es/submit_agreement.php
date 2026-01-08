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
        "Definitions & Interpretation" =>
        "Confidential Information includes all non-public, proprietary, or sensitive information disclosed in any form, including source code, system architecture, credentials, APIs, user data, financial records, business strategies, technical documentation, and trade secrets. Contribution refers to any intellectual, creative, or technical work provided by the Contributor. Project refers to the StaffLinks platform in all current and future forms. Company Materials include all tools, repositories, data, credentials, and resources provided by EseSphere Limited.",

        "Purpose" =>
        "The Contributor may access Confidential Information solely for the purpose of evaluating, developing, testing, maintaining, supporting, optimising, securing, or improving the StaffLinks platform, and for no other commercial or personal use.",

        "Representations & Warranties" =>
        "The Contributor represents and warrants that all Contributions are original or properly licensed, do not infringe any third-party intellectual property or contractual rights, comply with applicable laws and regulations, and that the Contributor has full legal authority to enter into this Agreement and assign intellectual property rights to the Company.",

        "Confidentiality Obligations" =>
        "The Contributor agrees to maintain all Confidential Information in strict confidence, to use such information solely for authorised project purposes, to implement reasonable security measures, and to prevent unauthorised access, disclosure, copying, or exploitation during and after participation in the project.",

        "Confidentiality Exceptions" =>
        "Confidentiality obligations shall not apply to information that becomes publicly available without breach of this Agreement, is lawfully obtained from a third party without restriction, is independently developed without reference to Confidential Information, or is required to be disclosed by law, regulation, or court order, subject to notice where legally permitted.",

        "Intellectual Property Assignment" =>
        "The Contributor irrevocably assigns to EseSphere Limited all worldwide rights, title, and interest in and to any Contributions, including all intellectual property rights, whether created individually or jointly, upon creation and without further consideration.",

        "GitHub & Code Contributions" =>
        "All code, scripts, documentation, and technical materials submitted through GitHub or any other version control or collaboration platform are deemed \"work made for hire\" and shall remain the exclusive property of EseSphere Limited, regardless of repository ownership or contributor attribution.",

        "Founder, Equity & Ownership Disclaimer" =>
        "Participation in or contribution to the project does not grant founder status, equity interest, shares, profit-sharing rights, voting rights, or ownership interest unless expressly agreed in a separate written and signed agreement.",

        "No Partnership or Employment" =>
        "Nothing in this Agreement shall be construed to create an employment relationship, partnership, joint venture, agency, or fiduciary relationship. The Contributor acts solely as an independent collaborator and is responsible for all taxes, insurance, and statutory obligations.",

        "Compensation & Revenue-Based Remuneration" =>
        "No payment will be made at this stage. Compensation will commence only after the full development, deployment, market adoption, and sustained commercial success of the project, and shall be subject to a separate written agreement. Any remuneration, salary, or revenue-based payment shall be governed by an agreed employment or consultancy contract executed once the project begins generating sustainable profit.",

        "Term & Termination" =>
        "This Agreement shall remain effective from the effective date until terminated by either party upon written notice. Provisions relating to confidentiality, intellectual property, indemnification, liability, and warranties shall survive termination indefinitely.",

        "Liability Limitations" =>
        "To the fullest extent permitted by law, EseSphere Limited shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from or related to the Contributor’s participation in the project, including loss of profits, data, or business opportunities.",

        "Indemnification" =>
        "The Contributor agrees to indemnify, defend, and hold harmless EseSphere Limited from and against any claims, liabilities, damages, losses, costs, or expenses arising from breach of this Agreement, infringement of third-party rights, or unlawful or negligent acts.",

        "Dispute Resolution" =>
        "Any dispute arising out of or in connection with this Agreement shall first be addressed through good-faith negotiations. If unresolved, such disputes shall be finally settled by binding arbitration in accordance with the laws of England and Wales.",

        "Governing Law & Jurisdiction" =>
        "This Agreement shall be governed by and construed in accordance with the laws of England and Wales, and the courts of England and Wales shall have exclusive jurisdiction.",

        "Entire Agreement & Amendments" =>
        "This Agreement constitutes the entire understanding between the parties and supersedes all prior or contemporaneous agreements, representations, or communications. Any amendment or modification must be in writing and signed by both parties to be effective."
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
