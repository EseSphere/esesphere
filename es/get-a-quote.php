<?php require_once "header.php"; ?>

<style>
    .card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    input,
    select {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 10px 15px;
        font-size: 1.5rem;
        transition: border-color 0.3s ease;
        height: 50px;
    }

    .section {
        display: none;
        animation: fadeIn 0.4s ease-in-out;
    }

    .section.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    label {
        font-weight: 500;
    }

    .btn-primary {
        background: linear-gradient(135deg, #192a56, #273c75);
        border: none;
        border-radius: 10px;
    }

    .step-title {
        font-weight: 600;
        color: #273c75;
        border-left: 4px solid #273c75;
        padding-left: 8px;
    }

    .progress {
        height: 8px;
        border-radius: 10px;
    }

    .form-check-label {
        cursor: pointer;
    }
</style>
<div style="margin-top:100px; height:20px;"></div>
<div class="container my-5">
    <div class="card p-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Get a Quote</h2>
            <p class="text-muted">Tell us more about your project so we can understand your goals and deliver the best solution.</p>
        </div>
        <div class="progress mb-4">
            <div id="progressBar" class="progress-bar bg-primary" style="width: 20%;"></div>
        </div>

        <form action="./request_backend" method="POST" enctype="multipart/form-data" id="discoveryForm">
            <div class="section active p-4" id="step1">
                <h5 class="step-title mb-3">1. Basic Information</h5>
                <div class="row g-3">
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
                    <div class="col-md-12">
                        <label>Service Type *</label>
                        <select name="service_type" id="service_type" class="form-select" required>
                            <option value="">-- Select --</option>
                            <option value="Web Development">Web Development Project</option>
                            <option value="Mobile App Development">Mobile App Development Project</option>
                            <option value="University Development">University Development Project</option>
                            <option value="Web & Mobile App Development">Web & Mobile App Development Project</option>
                            <option value="Development & Marketing">Development & Marketing Project</option>
                            <option value="Graphics Design">Graphics Design</option>
                            <option value="Digital Marketing">Digital Marketing Campaign</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="mt-4 text-end">
                    <button type="button" class="btn btn-primary nextBtn">Next</button>
                </div>
            </div>

            <!-- STEP 2A: DEVELOPMENT SECTION -->
            <div class="section p-4" id="dev_section">
                <h5 class="step-title mb-3">2. Development Project Details</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Project Type *</label>
                        <select name="project_type" class="form-select" required>
                            <option value="">-- Select --</option>
                            <option>Website</option>
                            <option>Web Application</option>
                            <option>Mobile Application</option>
                            <option>E-commerce</option>
                            <option>Portfolio / Personal Site</option>
                            <option>Internal System (Dashboard)</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Preferred Platform / Technology</label>
                        <select name="technology" class="form-select">
                            <option value="">-- Select --</option>
                            <option>WordPress</option>
                            <option>Custom PHP</option>
                            <option>React / Next.js</option>
                            <option>Laravel</option>
                            <option>Flutter</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3">
                    <label>Brief Description of Your Business</label>
                    <textarea name="business_description" class="form-control" rows="3"></textarea>
                </div>

                <div class="mt-3">
                    <label>Main Purpose of the Website/App</label>
                    <textarea name="project_purpose" class="form-control" rows="2"></textarea>
                </div>

                <div class="mt-3">
                    <label>Key Features Required</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check"><input type="checkbox" name="features[]" value="User Authentication" class="form-check-input"><label class="form-check-label pt-2">User Authentication</label></div>
                            <div class="form-check"><input type="checkbox" name="features[]" value="Admin Dashboard" class="form-check-input"><label class="form-check-label pt-2">Admin Dashboard</label></div>
                            <div class="form-check"><input type="checkbox" name="features[]" value="Payment Gateway" class="form-check-input"><label class="form-check-label pt-2">Payment Gateway</label></div>
                            <div class="form-check"><input type="checkbox" name="features[]" value="Booking System" class="form-check-input"><label class="form-check-label pt-2">Booking System</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check"><input type="checkbox" name="features[]" value="Blog or News" class="form-check-input"><label class="form-check-label pt-2">Blog / News Section</label></div>
                            <div class="form-check"><input type="checkbox" name="features[]" value="Live Chat" class="form-check-input"><label class="form-check-label pt-2">Live Chat Support</label></div>
                            <div class="form-check"><input type="checkbox" name="features[]" value="Analytics" class="form-check-input"><label class="form-check-label pt-2">Analytics & Reports</label></div>
                            <div class="form-check"><input type="checkbox" name="features[]" value="Other" class="form-check-input"><label class="form-check-label pt-2">Other</label></div>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <label>Competitor Websites (optional)</label>
                    <textarea name="competitors" class="form-control" rows="2" placeholder="List any competitor sites you like or dislike"></textarea>
                </div>

                <div class="mt-3">
                    <label>Design Preference</label>
                    <select name="style_preference" class="form-select">
                        <option>Modern & Minimal</option>
                        <option>Corporate & Clean</option>
                        <option>Creative & Vibrant</option>
                        <option>Luxury / Premium Feel</option>
                        <option>Dark Mode / Sleek</option>
                    </select>
                </div>

                <div class="mt-4 text-end">
                    <button type="button" class="btn btn-danger prevBtn">Back</button>
                    <button type="button" class="btn btn-primary nextBtn">Next</button>
                </div>
            </div>

            <!-- STEP 2B: MARKETING SECTION -->
            <div class="section p-4" id="marketing_section">
                <h5 class="step-title mb-3">3. Digital Marketing Campaign Details</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Services Interested In *</label>
                        <select name="marketing_focus[]" class="form-select" required>
                            <option>SEO (Search Engine Optimization)</option>
                            <option>Google Ads / PPC</option>
                            <option>Social Media Marketing</option>
                            <option>Content Creation</option>
                            <option>Brand Strategy</option>
                            <option>Email Marketing</option>
                            <option>Influencer Marketing</option>
                        </select>
                        <small class="text-muted">Hold Ctrl/Cmd to select multiple options.</small>
                    </div>
                    <div class="col-md-6">
                        <label>Ad Budget (Monthly)</label>
                        <select name="ad_budget" class="form-select">
                            <option value="">-- Select Range --</option>
                            <option>£150 - £200</option>
                            <option>£200 - £500</option>
                            <option>£500 - £1000</option>
                            <option>£1000 - £3000</option>
                            <option>£3000 - £5000</option>
                            <option>£5000+</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3">
                    <label>Main Marketing Goals *</label>
                    <textarea name="marketing_goals" class="form-control" rows="3" required placeholder="e.g. generate leads, boost sales, increase engagement, brand awareness"></textarea>
                </div>

                <div class="mt-3">
                    <label>Current Platforms (URLs or Handles)</label>
                    <textarea name="current_presence" class="form-control" rows="2" placeholder="Instagram, Facebook, LinkedIn, etc."></textarea>
                </div>

                <div class="mt-3">
                    <label>Target Audience Description</label>
                    <textarea name="target_audience" class="form-control" rows="2" placeholder="Who are you trying to reach?"></textarea>
                </div>

                <div class="mt-3">
                    <label>Key Performance Indicators (KPIs)</label>
                    <input type="text" name="kpis" class="form-control" placeholder="E.g. Conversions, Clicks, Engagement Rate, ROI">
                </div>

                <div class="mt-4 text-end">
                    <button type="button" class="btn btn-danger prevBtn">Back</button>
                    <button type="button" class="btn btn-primary nextBtn">Next</button>
                </div>
            </div>

            <!-- STEP 4: FINAL DETAILS -->
            <div class="section p-4" id="step4">
                <h5 class="step-title mb-3">4. Project Logistics & Agreement</h5>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Overall Budget *</label>
                        <select name="budget" class="form-select" required>
                            <option value="">-- Select --</option>
                            <option>£500 - £1000</option>
                            <option>£1000 - £3000</option>
                            <option>£3000 - £5000</option>
                            <option>£5000 - £10,000</option>
                            <option>£10,000+</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Desired Completion Date *</label>
                        <input type="date" name="deadline" class="form-control" required>
                    </div>
                </div>

                <div class="mt-3">
                    <label>Upload Any Supporting Files (optional)</label>
                    <input type="file" name="attachments[]" multiple class="form-control">
                </div>

                <div class="mt-3">
                    <label>Preferred Communication Channel</label>
                    <select name="communication" class="form-select">
                        <option>Email</option>
                        <option>Phone Call</option>
                        <option>WhatsApp</option>
                        <option>Zoom / Google Meet</option>
                    </select>
                </div>

                <div class="mt-3">
                    <div class="form-check">
                        <input type="checkbox" name="nda_agreement" value="Yes" class="form-check-input" required>
                        <label class="form-check-label pt-2"> I agree to share information under a confidentiality (NDA) agreement and confirm that all the information provided is accurate and complete.</label>
                    </div>
                </div>

                <div class="mt-4 text-center">
                    <button type="button" class="btn btn-danger prevBtn">Back</button>
                    <button type="submit" class="btn btn-primary px-4">Submit Form</button>
                </div>
            </div>
        </form>
    </div>
</div>


<?php require_once "footer.php"; ?>