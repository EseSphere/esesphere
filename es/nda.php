<?php
require_once "header.php";
require 'fpdf/fpdf.php'; // Make sure FPDF is included

// MySQL connection
$mysqli = new mysqli("localhost", "db_user", "db_pass", "db_name");
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

$successMsg = "";
$errorMsg = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $role = $_POST['role'];
    $date = $_POST['agreement_date'];
    $signatureData = $_POST['signatureData'];

    // Convert Base64 signature to binary
    $signatureData = str_replace('data:image/png;base64,', '', $signatureData);
    $signatureData = base64_decode($signatureData);

    // Save into MySQL
    $stmt = $mysqli->prepare("INSERT INTO contributor_agreements (name, role, signature, agreement_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssbs", $name, $role, $null, $date);
    $stmt->send_long_data(2, $signatureData);
    $stmt->execute();
    $stmt->close();

    // ------------------- PDF Generation -------------------
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, "CONTRIBUTOR CONFIDENTIALITY & INTELLECTUAL PROPERTY AGREEMENT", 0, 1, 'C');
    $pdf->Ln(5);
    $pdf->SetFont('Arial', '', 12);

    // Helper functions
    function addHeading($pdf, $text)
    {
        $pdf->Ln(5);
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->MultiCell(0, 6, $text);
        $pdf->SetFont('Arial', '', 12);
        $pdf->Ln(2);
    }
    function addParagraph($pdf, $text)
    {
        $pdf->MultiCell(0, 6, $text);
        $pdf->Ln(2);
    }

    addParagraph($pdf, "Name: $name\nRole: $role\nDate: $date");

    addHeading($pdf, "1. Purpose");
    addParagraph($pdf, "The Contributor may access Confidential Information solely for evaluating, developing, testing, or contributing to StaffLinks.");

    addHeading($pdf, "2. Intellectual Property Assignment");
    addParagraph($pdf, "The Contributor irrevocably assigns all rights, title, and interest in any work product or code created for StaffLinks to EseSphere Limited.");

    addHeading($pdf, "3. GitHub & Code Contribution Ownership");
    addParagraph($pdf, "All code contributions via repositories are considered 'work made for hire' and are exclusive property of EseSphere Limited.");

    addHeading($pdf, "4. Founder / Equity Disclaimer");
    addParagraph($pdf, "Contribution does not grant founder status, equity, shares, voting rights, or ownership interest unless explicitly agreed in writing.");

    // Highlighted No Payment Clause
    $pdf->SetFillColor(254, 243, 199); // light yellow
    $pdf->SetDrawColor(245, 158, 11); // orange border
    $pdf->SetLineWidth(0.5);
    $y = $pdf->GetY();
    $pdf->Rect(10, $y, 190, 25, 'FD');
    $pdf->SetXY(12, $y + 3);
    addParagraph($pdf, "No Payment Clause: The Contributor acknowledges that the software is under development and no payment is provided at this stage. Compensation may be considered after full development and commercial success.");
    $pdf->Ln(30);

    // Signature
    addHeading($pdf, "Contributor Signature");
    $tempSig = tempnam(sys_get_temp_dir(), 'sig') . ".png";
    file_put_contents($tempSig, $signatureData);
    $pdf->Image($tempSig, $pdf->GetX(), $pdf->GetY(), 60, 30);
    unlink($tempSig);

    $pdfFilePath = tempnam(sys_get_temp_dir(), 'agreement') . '.pdf';
    $pdf->Output($pdfFilePath, 'F');

    // ------------------- Email using PHP mail() -------------------
    $to = 'info@esesphere.com';
    $subject = 'New Contributor Agreement';
    $message = "A new Contributor Agreement has been signed by $name ($role) on $date.";

    $separator = md5(time());
    $eol = "\r\n";

    $headers = "From: no-reply@esesphere.com" . $eol;
    $headers .= "MIME-Version: 1.0" . $eol;
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;

    // message body
    $body = "--" . $separator . $eol;
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 7bit" . $eol . $eol;
    $body .= $message . $eol;

    // attachment
    $attachment = chunk_split(base64_encode(file_get_contents($pdfFilePath)));
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/pdf; name=\"Contributor_Agreement.pdf\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment; filename=\"Contributor_Agreement.pdf\"" . $eol . $eol;
    $body .= $attachment . $eol;
    $body .= "--" . $separator . "--";

    if (mail($to, $subject, $body, $headers)) {
        $successMsg = "Agreement saved and email sent successfully.";
    } else {
        $errorMsg = "Email could not be sent.";
    }

    unlink($pdfFilePath);
}
?>

