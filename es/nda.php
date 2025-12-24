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
            color: #1f2937;
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

        ul {
            margin-left: 20px;
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

        /* Modern signature form */
        .signature-form {
            margin-top: 40px;
            padding: 30px;
            background: #f9fafb;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
        }

        .form-title {
            font-size: 20px;
            margin-bottom: 6px;
        }

        .form-subtitle {
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 25px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
        }

        .form-group input {
            margin-top: 6px;
        }

        .signature-section {
            margin-top: 30px;
            padding: 20px;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
        }

        .signature-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .signature-hint {
            font-size: 12px;
            color: #6b7280;
            margin-top: 8px;
        }

        .clear-btn {
            background: transparent;
            border: none;
            color: #dc2626;
            font-size: 13px;
            cursor: pointer;
        }

        .clear-btn:hover {
            text-decoration: underline;
        }

        .primary-btn {
            margin-top: 30px;
            background: linear-gradient(135deg, #1d4ed8, #2563eb);
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            padding: 16px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
        }

        .primary-btn:hover {
            background: linear-gradient(135deg, #1e40af, #1d4ed8);
        }

        .legal-note {
            margin-top: 15px;
            font-size: 12px;
            color: #6b7280;
            text-align: center;
        }

        .preview-btn {
            margin-top: 20px;
            background: #e5e7eb;
            color: #111827;
            padding: 14px;
            width: 100%;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            font-weight: 600;
        }

        .preview-btn:hover {
            background: #d1d5db;
        }

        .modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 9999;
        }

        .modal-content {
            background: #fff;
            max-width: 900px;
            height: 90vh;
            margin: 5vh auto;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
        }

        .modal-header {
            padding: 15px 20px;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            font-weight: 600;
        }

        .modal-content iframe {
            flex: 1;
            border: none;
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>Contributor Confidentiality & Intellectual Property Agreement</h1>

        <p><strong>Company:</strong> EseSphere Limited</p>
        <p><strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive</p>
        <p><strong>Effective Date:</strong> 22 December 2025</p>

        <h2>1. Definitions & Interpretation</h2>
        <ul>
            <li><strong>Confidential Information:</strong> All information disclosed to the Contributor that is not publicly available, including technical data, source code, business plans, and trade secrets.</li>
            <li><strong>Contribution:</strong> Any code, design, documentation, idea, or work product provided by the Contributor to the Company.</li>
            <li><strong>Project:</strong> The StaffLinks platform, including its software, website, mobile app, and associated services.</li>
        </ul>

        <h2>2. Purpose</h2>
        <p>
            The Contributor may access Confidential Information solely for evaluating, developing,
            testing, or contributing to the StaffLinks platform.
        </p>

        <h2>3. Representations & Warranties</h2>
        <ul>
            <li>The Contributor represents that all contributions are original and do not infringe third-party rights.</li>
            <li>The Contributor has full right and authority to enter this Agreement and assign all intellectual property to the Company.</li>
        </ul>

        <h2>4. Confidentiality Obligations</h2>
        <ul>
            <li>Maintain all Confidential Information in strict confidence.</li>
            <li>Use information solely for authorised project purposes.</li>
            <li>Prevent unauthorised access, sharing, or copying.</li>
        </ul>

        <h2>5. Confidentiality Exceptions</h2>
        <p>
            Confidential Information does not include information that:
        </p>
        <ul>
            <li>(a) is publicly available without breach;</li>
            <li>(b) was lawfully obtained from a third party;</li>
            <li>(c) is independently developed by the Contributor without reference to the Company’s Confidential Information; or</li>
            <li>(d) is required to be disclosed by law or court order.</li>
        </ul>

        <h2>6. Intellectual Property Assignment</h2>
        <p>
            The Contributor irrevocably assigns to EseSphere Limited all rights, title,
            and interest in any work product, code, designs, inventions, documentation,
            or materials created in connection with the StaffLinks Project, whether
            created individually or jointly.
        </p>

        <h2>7. GitHub & Code Contributions</h2>
        <p>
            All code contributions made via GitHub, GitLab, Bitbucket, or any other repository
            related to the project shall be deemed “work made for hire” and the exclusive
            property of EseSphere Limited, regardless of repository ownership or contributor username.
        </p>

        <h2>8. Founder, Equity & Ownership Disclaimer</h2>
        <p>
            Contribution to the project does not grant the Contributor founder status,
            equity, shares, voting rights, or ownership interest in the Company unless
            explicitly agreed in writing.
        </p>

        <h2>9. No Partnership or Employment</h2>
        <p>
            Nothing in this Agreement creates an employment, partnership, agency,
            or joint venture relationship.
        </p>

        <h2>10. Compensation & Revenue-Based Remuneration</h2>
        <p><strong>NOTE: No Payment at This Stage</strong></p>
        <p>
            The Contributor acknowledges that the software is under development and that
            no payment or financial compensation is provided at this stage. Compensation
            may only be considered after full development and commercial success,
            subject to written agreement.
        </p>

        <div class="checkbox">
            <input type="checkbox" required>
            <label>I understand there is no payment at this stage.</label>
        </div>

        <h2>11. Term & Termination</h2>
        <p>
            This Agreement shall remain in effect until terminated by either party upon
            written notice. Sections relating to intellectual property, confidentiality,
            and warranties shall survive termination.
        </p>

        <h2>12. Liability Limitations</h2>
        <p>
            The Company shall not be liable for any indirect, incidental, or consequential
            damages arising from the Contributor’s involvement in the project.
            The Contributor agrees to participate at their own risk.
        </p>

        <h2>13. Indemnification</h2>
        <p>
            The Contributor agrees to indemnify and hold harmless the Company against
            any claims, damages, or losses arising from breach of this Agreement,
            infringement of third-party rights, or illegal contributions.
        </p>

        <h2>14. Dispute Resolution</h2>
        <p>
            Any dispute arising from this Agreement shall first be attempted to resolve
            through good faith negotiation. If unresolved, disputes shall be submitted
            to binding arbitration under the laws of England and Wales.
        </p>

        <h2>15. Governing Law & Jurisdiction</h2>
        <p>
            This Agreement is governed by the laws of England and Wales, with exclusive
            jurisdiction vested in its courts.
        </p>

        <h2>16. Entire Agreement & Amendments</h2>
        <p>
            This Agreement constitutes the entire agreement between the parties.
            Any amendment must be in writing and signed by both parties.
        </p>

        <h2>Acceptance & Signature</h2>

        <form method="POST" action="submit_agreement.php" onsubmit="return submitAgreement();">

            <label>Full Name</label>
            <input type="text" name="full_name" id="full_name" required>

            <label>Email Address</label>
            <input type="email" name="email" id="email" required>

            <label>Role / Company</label>
            <input type="text" name="role" id="role">

            <label>Date</label>
            <input type="date" name="date" id="date" required>

            <label>Signature</label>
            <canvas id="signaturePad" width="500" height="150"></canvas>
            <button type="button" onclick="clearSignature()">Clear Signature</button>

            <input type="hidden" name="signature_image" id="signature_image">
            <input type="hidden" name="pdf_data" id="pdf_data">

            <button type="submit">Accept & Sign Agreement</button>
        </form>

        <div class="footer">
            © EseSphere Limited — Electronic execution is legally binding
        </div>

    </div>

    <script>
        const canvas = document.getElementById("signaturePad");
        const ctx = canvas.getContext("2d");
        let drawing = false;

        canvas.addEventListener("mousedown", () => drawing = true);
        canvas.addEventListener("mouseup", () => {
            drawing = false;
            ctx.beginPath();
        });
        canvas.addEventListener("mousemove", draw);

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
            pdf.text("Contributor Confidentiality & Intellectual Property Agreement", 20, 20);
            pdf.text(`Name: ${full_name.value}`, 20, 40);
            pdf.text(`Role / Company: ${role.value}`, 20, 48);
            pdf.text(`Date: ${date.value}`, 20, 56);
            pdf.text("Signature:", 20, 72);
            pdf.addImage(signature, "PNG", 20, 78, 80, 30);

            document.getElementById("pdf_data").value = pdf.output("datauristring");
            return true;
        }
    </script>

</body>

</html>