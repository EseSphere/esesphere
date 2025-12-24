<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contributor Confidentiality & IP Agreement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e8ebf3;
            font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 0;
        }

        .agreement-card {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
            padding: 40px;
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            color: #001f4d;
            text-align: center;
            margin-bottom: 25px;
        }

        h3 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-top: 30px;
            margin-bottom: 15px;
            color: #001f4d;
            border-bottom: 2px solid #cfd9f1;
            padding-bottom: 6px;
        }

        .section-card {
            background-color: #f1f4fb;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-left: 5px solid #001f4d;
        }

        .agreement-content {
            max-height: 500px;
            overflow-y: auto;
            padding-right: 10px;
        }

        .agreement-content p,
        .agreement-content li {
            font-size: 0.95rem;
            line-height: 1.7;
            color: #333;
        }

        canvas {
            border: 1px solid #cfd9f1;
            border-radius: 8px;
            width: 100%;
            height: 180px;
            cursor: crosshair;
            background-color: #f1f4fb;
        }

        .btn-clear {
            margin-top: 10px;
        }

        .form-label {
            font-weight: 500;
            color: #001f4d;
        }

        .form-control {
            border-radius: 8px;
            transition: 0.3s;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(0, 31, 77, 0.4);
            border-color: #001f4d;
        }

        .submit-btn {
            background-color: #001f4d;
            border: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background-color: #003366;
        }

        .section-icon {
            color: #001f4d;
            margin-right: 8px;
        }

        @media (max-width: 576px) {
            .agreement-card {
                padding: 25px;
            }

            canvas {
                height: 140px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="agreement-card">
            <h1><i class="fa-solid fa-file-signature"></i> Contributor Confidentiality & IP Agreement</h1>
            <p><strong>Company:</strong> EseSphere Limited</p>
            <p><strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive</p>
            <p><strong>Effective Date:</strong> 22 December 2025</p>

            <h3>Agreement Details</h3>
            <div class="agreement-content">

                <div class="section-card">
                    <p><i class="fa-solid fa-circle-info section-icon"></i><strong>1. Definitions & Interpretation</strong></p>
                    <ul>
                        <li><strong>Confidential Information:</strong> Any information disclosed to the Contributor that is not publicly known, including software architecture, source code, business plans, user data, algorithms, financials, and trade secrets.</li>
                        <li><strong>Contribution:</strong> Any code, design, documentation, idea, research, prototype, or other work product provided by the Contributor.</li>
                        <li><strong>Project:</strong> The StaffLinks platform, including its software, website, mobile app, features, modules, updates, and associated services.</li>
                        <li><strong>Company Materials:</strong> Any documentation, tools, data, or resources provided by the Company to the Contributor for the project.</li>
                    </ul>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-bullseye section-icon"></i><strong>2. Purpose</strong></p>
                    <p>The Contributor may access Confidential Information solely for evaluating, developing, testing, or contributing to the StaffLinks platform. The purpose includes improving platform functionality, debugging, user experience enhancement, and feature development.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-shield-halved section-icon"></i><strong>3. Representations & Warranties</strong></p>
                    <ul>
                        <li>The Contributor represents that all contributions are original, free from any third-party rights, and created independently unless otherwise disclosed.</li>
                        <li>The Contributor has full legal authority to enter this Agreement and assign intellectual property rights to the Company.</li>
                        <li>The Contributor warrants that no contributions violate any laws, regulations, or contractual obligations.</li>
                    </ul>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-lock section-icon"></i><strong>4. Confidentiality Obligations</strong></p>
                    <ul>
                        <li>Keep all Confidential Information strictly confidential.</li>
                        <li>Use information solely for authorized project purposes.</li>
                        <li>Prevent unauthorized access, sharing, duplication, or use for personal gain.</li>
                        <li>Immediately report any suspected breaches or unauthorized disclosures.</li>
                    </ul>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-exclamation-triangle section-icon"></i><strong>5. Confidentiality Exceptions</strong></p>
                    <ul>
                        <li>(a) Information already public without breach.</li>
                        <li>(b) Lawfully obtained from a third party without obligation of confidentiality.</li>
                        <li>(c) Independently developed without using Company’s Confidential Information.</li>
                        <li>(d) Required to be disclosed by law, regulation, or court order.</li>
                    </ul>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-lightbulb section-icon"></i><strong>6. Intellectual Property Assignment</strong></p>
                    <p>The Contributor irrevocably assigns to EseSphere Limited all rights, title, and interest in any work product, code, design, invention, documentation, or other contributions created in connection with the StaffLinks Project, whether individually or jointly.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-code section-icon"></i><strong>7. GitHub & Code Contributions</strong></p>
                    <p>All code contributions submitted through repositories such as GitHub, GitLab, Bitbucket, or other platforms are considered "work made for hire" and are the exclusive property of EseSphere Limited, regardless of repository ownership or username.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-user-check section-icon"></i><strong>8. Founder, Equity & Ownership Disclaimer</strong></p>
                    <p>Participation or contribution to the project does not grant founder status, equity, shares, voting rights, or ownership interest unless explicitly documented in a separate written agreement.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-handshake section-icon"></i><strong>9. No Partnership or Employment</strong></p>
                    <p>Nothing in this Agreement shall create an employment, partnership, agency, or joint venture relationship. The Contributor is an independent collaborator, not an employee or agent of the Company.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-money-bill-wave section-icon"></i><strong>10. Compensation & Revenue-Based Remuneration</strong></p>
                    <p>NOTE: No Payment at This Stage. Compensation may be considered after full development and commercial success, subject to written agreement. Acknowledgment (Initial): <input type="text" placeholder="Your initials" class="form-control mb-2" style="width: 160px;"></p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-calendar-days section-icon"></i><strong>11. Term & Termination</strong></p>
                    <p>This Agreement remains in effect until terminated by either party upon written notice. Sections relating to intellectual property, confidentiality, and warranties shall survive termination.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-shield-virus section-icon"></i><strong>12. Liability Limitations</strong></p>
                    <p>The Company shall not be liable for any indirect, incidental, or consequential damages arising from the Contributor’s participation. Contributors participate at their own risk and are responsible for adherence to laws and policies.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-gavel section-icon"></i><strong>13. Indemnification</strong></p>
                    <p>The Contributor agrees to indemnify and hold harmless the Company against claims, damages, or losses arising from breach of this Agreement, infringement of third-party rights, or illegal contributions.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-hand-holding-hand section-icon"></i><strong>14. Dispute Resolution</strong></p>
                    <p>Any dispute arising shall first be attempted through good faith negotiation. If unresolved, disputes shall be submitted to binding arbitration under the laws of England and Wales.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-landmark section-icon"></i><strong>15. Governing Law & Jurisdiction</strong></p>
                    <p>This Agreement is governed by the laws of England and Wales, and courts of England and Wales shall have exclusive jurisdiction.</p>
                </div>

                <div class="section-card">
                    <p><i class="fa-solid fa-file-contract section-icon"></i><strong>16. Entire Agreement & Amendments</strong></p>
                    <p>This Agreement constitutes the entire agreement between parties. Amendments must be in writing and signed by both parties. No oral statements, prior agreements, or understandings shall have any effect.</p>
                </div>

            </div>

            <h3 class="mt-4">Acceptance & Signature</h3>
            <form id="agreementForm" action="submit_agreement.php" method="POST">
                <div class="row mb-3">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label"><i class="fa-solid fa-user"></i> Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="role" class="form-label"><i class="fa-solid fa-briefcase"></i> Role / Company</label>
                        <input type="text" class="form-control" id="role" name="role" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label"><i class="fa-solid fa-pen-fancy"></i> Signature</label>
                    <canvas id="signaturePad"></canvas>
                    <button type="button" class="btn btn-warning btn-clear mt-2" id="clearBtn"><i class="fa-solid fa-eraser"></i> Clear</button>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label"><i class="fa-solid fa-calendar"></i> Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <button type="submit" class="btn btn-primary submit-btn w-100"><i class="fa-solid fa-paper-plane"></i> Submit Agreement</button>
            </form>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('signaturePad');
        const ctx = canvas.getContext('2d');
        let drawing = false;

        // Set canvas size dynamically for high-DPI screens
        function resizeCanvas() {
            const ratio = Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            ctx.scale(ratio, ratio);
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Start drawing
        function startDrawing(x, y) {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(x, y);
        }

        // Draw line
        function drawLine(x, y) {
            if (!drawing) return;
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.strokeStyle = '#001f4d';
            ctx.lineTo(x, y);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(x, y);
        }

        // Stop drawing
        function stopDrawing() {
            drawing = false;
        }

        // Mouse events
        canvas.addEventListener('mousedown', (e) => startDrawing(e.offsetX, e.offsetY));
        canvas.addEventListener('mousemove', (e) => drawLine(e.offsetX, e.offsetY));
        canvas.addEventListener('mouseup', stopDrawing);
        canvas.addEventListener('mouseout', stopDrawing);

        // Touch events
        canvas.addEventListener('touchstart', (e) => {
            e.preventDefault();
            const rect = canvas.getBoundingClientRect();
            const touch = e.touches[0];
            startDrawing(touch.clientX - rect.left, touch.clientY - rect.top);
        });
        canvas.addEventListener('touchmove', (e) => {
            e.preventDefault();
            const rect = canvas.getBoundingClientRect();
            const touch = e.touches[0];
            drawLine(touch.clientX - rect.left, touch.clientY - rect.top);
        });
        canvas.addEventListener('touchend', (e) => {
            e.preventDefault();
            stopDrawing();
        });

        // Clear button
        document.getElementById('clearBtn').addEventListener('click', () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        });

        // Form submission
        document.getElementById('agreementForm').addEventListener('submit', function(e) {
            const signatureData = canvas.toDataURL();

            // Check if signature is empty
            const blankCanvas = document.createElement('canvas');
            blankCanvas.width = canvas.width;
            blankCanvas.height = canvas.height;
            if (signatureData === blankCanvas.toDataURL()) {
                e.preventDefault();
                alert('Please provide a signature.');
                return;
            }

            // Append hidden input for signature
            let input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'signature';
            input.value = signatureData;
            this.appendChild(input);

            // Form will submit normally to submit_agreement.php
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>