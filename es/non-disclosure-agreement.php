<?php include_once 'dbconnection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EseSphere | Non-Disclosure Agreement (NDA)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Sign a Non-Disclosure Agreement (NDA) with EseSphere to protect your confidential project information before sharing details.">
    <meta name="author" content="EseSphere">
    <meta property="og:title" content="EseSphere | Non-Disclosure Agreement (NDA)">
    <meta property="og:description" content="Sign a Non-Disclosure Agreement (NDA) with EseSphere to protect your confidential project information.">
    <meta property="og:image" content="./img/favicon.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.esesphere.com/nda">
    <meta name="twitter:card" content="./img/favicon.png">
    <meta name="twitter:title" content="EseSphere | NDA">
    <meta name="twitter:description" content="Sign a Non-Disclosure Agreement (NDA) with EseSphere to protect your confidential project information.">
    <meta name="twitter:image" content="./img/favicon.png">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">

    <style>
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        label {
            font-weight: 500;
        }

        input,
        select,
        textarea {
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px 15px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            height: 50px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #0061ff, #003dc2);
            border: none;
            border-radius: 10px;
        }

        canvas {
            border: 2px dashed #003dc2;
            border-radius: 10px;
            width: 100%;
            height: 200px;
            cursor: crosshair;
        }

        .nda-content {
            background: #f9fbff;
            padding: 25px;
            border-radius: 10px;
            font-size: 0.95rem;
            color: #333;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .step-title {
            font-weight: 600;
            color: #003dc2;
            border-left: 4px solid #0061ff;
            padding-left: 8px;
        }
    </style>
</head>

<body class="index-page">
    <?php include 'header.php'; ?>

    <main class="main">
        <div style="margin-top:120px;"></div>
        <div class="container my-5">
            <div class="card p-5">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-primary">Non-Disclosure Agreement (NDA)</h2>
                    <p class="text-muted">Please complete and sign this NDA to protect all confidential information shared with EseSphere before project discussions begin.</p>
                </div>

                <form action="submit_nda.php" method="POST" enctype="multipart/form-data" id="ndaForm">

                    <!-- NDA Terms -->
                    <div class="nda-content mb-4">
                        <h5>1. Introduction</h5>
                        <p>This Non-Disclosure Agreement ("Agreement") is entered into by and between <strong>EseSphere</strong> ("Disclosing Party") and the undersigned ("Receiving Party"). The purpose is to protect sensitive information disclosed in the context of potential or ongoing collaboration.</p>

                        <h5>2. Definition of Confidential Information</h5>
                        <p>Confidential Information includes all business, technical, and project information, including but not limited to:</p>
                        <ul>
                            <li>Project concepts, proposals, and technical specifications</li>
                            <li>Marketing, branding, and digital strategy information</li>
                            <li>Design assets, source code, and metadata used by EseSphere</li>
                        </ul>

                        <h5>3. Obligations</h5>
                        <p>The Receiving Party agrees to:</p>
                        <ul>
                            <li>Maintain strict confidentiality of all disclosed information</li>
                            <li>Use information solely for the purpose of evaluating or participating in the project</li>
                            <li>Not disclose, copy, or distribute information without prior written consent</li>
                        </ul>

                        <h5>4. Term</h5>
                        <p>This Agreement shall remain in effect for a period of three (3) years from the date of signing.</p>

                        <h5>5. Signature</h5>
                        <p>By signing this Agreement, the Receiving Party acknowledges understanding and acceptance of the terms above.</p>
                    </div>

                    <!-- Personal Information -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label>Full Name *</label>
                            <input type="text" name="full_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Company / Brand Name</label>
                            <input type="text" name="company_name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label>Phone *</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                    </div>

                    <!-- Signature Pad -->
                    <div class="mt-4">
                        <label class="mb-2">Signature *</label>
                        <canvas id="signature-pad"></canvas>
                        <input type="hidden" name="signature" id="signature-data" required>
                        <div class="text-end mt-2">
                            <button type="button" id="clear-signature" class="btn btn-outline-secondary btn-sm">Clear</button>
                        </div>
                    </div>

                    <!-- Agreement Checkbox -->
                    <div class="form-check mt-4">
                        <input type="checkbox" name="agree" value="Yes" class="form-check-input" id="agree" required>
                        <label class="form-check-label" for="agree">I agree to the terms of the Non-Disclosure Agreement.</label>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary px-5 py-2">Sign & Submit NDA</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        const canvas = document.getElementById('signature-pad');
        const ctx = canvas.getContext('2d');
        let drawing = false;

        function resizeCanvas() {
            const data = canvas.toDataURL();
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
            const img = new Image();
            img.src = data;
            img.onload = () => ctx.drawImage(img, 0, 0);
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        canvas.addEventListener('mousedown', e => {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        });
        canvas.addEventListener('mousemove', e => {
            if (!drawing) return;
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.strokeStyle = '#003dc2';
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
        });
        canvas.addEventListener('mouseup', () => drawing = false);
        document.getElementById('clear-signature').addEventListener('click', () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        });

        document.getElementById('ndaForm').addEventListener('submit', function(e) {
            const dataURL = canvas.toDataURL();
            document.getElementById('signature-data').value = dataURL;
        });
    </script>
</body>

</html>