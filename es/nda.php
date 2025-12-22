<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>StaffLinks Confidentiality & Non-Disclosure Agreement</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .nda-container {
            background: #ffffff;
            padding: 40px;
            max-width: 950px;
            margin: 40px auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
        }

        h2 {
            font-size: 20px;
            margin-top: 30px;
            font-weight: 600;
        }

        p,
        li {
            font-size: 15px;
            line-height: 1.7;
            color: #333;
        }

        canvas {
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
            height: 180px;
            touch-action: none;
            background-color: #fff;
        }

        .meta {
            font-size: 14px;
            color: #555;
        }

        @media print {
            .btn {
                display: none;
            }

            body {
                background: none;
            }

            .nda-container {
                box-shadow: none;
                margin: 0;
                padding: 0;
            }
        }
    </style>
</head>

<body>

    <div class="nda-container">

        <div class="text-center mb-4">
            <h1>CONFIDENTIALITY & NON-DISCLOSURE AGREEMENT</h1>
            <p class="meta">
                <strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive<br>
                <strong>Company:</strong> EseSphere Limited<br>
                <strong>Effective Date:</strong> <span id="currentDate"></span>
            </p>
        </div>

        <p>
            This Confidentiality and Non-Disclosure Agreement (“Agreement”) is made between
            <strong>EseSphere Limited</strong>, a company incorporated in the United Kingdom
            (“Disclosing Party”), and the undersigned individual or entity (“Receiving Party”),
            effective as of the date stated above.
        </p>

        <h2>1. Purpose</h2>
        <p>
            The Receiving Party may be granted access to certain confidential, proprietary,
            and commercially sensitive information for the sole purpose of evaluating,
            developing, or contributing to the <strong>StaffLinks Project</strong>.
        </p>

        <h2>2. Confidential Information</h2>
        <ul>
            <li>Software, algorithms, databases, architecture, and source code</li>
            <li>Trade secrets, technical processes, and know-how</li>
            <li>Business plans, financial data, pricing, and customer information</li>
            <li>Marketing strategies, branding, designs, and documentation</li>
        </ul>

        <h2>3. Confidentiality Obligations</h2>
        <ul>
            <li>Maintain strict confidentiality</li>
            <li>No unauthorised disclosure</li>
            <li>Use information solely for the Project</li>
            <li>Apply reasonable security measures</li>
        </ul>

        <h2>4. Permitted Disclosures</h2>
        <p>
            Disclosure is permitted only when required by law, with prior notice where possible.
        </p>

        <h2>5. Intellectual Property</h2>
        <p>
            All Confidential Information remains the exclusive property of
            <strong>EseSphere Limited</strong>.
        </p>

        <h2>6. Remedies</h2>
        <p>
            Breach may result in injunctive relief, damages, and other legal remedies.
        </p>

        <h2>7. Term</h2>
        <p>
            This Agreement remains in effect for <strong>five (5) years</strong> after termination.
        </p>

        <h2>8. Governing Law</h2>
        <p>
            This Agreement shall be governed by the laws of <strong>England and Wales</strong>.
        </p>

        <hr class="my-4">

        <!-- SIGNATURE SECTION -->
        <h2>Acceptance & Signature</h2>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label"><strong>Name</strong></label>
                <input type="text" class="form-control" placeholder="Enter full name">
            </div>
            <div class="col-md-6">
                <label class="form-label"><strong>Role / Company</strong></label>
                <input type="text" class="form-control" placeholder="Enter role or company">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label"><strong>Signature</strong></label>
            <canvas id="signaturePad"></canvas>
            <button class="btn btn-sm btn-outline-secondary mt-2" onclick="clearSignature()">Clear Signature</button>
        </div>

        <div class="mb-4">
            <label class="form-label"><strong>Date</strong></label>
            <input type="text" id="dateField" class="form-control" readonly>
        </div>

        <button class="btn btn-primary" onclick="window.print()">Print / Save as PDF</button>

    </div>

    <script>
        // Auto-fill current date
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

        function startDraw(e) {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(getX(e), getY(e));
        }

        function draw(e) {
            if (!drawing) return;
            ctx.lineTo(getX(e), getY(e));
            ctx.strokeStyle = '#000';
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.stroke();
        }

        function stopDraw() {
            drawing = false;
        }

        function getX(e) {
            return (e.touches ? e.touches[0].clientX : e.clientX) - canvas.getBoundingClientRect().left;
        }

        function getY(e) {
            return (e.touches ? e.touches[0].clientY : e.clientY) - canvas.getBoundingClientRect().top;
        }

        canvas.addEventListener('mousedown', startDraw);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stopDraw);
        canvas.addEventListener('mouseleave', stopDraw);

        canvas.addEventListener('touchstart', startDraw);
        canvas.addEventListener('touchmove', draw);
        canvas.addEventListener('touchend', stopDraw);

        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }
    </script>

</body>

</html>