<?php require_once "header.php"; ?>
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

    <div class="nda-header">
        <h1>CONTRIBUTOR CONFIDENTIALITY & INTELLECTUAL PROPERTY AGREEMENT</h1>
        <p class="meta mt-2">
            <strong>Company:</strong> EseSphere Limited &nbsp;|&nbsp;
            <strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive<br>
            <strong>Effective Date:</strong> <span id="currentDate"></span>
        </p>
    </div>

    <p>
        This Contributor Confidentiality & Intellectual Property Agreement (“Agreement”)
        is entered into by and between <strong>EseSphere Limited</strong>, a company
        incorporated in the United Kingdom (“Company”), and the undersigned individual
        or entity (“Contributor”). This Agreement governs all contributions, access to
        confidential information, and intellectual property relating to the
        <strong>StaffLinks Project</strong>.
    </p>

    <h2>1. Definitions & Interpretation</h2>
    <ul>
        <li><strong>Confidential Information:</strong> All information disclosed to the Contributor that is not publicly available, including technical data, source code, business plans, and trade secrets.</li>
        <li><strong>Contribution:</strong> Any code, design, documentation, idea, or work product provided by the Contributor to the Company.</li>
        <li><strong>Project:</strong> The StaffLinks platform, including its software, website, mobile app, and associated services.</li>
    </ul>

    <h2>2. Purpose</h2>
    <p>
        The Contributor may access Confidential Information solely for evaluating,
        developing, testing, or contributing to the StaffLinks platform.
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
        Confidential Information does not include information that: (a) is publicly available without breach; (b) was lawfully obtained from a third party; (c) is independently developed by the Contributor without reference to the Company’s Confidential Information; or (d) is required to be disclosed by law or court order.
    </p>

    <h2>6. Intellectual Property Assignment</h2>
    <p>
        The Contributor irrevocably assigns to <strong>EseSphere Limited</strong>
        all rights, title, and interest in any work product, code, designs, inventions,
        documentation, or materials created in connection with the StaffLinks Project,
        whether created individually or jointly.
    </p>

    <h2>7. GitHub & Code Contributions</h2>
    <p>
        All code contributions made via GitHub, GitLab, Bitbucket, or any other repository
        related to the project shall be deemed “work made for hire” and the exclusive
        property of <strong>EseSphere Limited</strong>, regardless of repository ownership
        or contributor username.
    </p>

    <h2>8. Founder, Equity & Ownership Disclaimer</h2>
    <p>
        Contribution does not grant founder status, equity, shares, voting rights, or ownership interest in the Company unless explicitly agreed in writing.
    </p>

    <h2>9. No Partnership or Employment</h2>
    <p>
        Nothing in this Agreement creates an employment, partnership, agency, or joint
        venture relationship.
    </p>

    <h2>10. Compensation & Revenue-Based Remuneration</h2>
    <div class="highlight-clause">
        <p>
            The Contributor acknowledges that the software is under development and that
            <strong>no payment or financial compensation</strong> is provided at this stage.
        </p>
        <p>
            Compensation may only be considered after full development and commercial
            success, subject to written agreement.
        </p>

        <div class="acknowledgment-box">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="noPaymentAck">
                <label class="form-check-label" for="noPaymentAck">
                    <strong>I understand there is no payment at this stage.</strong>
                </label>
            </div>
        </div>
    </div>

    <h2>11. Term & Termination</h2>
    <p>
        This Agreement shall remain in effect until terminated by either party upon written notice. Sections relating to intellectual property, confidentiality, and warranties shall survive termination.
    </p>

    <h2>12. Liability Limitations</h2>
    <p>
        The Company shall not be liable for any indirect, incidental, or consequential damages arising from the Contributor’s involvement in the project. The Contributor agrees to participate at their own risk.
    </p>

    <h2>13. Indemnification</h2>
    <p>
        The Contributor agrees to indemnify and hold harmless the Company against any claims, damages, or losses arising from breach of this Agreement, infringement of third-party rights, or illegal contributions.
    </p>

    <h2>14. Dispute Resolution</h2>
    <p>
        Any dispute arising from this Agreement shall first be attempted to resolve through good faith negotiation. If unresolved, disputes shall be submitted to binding arbitration under the laws of England and Wales.
    </p>

    <h2>15. Governing Law & Jurisdiction</h2>
    <p>
        This Agreement is governed by the laws of <strong>England and Wales</strong>, with exclusive jurisdiction vested in its courts.
    </p>

    <h2>16. Entire Agreement & Amendments</h2>
    <p>
        This Agreement constitutes the entire agreement between the parties. Any amendment must be in writing and signed by both parties.
    </p>

    <hr class="my-5">

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

    <button class="btn btn-primary" onclick="validateAndPrint()">Print / Save as PDF</button>

</div>

<script>
    const today = new Date();
    const formattedDate = today.toLocaleDateString('en-GB', {
        day: '2-digit',
        month: 'long',
        year: 'numeric'
    });
    document.getElementById('currentDate').innerText = formattedDate;
    document.getElementById('dateField').value = formattedDate;

    function validateAndPrint() {
        const checkbox = document.getElementById('noPaymentAck');
        if (!checkbox.checked) {
            alert("You must acknowledge that there is no payment at this stage before proceeding.");
            return;
        }
        window.print();
    }

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
</script>

<?php require_once "footer.php"; ?>