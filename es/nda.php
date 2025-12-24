<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contributor Confidentiality & IP Agreement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background: #eef1f5;
            padding: 20px;
        }

        .container {
            max-width: 960px;
            background: #fff;
            margin: auto;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        h2 {
            margin-top: 35px;
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 6px;
        }

        p,
        li {
            line-height: 1.7;
            font-size: 15px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-top: 15px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #cbd5e1;
        }

        .checkbox {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        canvas {
            border: 2px dashed #9ca3af;
            border-radius: 6px;
            background: #f9fafb;
            margin-top: 10px;
        }

        button {
            margin-top: 30px;
            background: #1d4ed8;
            color: #fff;
            padding: 16px;
            width: 100%;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #1e40af;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Contributor Confidentiality & Intellectual Property Agreement</h1>
        <p><strong>Company:</strong> EseSphere Limited</p>
        <p><strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive</p>
        <p><strong>Effective Date:</strong> 22 December 2025</p>

        <h2>Agreement Terms</h2>
        <p>
            This Agreement governs all contributions, intellectual property rights,
            confidential information, and participation by the Contributor in the StaffLinks
            platform operated by EseSphere Limited.
        </p>

        <p><strong>Key Legal Acknowledgement:</strong>
            By signing below, the Contributor irrevocably assigns all intellectual property,
            waives moral rights, agrees to confidentiality obligations, and acknowledges
            that no payment is provided at this stage.
        </p>

        <h2>Compensation Disclaimer</h2>
        <div class="checkbox">
            <input type="checkbox" required>
            <label>I understand and accept that no payment is provided at this stage.</label>
        </div>

        <h2>Contributor Details</h2>

        <form method="POST" action="submit_agreement.php" onsubmit="return submitAgreement();">

            <label>Full Legal Name</label>
            <input type="text" id="full_name" name="full_name" required>

            <label>Email Address</label>
            <input type="email" id="email" name="email" required>

            <label>Role / Company</label>
            <input type="text" id="role" name="role">

            <label>Date</label>
            <input type="date" id="date" name="date" required>

            <label>Signature</label>
            <canvas id="signaturePad" width="500" height="150"></canvas>
            <button type="button" onclick="clearSignature()">Clear Signature</button>

            <input type="hidden" name="signature_image" id="signature_image">
            <input type="hidden" name="pdf_data" id="pdf_data">

            <button type="submit">Accept & Sign Agreement</button>
        </form>

        <div class="footer">
            © EseSphere Limited — Electronic execution legally binding
        </div>

    </div>

    <script>
        const canvas = document.getElementById("signaturePad");
        const ctx = canvas.getContext("2d");
        let drawing = false;

        // Mouse
        canvas.addEventListener("mousedown", () => drawing = true);
        canvas.addEventListener("mouseup", () => {
            drawing = false;
            ctx.beginPath();
        });
        canvas.addEventListener("mousemove", draw);

        // Touch
        canvas.addEventListener("touchstart", e => {
            drawing = true;
            drawTouch(e);
        });
        canvas.addEventListener("touchend", () => {
            drawing = false;
            ctx.beginPath();
        });
        canvas.addEventListener("touchmove", drawTouch);

        function draw(e) {
            if (!drawing) return;
            ctx.lineWidth = 2;
            ctx.lineCap = "round";
            ctx.strokeStyle = "#111827";
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        }

        function drawTouch(e) {
            e.preventDefault();
            const rect = canvas.getBoundingClientRect();
            const touch = e.touches[0];
            draw({
                offsetX: touch.clientX - rect.left,
                offsetY: touch.clientY - rect.top
            });
        }

        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        async function submitAgreement() {
            const signature = canvas.toDataURL("image/png");
            document.getElementById("signature_image").value = signature;

            const {
                jsPDF
            } = window.jspdf;
            const pdf = new jsPDF();
            pdf.text("EseSphere Limited – Contributor Agreement", 20, 20);
            pdf.text(`Name: ${full_name.value}`, 20, 40);
            pdf.text(`Email: ${email.value}`, 20, 48);
            pdf.text(`Role: ${role.value}`, 20, 56);
            pdf.text(`Date: ${date.value}`, 20, 64);
            pdf.text("Signature:", 20, 80);
            pdf.addImage(signature, "PNG", 20, 85, 80, 30);

            document.getElementById("pdf_data").value = pdf.output("datauristring");
            return true;
        }
    </script>

</body>

</html>