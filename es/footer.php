<div style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;" class="mt-5 mb-5 p-5 rounded-3 accent-background">
    <div class="flex text-center justify-center items-center">
        <h3 class="text-black">Looking to Create a Website?</h3>
        <p class="fs-5">Contact EseSphere Ltd - Top Web Design and Technology Solutions Company in Lagos. We design, develop, and delight with websites, mobile apps, digital marketing, and innovative tech services!</p>
        <a href="./get-a-quote?ulen_ru74=<?= $encrypted ?>" class="btn btn-outline-success btn-lg align-self-center">Get Started Now!</a>
    </div>
</div>

</main>

<footer id="footer" class="footer accent-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-about">
                <a href="./" class="text-decoration-none">
                    <img src="./img/logo-bg.png" style="width: 250px; height:80px;" alt="">
                </a>
                <hr>
                <p>EseSphere Ltd delivers world-class web and mobile solutions. We design, develop, and delight with websites, apps, digital marketing, and innovative technology services tailored to your business.</p>
                <div class="social-links d-flex mt-4">
                    <a href="https://x.com/eseSphereEnt"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/ese.sphere"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/ese.sphere/"><i class="bi bi-instagram"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="./" class="nav-link" data-page="home">Home</a></li>
                    <li><a href="./about?ulen_ru74=<?= $encrypted ?>" class="nav-link" data-page="about">About Us</a></li>
                    <li><a href="./services?ulen_ru74=<?= $encrypted ?>" class="nav-link" data-page="services">Services</a></li>
                    <li><a href="./portfolio?ulen_ru74=<?= $encrypted ?>" class="nav-link" data-page="portfolio">Portfolio</a></li>
                    <li><a href="./courses?ulen_ru74=<?= $encrypted ?>" class="nav-link" data-page="courses">Courses</a></li>
                    <li><a href="./contact?ulen_ru74=<?= $encrypted ?>" class="nav-link" data-page="contact">Contact</a></li>
                    <li><a href="./terms-of-service?ulen_ru74=<?= $encrypted ?>" class="nav-link" data-page="terms">Terms of Service</a></li>
                    <li><a href="./privacy-policy?ulen_ru74=<?= $encrypted ?>" class="nav-link" data-page="privacy">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><a href="./web-design?ulen_ru74=<?= $encrypted ?>">Web Design</a></li>
                    <li><a href="./mobile-app-development?ulen_ru74=<?= $encrypted ?>">Mobile App Development</a></li>
                    <li><a href="./ui-ux-design?ulen_ru74=<?= $encrypted ?>">UI/UX Design</a></li>
                    <li><a href="./digital-marketing?ulen_ru74=<?= $encrypted ?>">Digital Marketing</a></li>
                    <li><a href="./e-commerce-development?ulen_ru74=<?= $encrypted ?>">E-commerce Development</a></li>
                    <li><a href="./software-development?ulen_ru74=<?= $encrypted ?>">Software Development</a></li>
                    <li><a href="./graphics-design?ulen_ru74=<?= $encrypted ?>">Graphics Design</a></li>
                    <li><a href="./app-maintenance-support?ulen_ru74=<?= $encrypted ?>">App Maintenance & Support</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>15 Waterloo Road</p>
                <p>Wolverhampton, WV1 3DJ</p>
                <p>United Kingdom</p>
                <p class="mt-4"><strong>Phone:</strong> <span>0 7448 222483</span></p>
                <p><strong>Email:</strong> <span>info@esesphere.com</span></p>
            </div>
        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">EseSphere Ltd</strong> <span>All Rights Reserved</span></p>
    </div>
</footer>
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="./script.js"></script>
<script>
    const sections = document.querySelectorAll('.section');
    const nextBtns = document.querySelectorAll('.nextBtn');
    const prevBtns = document.querySelectorAll('.prevBtn');
    const progressBar = document.getElementById('progressBar');
    let currentStep = 0;

    function showSection(index) {
        sections.forEach((s, i) => s.classList.toggle('active', i === index));
        progressBar.style.width = ((index + 1) / sections.length) * 100 + '%';
    }

    // Validate required fields in the current section
    function validateStep(stepIndex) {
        const currentSection = sections[stepIndex];
        const requiredFields = currentSection.querySelectorAll('[required]');
        for (let field of requiredFields) {
            const fieldType = field.type;

            // Checkboxes or multi-selects
            if (fieldType === 'checkbox') {
                const checkboxes = currentSection.querySelectorAll(`input[name="${field.name}"]`);
                const anyChecked = Array.from(checkboxes).some(cb => cb.checked);
                if (!anyChecked) {
                    alert('Please select at least one option.');
                    return false;
                }
            } else if (field.tagName === 'SELECT' && field.multiple) {
                if (!field.selectedOptions.length) {
                    alert('Please select at least one option.');
                    field.focus();
                    return false;
                }
            } else { // Text, email, tel, date, single select, textarea
                if (!field.value || field.value.trim() === '') {
                    field.classList.add('is-invalid'); // Bootstrap invalid style
                    field.focus();
                    return false;
                } else {
                    field.classList.remove('is-invalid');
                }
            }
        }
        return true;
    }

    nextBtns.forEach(btn => btn.addEventListener('click', () => {
        if (validateStep(currentStep)) { // Only move forward if validation passes
            if (currentStep < sections.length - 1) currentStep++;
            showSection(currentStep);
        }
    }));

    prevBtns.forEach(btn => btn.addEventListener('click', () => {
        if (currentStep > 0) currentStep--;
        showSection(currentStep);
    }));

    showSection(currentStep);
</script>

</body>

</html>