   <?php include('header.php'); ?>
   <link rel="stylesheet" href="./assets/css/style.css">

   <div class="container">
       <div class="agreement-card">
           <h1><i class="fa-solid fa-file-signature"></i> Contributor Confidentiality & IP Agreement</h1>
           <p><strong>Company:</strong> EseSphere Limited</p>
           <p><strong>Project:</strong> StaffLinks – Simplify. Organize. Thrive</p>
           <p><strong>Effective Date:</strong> <?= date('d F Y'); ?></p>

           <h3>Agreement Details</h3>
           <div class="agreement-content">

               <div class="section-card">
                   <p><i class="fa-solid fa-circle-info section-icon"></i><strong>1. Definitions & Interpretation</strong></p>
                   <ul>
                       <li><strong>Confidential Information:</strong> Any non-public, proprietary, or sensitive information disclosed directly or indirectly, whether orally, visually, electronically, or in writing, including source code, system logic, credentials, APIs, security practices, user data, internal communications, pricing models, financial records, operational strategies, technical documentation, trade secrets, and business know-how.</li>
                       <li><strong>Contribution:</strong> Any intellectual, creative, or technical work provided by the Contributor, whether completed or in progress, including software code, scripts, designs, UI/UX assets, wireframes, databases, documentation, ideas, feedback, improvements, workflows, testing results, and research materials.</li>
                       <li><strong>Project:</strong> The StaffLinks platform in all current and future forms, including websites, mobile applications, backend systems, APIs, integrations, plugins, databases, updates, enhancements, derivative works, and related services.</li>
                       <li><strong>Company Materials:</strong> All tools, credentials, repositories, documentation, designs, branding assets, data sets, and technical resources provided or made accessible by EseSphere Limited for project execution.</li>
                   </ul>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-bullseye section-icon"></i><strong>2. Purpose</strong></p>
                   <p>The Contributor is granted limited access to Confidential Information solely for the purpose of contributing to the planning, development, testing, maintenance, optimisation, security hardening, documentation, and improvement of the StaffLinks platform. Any use outside the defined project scope is strictly prohibited.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-shield-halved section-icon"></i><strong>3. Representations & Warranties</strong></p>
                   <ul>
                       <li>The Contributor represents that all Contributions are original, lawfully created, and do not infringe intellectual property, privacy, data protection, or contractual rights of any third party.</li>
                       <li>The Contributor confirms they have not assigned, licensed, or encumbered any Contribution in a manner inconsistent with this Agreement.</li>
                       <li>The Contributor warrants full legal authority to enter into this Agreement and acknowledges responsibility for any breach arising from inaccurate representations.</li>
                   </ul>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-lock section-icon"></i><strong>4. Confidentiality Obligations</strong></p>
                   <ul>
                       <li>Maintain strict confidentiality of all Confidential Information during and after participation in the project.</li>
                       <li>Implement reasonable security measures to protect Confidential Information from unauthorised access or misuse.</li>
                       <li>Refrain from copying, disclosing, publishing, reverse-engineering, or exploiting Confidential Information for any non-authorised purpose.</li>
                       <li>Immediately notify the Company of any suspected or actual security breach, data leak, or unauthorised disclosure.</li>
                   </ul>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-exclamation-triangle section-icon"></i><strong>5. Confidentiality Exceptions</strong></p>
                   <ul>
                       <li>(a) Information that becomes publicly available through no fault of the Contributor.</li>
                       <li>(b) Information lawfully received from a third party without confidentiality obligations.</li>
                       <li>(c) Information independently developed without reference to or reliance upon Confidential Information.</li>
                       <li>(d) Information required to be disclosed pursuant to applicable law, regulation, or court order, subject to prior notice where legally permissible.</li>
                   </ul>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-lightbulb section-icon"></i><strong>6. Intellectual Property Assignment</strong></p>
                   <p>The Contributor irrevocably assigns to EseSphere Limited all worldwide rights, title, and interest in any Contributions, including copyrights, patents, trademarks, trade secrets, and moral rights, whether created individually or jointly, upon creation and without further consideration.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-code section-icon"></i><strong>7. GitHub & Code Contributions</strong></p>
                   <p>All code contributions submitted via GitHub, GitLab, Bitbucket, or similar platforms shall be considered “work made for hire” and shall remain the exclusive property of EseSphere Limited. Repository visibility, access permissions, or contributor attribution do not imply ownership or licensing rights.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-user-check section-icon"></i><strong>8. Founder, Equity & Ownership Disclaimer</strong></p>
                   <p>Participation in the project does not grant founder status, equity interest, revenue share, voting rights, or ownership claims. Any such rights must be expressly granted in a separate written and executed agreement.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-handshake section-icon"></i><strong>9. No Partnership or Employment</strong></p>
                   <p>This Agreement does not create an employment, partnership, joint venture, or agency relationship. The Contributor acts as an independent collaborator and is solely responsible for taxes, insurance, regulatory compliance, and personal liabilities.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-money-bill-wave section-icon"></i><strong>10. Compensation & Revenue-Based Remuneration</strong></p>
                   <p>
                       NOTE: No payment will be made at this stage. Compensation will commence only after full development, deployment, market adoption, and sustained commercial success of the project, subject to a separate written agreement. Any remuneration structure, revenue share, or salary shall be governed by an agreed employment or consultancy contract executed at that time.
                       <br><br>
                       Acknowledgment (Initial):
                       <input type="text" placeholder="Your initials" class="form-control mb-2" style="width: 160px;">
                   </p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-calendar-days section-icon"></i><strong>11. Term & Termination</strong></p>
                   <p>This Agreement remains effective from the Effective Date until terminated by either party upon written notice. Provisions relating to confidentiality, intellectual property, indemnification, and liability shall survive termination without limitation.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-shield-virus section-icon"></i><strong>12. Liability Limitations</strong></p>
                   <p>To the fullest extent permitted by law, the Company shall not be liable for any indirect, incidental, special, or consequential damages arising from participation in the project, including loss of profits, data, or business opportunities.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-gavel section-icon"></i><strong>13. Indemnification</strong></p>
                   <p>The Contributor agrees to indemnify, defend, and hold harmless EseSphere Limited from any claims, liabilities, damages, costs, or expenses arising from breach of this Agreement, infringement claims, or unlawful acts.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-hand-holding-hand section-icon"></i><strong>14. Dispute Resolution</strong></p>
                   <p>Any dispute shall first be resolved through good-faith negotiation. Failing resolution, disputes shall be finally settled by binding arbitration in accordance with the laws of England and Wales.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-landmark section-icon"></i><strong>15. Governing Law & Jurisdiction</strong></p>
                   <p>This Agreement shall be governed by and interpreted in accordance with the laws of England and Wales, with exclusive jurisdiction vested in its courts.</p>
               </div>

               <div class="section-card">
                   <p><i class="fa-solid fa-file-contract section-icon"></i><strong>16. Entire Agreement & Amendments</strong></p>
                   <p>This Agreement constitutes the entire understanding between the parties and supersedes all prior discussions or representations. Amendments must be in writing and signed by both parties to be effective.</p>
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
                   <input type="date" class="form-control" id="date" name="date" required value="<?php echo date('Y-m-d'); ?>">
               </div>

               <div class="d-flex gap-2">
                   <button type="submit" class="btn btn-primary submit-btn">
                       <i class="fa-solid fa-paper-plane"></i> Submit Agreement
                   </button>
                   <button type="reset" class="btn btn-secondary" id="resetBtn">
                       <i class="fa-solid fa-rotate-left"></i> Reset Form
                   </button>
               </div>
           </form>
       </div>
   </div>

   <script>
       const canvas = document.getElementById('signaturePad');
       const ctx = canvas.getContext('2d');
       let drawing = false;

       // Resize canvas for high-DPI
       function resizeCanvas() {
           const ratio = Math.max(window.devicePixelRatio || 1, 1);
           canvas.width = canvas.offsetWidth * ratio;
           canvas.height = canvas.offsetHeight * ratio;
           ctx.scale(ratio, ratio);
       }
       resizeCanvas();
       window.addEventListener('resize', resizeCanvas);

       // Drawing functions
       function startDrawing(x, y) {
           drawing = true;
           ctx.beginPath();
           ctx.moveTo(x, y);
       }

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

       // Form submission with flattened JPEG
       document.getElementById('agreementForm').addEventListener('submit', function(e) {
           // Flatten canvas to white background
           const tempCanvas = document.createElement('canvas');
           tempCanvas.width = canvas.width;
           tempCanvas.height = canvas.height;
           const tempCtx = tempCanvas.getContext('2d');
           tempCtx.fillStyle = "#ffffff";
           tempCtx.fillRect(0, 0, tempCanvas.width, tempCanvas.height);
           tempCtx.drawImage(canvas, 0, 0);

           const signatureData = tempCanvas.toDataURL('image/jpeg', 1.0);

           // Check if signature is empty
           const blankCanvas = document.createElement('canvas');
           blankCanvas.width = canvas.width;
           blankCanvas.height = canvas.height;
           const blankData = blankCanvas.toDataURL('image/jpeg', 1.0);
           if (signatureData === blankData) {
               e.preventDefault();
               alert('Please provide a signature.');
               return;
           }

           // Append hidden input
           let input = document.createElement('input');
           input.type = 'hidden';
           input.name = 'signature';
           input.value = signatureData;
           this.appendChild(input);
       });
       document.getElementById('resetBtn').addEventListener('click', () => {
           ctx.clearRect(0, 0, canvas.width, canvas.height);
           updatePreview();
       });
   </script>
   <?php include('footer.php'); ?>