<style>
    body {
        background-color: #eef1f5;
        font-family: 'Inter', sans-serif;
        color: #1f2937;
    }

    .nda-container {
        background: #ffffff;
        max-width: 960px;
        margin: 130px auto;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
    }

    .nda-header {
        border-bottom: 2px solid #e5e7eb;
        padding-bottom: 20px;
        margin-bottom: 30px;
        text-align: center;
    }

    h1 {
        font-size: 30px;
        font-weight: 700;
    }

    h2 {
        font-size: 20px;
        margin-top: 35px;
        font-weight: 600;
    }

    p,
    li {
        font-size: 15px;
        line-height: 1.8;
    }

    ul {
        padding-left: 20px;
    }

    .meta {
        font-size: 14px;
        color: #4b5563;
    }

    .signature-box {
        border: 1px solid #d1d5db;
        border-radius: 6px;
        padding: 15px;
        background-color: #fafafa;
    }

    canvas {
        border: 1px solid #9ca3af;
        border-radius: 4px;
        width: 100%;
        height: 200px;
        touch-action: none;
        background-color: #fff;
    }

    .highlight-clause {
        background: #fef3c7;
        border-left: 5px solid #f59e0b;
        padding: 20px;
        border-radius: 6px;
        margin-top: 20px;
    }

    .acknowledgment-box {
        background: #f9fafb;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        padding: 15px;
        margin-top: 15px;
    }

    label {
        font-weight: 500;
    }

    @media print {
        body {
            background: none;
        }

        .nda-container {
            box-shadow: none;
            margin: 0;
            padding: 0;
        }

        .btn {
            display: none;
        }
    }
</style>

<div class="nda-container">
    <?php if ($successMsg) echo '<div class="alert alert-success">' . $successMsg . '</div>'; ?>
    <?php if ($errorMsg) echo '<div class="alert alert-danger">' . $errorMsg . '</div>'; ?>

    <div class="nda-header">
        <h1>CONTRIBUTOR CONFIDENTIALITY & INTELLECTUAL PROPERTY AGREEMENT</h1>
        <p class="meta mt-2">
            <strong>Company:</strong> EseSphere Limited &nbsp;|&nbsp;
            <strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive<br>
            <strong>Effective Date:</strong> <span id="currentDate"></span>
        </p>
    </div>

    <h2>Acceptance & Signature</h2>

    <form method="POST" id="contributorForm">
        <div class="row mb-4">
            <div class="col-md-6">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Full legal name" required>
            </div>
            <div class="col-md-6">
                <label>Role / Company</label>
                <input type="text" name="role" class="form-control" placeholder="Role or organisation" required>
            </div>
        </div>

        <div class="signature-box mb-3">
            <label>Signature</label>
            <canvas id="signaturePad"></canvas>
            <button type="button" class="btn btn-sm btn-outline-secondary mt-2" onclick="clearSignature()">Clear Signature</button>
        </div>

        <input type="hidden" name="signatureData" id="signatureData">
        <input type="hidden" name="agreement_date" id="agreementDate">

        <div class="mb-4">
            <label>Date</label>
            <input type="text" id="dateField" class="form-control" readonly>
        </div>

        <button type="submit" class="btn btn-primary" onclick="return captureAndValidate()">Submit & Send</button>
    </form>
</div>

<script>
    const canvas = document.getElementById('signaturePad');
    const ctx = canvas.getContext('2d');
    let drawing = false;

    function resizeCanvas() {
        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    function getPos(e) {
        const rect = canvas.getBoundingClientRect();
        const x = (e.touches ? e.touches[0].clientX : e.clientX) - rect.left;
        const y = (e.touches ? e.touches[0].clientY : e.clientY) - rect.top;
        return {
            x,
            y
        };
    }

    function start(e) {
        drawing = true;
        const pos = getPos(e);
        ctx.beginPath();
        ctx.moveTo(pos.x, pos.y);
    }

    function draw(e) {
        if (!drawing) return;
        const pos = getPos(e);
        ctx.lineTo(pos.x, pos.y);
        ctx.strokeStyle = '#111';
        ctx.lineWidth = 2;
        ctx.lineCap = 'round';
        ctx.stroke();
    }

    function stop() {
        drawing = false;
    }

    function clearSignature() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
    }
    canvas.addEventListener('mousedown', start);
    canvas.addEventListener('mousemove', draw);
    canvas.addEventListener('mouseup', stop);
    canvas.addEventListener('mouseleave', stop);
    canvas.addEventListener('touchstart', start);
    canvas.addEventListener('touchmove', draw);
    canvas.addEventListener('touchend', stop);

    document.getElementById('currentDate').innerText = new Date().toLocaleDateString('en-GB', {
        day: '2-digit',
        month: 'long',
        year: 'numeric'
    });
    document.getElementById('dateField').value = document.getElementById('currentDate').innerText;

    function captureAndValidate() {
        const checkbox = document.getElementById('noPaymentAck');
        if (checkbox && !checkbox.checked) {
            alert("You must acknowledge that there is no payment at this stage.");
            return false;
        }
        if (canvas.toDataURL() === document.createElement('canvas').toDataURL()) {
            alert("Please provide your signature.");
            return false;
        }
        document.getElementById('signatureData').value = canvas.toDataURL();
        document.getElementById('agreementDate').value = document.getElementById('dateField').value;
        return true;
    }
</script>

<?php require_once "footer.php"; ?>