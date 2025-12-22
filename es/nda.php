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
        margin: 100px auto;
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
        <h1>CONFIDENTIALITY & NON-DISCLOSURE AGREEMENT</h1>
        <p class="meta mt-2">
            <strong>Company:</strong> EseSphere Limited &nbsp;|&nbsp;
            <strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive<br>
            <strong>Effective Date:</strong> <span id="currentDate"></span>
        </p>
    </div>

    <p>
        This Confidentiality and Non-Disclosure Agreement (“Agreement”) is entered into
        by and between <strong>EseSphere Limited</strong>, a company incorporated in the
        United Kingdom (“Disclosing Party”), and the undersigned individual or entity
        (“Receiving Party”). This Agreement governs access to confidential and proprietary
        information disclosed in connection with the <strong>StaffLinks Project</strong>.
    </p>

    <h2>1. Purpose</h2>
    <p>
        The Receiving Party may access Confidential Information solely for evaluating,
        developing, testing, supporting, or contributing to the StaffLinks platform.
        Any other use is strictly prohibited.
    </p>

    <h2>2. Definition of Confidential Information</h2>
    <ul>
        <li>Source code, repositories, system architecture, APIs, and databases</li>
        <li>Trade secrets, inventions, algorithms, and technical processes</li>
        <li>Business strategies, pricing, forecasts, and financial data</li>
        <li>User data, operational data, internal policies, and documentation</li>
        <li>Marketing plans, branding assets, designs, and product roadmaps</li>
    </ul>

    <h2>3. Confidentiality Obligations</h2>
    <ul>
        <li>Maintain all Confidential Information in strict confidence</li>
        <li>Use Confidential Information solely for authorised purposes</li>
        <li>Restrict access to authorised personnel only</li>
        <li>Apply reasonable administrative, technical, and physical safeguards</li>
    </ul>

    <h2>4. Exclusions</h2>
    <p>
        Confidential Information does not include information that is publicly available
        without breach, independently developed, or lawfully obtained from a third party.
    </p>

    <h2>5. Intellectual Property Rights</h2>
    <p>
        All Confidential Information and derivative works remain the exclusive property
        of <strong>EseSphere Limited</strong>. No licence or ownership rights are granted.
    </p>

    <h2>6. Data Protection & GDPR</h2>
    <p>
        Where Confidential Information includes personal data, the Receiving Party agrees
        to comply with all applicable data protection laws, including the UK GDPR and
        Data Protection Act 2018.
    </p>

    <h2>7. Non-Circumvention</h2>
    <p>
        The Receiving Party shall not use Confidential Information to compete with,
        replicate, or bypass the business interests of the Disclosing Party.
    </p>

    <h2>8. Non-Solicitation</h2>
    <p>
        During the term of this Agreement and for twelve (12) months thereafter, the
        Receiving Party shall not solicit employees, contractors, or clients of the
        Disclosing Party without prior written consent.
    </p>

    <h2>9. Return or Destruction of Materials</h2>
    <p>
        Upon request or termination, all Confidential Information shall be returned
        or permanently destroyed, including backups and copies.
    </p>

    <h2>10. Remedies</h2>
    <p>
        Unauthorised disclosure may cause irreparable harm. The Disclosing Party shall
        be entitled to injunctive relief, damages, and all available legal remedies.
    </p>

    <h2>11. No Partnership or Employment</h2>
    <p>
        Nothing in this Agreement creates a partnership, employment, or agency
        relationship between the parties.
    </p>

    <h2>12. Term & Survival</h2>
    <p>
        This Agreement remains in effect during the relationship and for five (5) years
        thereafter. Sections relating to confidentiality and IP shall survive termination.
    </p>

    <h2>13. Governing Law & Jurisdiction</h2>
    <p>
        This Agreement shall be governed by the laws of <strong>England and Wales</strong>,
        with exclusive jurisdiction vested in its courts.
    </p>

    <h2>14. Amendments & Waiver</h2>
    <p>
        Any amendment or waiver must be in writing and signed by both parties.
    </p>

    <h2>15. Electronic Execution</h2>
    <p>
        This Agreement may be executed electronically and in counterparts, each of which
        shall be deemed an original.
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

    <button class="btn btn-primary" onclick="window.print()">Print / Save as PDF</button>

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

<?php require_once "footer.php"; ?>