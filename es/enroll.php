<?php include 'header.php'; ?>

<!-- Page Title -->
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Enroll in a Course</h1>
                    <p class="mb-0">
                        Fill out the form below to secure your spot in one of our courses. Take the first step towards mastering your skills!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="./">Home</a></li>
                <li class="current">Enroll</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- Multi-Step Enrollment Form Section -->
<section id="enroll" class="enroll section">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card p-5 shadow-sm rounded">
                    <h2 class="mb-4 text-center">Course Enrollment Form</h2>
                    <p class="text-center mb-4">
                        Complete all steps to successfully enroll. Fields marked with <span class="text-danger">*</span> are required.
                    </p>

                    <!-- Progress Bar -->
                    <div class="progress mb-4" style="height: 20px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%;" id="progressBar">Step 1 of 4</div>
                    </div>

                    <form id="enrollmentForm" action="process_enrollment.php" method="POST">

                        <!-- Step 1: Personal Information -->
                        <fieldset class="form-step">
                            <h4 class="mb-3">Personal Information</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="full_name" class="form-control" id="fullName" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="+123 456 7890" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" class="form-control" id="dob">
                                </div>
                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select" name="gender" id="gender">
                                        <option value="" disabled selected>Select gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-4 text-end">
                                <button type="button" class="btn btn-danger next-step">Next</button>
                            </div>
                        </fieldset>

                        <!-- Step 2: Address & Education -->
                        <fieldset class="form-step d-none">
                            <h4 class="mb-3">Address & Education</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" id="city" placeholder="City">
                                </div>
                                <div class="col-md-6">
                                    <label for="state" class="form-label">State/Region</label>
                                    <input type="text" name="state" class="form-control" id="state" placeholder="State">
                                </div>
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Full Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="2" placeholder="Street, house number, postal code"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="education" class="form-label">Highest Qualification</label>
                                    <input type="text" name="education" class="form-control" id="education" placeholder="e.g., Bachelor's in Computer Science">
                                </div>
                                <div class="col-md-6">
                                    <label for="experience" class="form-label">Relevant Experience</label>
                                    <input type="text" name="experience" class="form-control" id="experience" placeholder="e.g., 2 years in web development">
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                <button type="button" class="btn btn-danger next-step">Next</button>
                            </div>
                        </fieldset>

                        <!-- Step 3: Course Details & Schedule -->
                        <fieldset class="form-step d-none">
                            <h4 class="mb-3">Course Details</h4>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="course" class="form-label">Select Course <span class="text-danger">*</span></label>
                                    <select class="form-select" name="course" id="course" required>
                                        <option value="" disabled selected>Select a course</option>
                                        <option value="HTML & CSS Basics">HTML & CSS Basics</option>
                                        <option value="JavaScript for Beginners">JavaScript for Beginners</option>
                                        <option value="PHP & MySQL">PHP & MySQL</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                        <option value="Digital Marketing">Digital Marketing</option>
                                        <option value="Mobile App Development">Mobile App Development</option>
                                        <option value="Python Basics">Python Basics</option>
                                        <option value="Graphics Design">Graphics Design</option>
                                        <option value="Version Control with Git">Version Control with Git</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="schedule" class="form-label">Preferred Schedule</label>
                                    <select class="form-select" name="schedule" id="schedule">
                                        <option value="" disabled selected>Select schedule</option>
                                        <option value="Morning">Morning</option>
                                        <option value="Afternoon">Afternoon</option>
                                        <option value="Evening">Evening</option>
                                        <option value="Weekend">Weekend</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="message" class="form-label">Additional Notes (Optional)</label>
                                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Any questions or special requirements"></textarea>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                <button type="button" class="btn btn-danger next-step">Next</button>
                            </div>
                        </fieldset>

                        <!-- Step 4: Payment & Agreement -->
                        <fieldset class="form-step d-none">
                            <h4 class="mb-3">Payment & Agreement</h4>
                            <div class="mb-3">
                                <label class="form-label">Payment Method <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="payment1" value="Credit Card" required>
                                    <label class="form-check-label" for="payment1">Credit Card</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="payment2" value="PayPal" required>
                                    <label class="form-check-label" for="payment2">PayPal</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" id="payment3" value="Bank Transfer" required>
                                    <label class="form-check-label" for="payment3">Bank Transfer</label>
                                </div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agreement" name="agreement" required>
                                <label class="form-check-label" for="agreement">
                                    I agree to the <a href="#">terms and conditions</a> and consent to the processing of my data. <span class="text-danger">*</span>
                                </label>
                            </div>

                            <div class="mt-4 d-flex justify-content-between">
                                <button type="button" class="btn btn-secondary prev-step">Previous</button>
                                <button type="submit" class="btn btn-danger">Enroll Now</button>
                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Multi-Step Form Script -->
<script>
    const steps = document.querySelectorAll(".form-step");
    const nextBtns = document.querySelectorAll(".next-step");
    const prevBtns = document.querySelectorAll(".prev-step");
    const progressBar = document.getElementById("progressBar");
    let currentStep = 0;

    nextBtns.forEach(button => {
        button.addEventListener("click", () => {
            if (!validateStep(currentStep)) return;
            steps[currentStep].classList.add("d-none");
            currentStep++;
            steps[currentStep].classList.remove("d-none");
            updateProgressBar();
        });
    });

    prevBtns.forEach(button => {
        button.addEventListener("click", () => {
            steps[currentStep].classList.add("d-none");
            currentStep--;
            steps[currentStep].classList.remove("d-none");
            updateProgressBar();
        });
    });

    function updateProgressBar() {
        const stepPercent = ((currentStep + 1) / steps.length) * 100;
        progressBar.style.width = stepPercent + "%";
        progressBar.textContent = `Step ${currentStep + 1} of ${steps.length}`;
    }

    function validateStep(step) {
        const inputs = steps[step].querySelectorAll("input, select, textarea");
        for (let input of inputs) {
            if (!input.checkValidity()) {
                input.reportValidity();
                return false;
            }
        }
        return true;
    }
</script>

<?php include 'footer.php'; ?>