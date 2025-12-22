<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>StaffLinks – Confidentiality & Non-Disclosure Agreement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #eef1f5;
            font-family: 'Inter', sans-serif;
            color: #1f2937;
        }

        .nda-container {
            background: #ffffff;
            max-width: 960px;
            margin: 50px auto;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        }

        .nda-header {
            border-bottom: 2px solid #e5e7eb;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 30px;
            font-weight: 700;
            letter-spacing: -0.5px;
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
</head>

<body>

    <div class="nda-container">

        <!-- HEADER -->
        <div class="nda-header text-center">
            <h1>CONFIDENTIALITY & NON-DISCLOSURE AGREEMENT</h1>
            <p class="meta mt-2">
                <strong>Company:</strong> EseSphere Limited &nbsp;|&nbsp;
                <strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive<br>
                <strong>Effective Date:</strong> <span id="currentDate"></span>
            </p>
        </div>

        <!-- INTRO -->
        <p>
            This Confidentiality and Non-Disclosure Agreement (“Agreement”) is entered into
            by and between <strong>EseSphere Limited</strong>, a company incorporated in the
            United Kingdom (“Disclosing Party”), and the undersigned individual or entity
            (“Receiving Party”). This Agreement governs access to and protection of
            confidential and proprietary information disclosed in connection with the
            <strong>StaffLinks Project</strong>.
        </p>

        <!-- SECTIONS -->
        <h2>1. Purpose</h2>
        <p>
            The Receiving Party may be granted access to confidential, proprietary, or
            commercially sensitive information solely for the purpose of evaluating,
            developing, testing, or contributing to the StaffLinks platform.
        </p>

        <h2>2. Definition of Confidential Information</h2>
        <p>Confidential Information includes, without limitation:</p>
        <ul>
            <li>Source code, software, system architecture, APIs, and databases</li>
            <li>Trade secrets, inventions, technical processes, and know-how</li>
            <li>Business strategies, pricing models, financial data, and forecasts</li>
            <li>Customer information, operational data, and internal documentation</li>
            <li>Marketing plans, branding assets, and product roadmaps</li>
        </ul>

        <h2>3. Confidentiality Obligations</h2>
        <ul>
            <li>Maintain all Confidential Information in strict confidence</li>
            <li>Use Confidential Information solely for authorised Project purposes</li>
            <li>Not disclose Confidential Information without prior written consent</li>
            <li>Protect Confidential Information using reasonable security measures</li>
        </ul>

        <h2>4. Exclusions</h2>
        <p>
            Confidential Information does not include information that becomes publicly
            available without breach, was lawfully known prior to disclosure, or is
            independently developed.
        </p>

        <h2>5. Intellectual Property Rights</h2>
        <p>
            All Confidential Information and related intellectual property rights remain
            the exclusive property of <strong>EseSphere Limited</strong>. No licence or
            ownership rights are granted under this Agreement.
        </p>

        <h2>6. Return or Destruction of Materials</h2>
        <p>
            Upon request or termination of involvement, the Receiving Party shall promptly
            return or permanently destroy all Confidential Information in their possession.
        </p>

        <h2>7. Remedies</h2>
        <p>
            The Receiving Party acknowledges that unauthorised disclosure may cause
            irreparable harm for which monetary damages may be insufficient. The Disclosing
            Party shall be entitled to seek injunctive relief and all available legal remedies.
        </p>

        <h2>8. Term</h2>
        <p>
            This Agreement shall remain in effect during the Receiving Party’s involvement
            with the Project and for a period of <strong>five (5) years</strong> thereafter.
        </p>

        <h2>9. Governing Law & Jurisdiction</h2>
        <p>
            This Agreement shall be governed by and construed in accordance with the laws of
            <strong>England and Wales</strong>, and the courts thereof shall have exclusive
            jurisdiction.
        </p>

        <h2>10. Electronic Signature</h2>
        <p>
            This Agreement may be executed electronically. Electronic signatures shall be
            deemed legally binding and equivalent to handwritten signatures.
        </p>

        <hr class="my-5">

        <!-- SIGNATURE -->
        <h2>Acceptance & Signature</h2>

        <div class="row mb-4">
            <div class="col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Full legal name">
            </div>
            <div class="col-md-6">
                <label>Role / Company</label>
                <input type="text" class="form-control" placeholder="Role or organisation">
            </div>
        </div>

        <div class="signature-box mb-3">
            <label>Signature</label>
            <canvas id="signaturePad"></canvas>
            <button class="btn btn-sm btn-outline-secondary mt-2" onclick="clearSignature()">Clear Signature</button>
        </div>

        <div class="mb-4">
            <label>Date</label>
            <input type="text" id="dateField" class="form-control" readonly>
        </div>

        <button class="btn btn-primary" onclick="window.print()">Print / Save as PDF</button>

    </div>

    <script>
        // Date
        const today = new Date();
        const formattedDate = today.toLocaleDateString('en-GB', {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        });
        document.getElementById('currentDate').innerText = formattedDate;
        document.getElementById('dateField').value = formattedDate;

        // Signature Pad
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
            const clientX = e.touches ? e.touches[0].clientX : e.clientX;
            const clientY = e.touches ? e.touches[0].clientY : e.clientY;
            return {
                x: clientX - rect.left,
                y: clientY - rect.top
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

        canvas.addEventListener('mousedown', start);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stop);
        canvas.addEventListener('mouseleave', stop);
        canvas.addEventListener('touchstart', start);
        canvas.addEventListener('touchmove', draw);
        canvas.addEventListener('touchend', stop);

        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }
    </script>

</body>

</html>