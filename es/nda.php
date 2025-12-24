<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contributor Confidentiality & IP Agreement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
        }

        .agreement {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1,
        h3 {
            margin-bottom: 20px;
        }

        canvas {
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            height: 150px;
        }

        .btn-clear {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="agreement">
            <h1 class="text-center">Contributor Confidentiality & Intellectual Property Agreement</h1>
            <p><strong>Company:</strong> EseSphere Limited</p>
            <p><strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive</p>
            <p><strong>Effective Date:</strong> 22 December 2025</p>
            <hr>

            <h3>Agreement Details</h3>
            <div style="max-height: 400px; overflow-y: auto; padding: 10px;">
                <p><strong>1. Definitions & Interpretation</strong></p>
                <ul>
                    <li><strong>Confidential Information:</strong> All information disclosed to the Contributor that is not publicly available, including technical data, source code, business plans, and trade secrets.</li>
                    <li><strong>Contribution:</strong> Any code, design, documentation, idea, or work product provided by the Contributor to the Company.</li>
                    <li><strong>Project:</strong> The StaffLinks platform, including its software, website, mobile app, and associated services.</li>
                </ul>

                <p><strong>2. Purpose</strong></p>
                <p>The Contributor may access Confidential Information solely for evaluating, developing, testing, or contributing to the StaffLinks platform.</p>

                <p><strong>3. Representations & Warranties</strong></p>
                <ul>
                    <li>All contributions are original and do not infringe third-party rights.</li>
                    <li>The Contributor has full right and authority to enter this Agreement and assign all intellectual property to the Company.</li>
                </ul>

                <p><strong>4. Confidentiality Obligations</strong></p>
                <ul>
                    <li>Maintain all Confidential Information in strict confidence.</li>
                    <li>Use information solely for authorised project purposes.</li>
                    <li>Prevent unauthorised access, sharing, or copying.</li>
                </ul>

                <p><strong>5. Confidentiality Exceptions</strong></p>
                <p>Confidential Information does not include information that:</p>
                <ul>
                    <li>(a) is publicly available without breach;</li>
                    <li>(b) was lawfully obtained from a third party;</li>
                    <li>(c) is independently developed by the Contributor without reference to the Company’s Confidential Information;</li>
                    <li>(d) is required to be disclosed by law or court order.</li>
                </ul>

                <p><strong>6. Intellectual Property Assignment</strong></p>
                <p>The Contributor irrevocably assigns to EseSphere Limited all rights, title, and interest in any work product created in connection with the StaffLinks Project.</p>

                <p><strong>7. GitHub & Code Contributions</strong></p>
                <p>All code contributions made via repositories related to the project are “work made for hire” and the exclusive property of EseSphere Limited.</p>

                <p><strong>8. Founder, Equity & Ownership Disclaimer</strong></p>
                <p>Contribution does not grant founder status, equity, shares, or ownership interest unless explicitly agreed in writing.</p>

                <p><strong>9. No Partnership or Employment</strong></p>
                <p>This Agreement does not create employment, partnership, agency, or joint venture relationship.</p>

                <p><strong>10. Compensation & Revenue-Based Remuneration</strong></p>
                <p>NOTE: No Payment at This Stage. Acknowledgment (Check / Initial): <input type="text" placeholder="Your initials" class="form-control mb-2" style="width: 150px;"></p>

                <p><strong>11. Term & Termination</strong></p>
                <p>Agreement remains in effect until terminated. Intellectual property, confidentiality, and warranties survive termination.</p>

                <p><strong>12. Liability Limitations</strong></p>
                <p>The Company is not liable for indirect, incidental, or consequential damages. Participation is at Contributor’s own risk.</p>

                <p><strong>13. Indemnification</strong></p>
                <p>The Contributor agrees to indemnify and hold harmless the Company against any claims or losses from breach or illegal contributions.</p>

                <p><strong>14. Dispute Resolution</strong></p>
                <p>Disputes shall first attempt to be resolved through negotiation, then arbitration under the laws of England and Wales.</p>

                <p><strong>15. Governing Law & Jurisdiction</strong></p>
                <p>This Agreement is governed by the laws of England and Wales.</p>

                <p><strong>16. Entire Agreement & Amendments</strong></p>
                <p>This Agreement constitutes the entire agreement. Amendments must be in writing and signed by both parties.</p>
            </div>

            <hr>
            <h3>Acceptance & Signature</h3>
            <form id="agreementForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role / Company</label>
                    <input type="text" class="form-control" id="role" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Signature</label>
                    <canvas id="signaturePad"></canvas>
                    <button type="button" class="btn btn-warning btn-clear" id="clearBtn">Clear</button>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit Agreement</button>
            </form>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('signaturePad');
        const ctx = canvas.getContext('2d');
        let drawing = false;

        canvas.width = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;

        canvas.addEventListener('mousedown', () => drawing = true);
        canvas.addEventListener('mouseup', () => drawing = false);
        canvas.addEventListener('mouseout', () => drawing = false);

        canvas.addEventListener('mousemove', draw);

        function draw(e) {
            if (!drawing) return;
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.strokeStyle = '#000';
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        }

        document.getElementById('clearBtn').addEventListener('click', () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        });

        document.getElementById('agreementForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const role = document.getElementById('role').value;
            const date = document.getElementById('date').value;
            const signatureData = canvas.toDataURL();

            if (signatureData === canvas.toDataURL('image/png', 0)) {
                alert('Please provide a signature.');
                return;
            }

            // Here you can send the data to your server using fetch/AJAX
            console.log({
                name,
                role,
                date,
                signatureData
            });
            alert('Agreement submitted successfully!');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>