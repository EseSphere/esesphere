<?php include 'header.php'; ?>
<style>
    .course-price {
        font-size: 1.1rem;
        color: #c0392b;
        margin: 10px 0;
    }
</style>
<!-- Page Title -->
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Our Courses</h1>
                    <p class="mb-0">
                        Learn with EseSphere! Explore our courses on web development, design, marketing, and more crafted to help you grow your skills and build amazing projects.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="./">Home</a></li>
                <li class="current">courses</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6">
                <img src="./img/learn-build.png" class="img-fluid rounded" alt="EseSphere courses">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <h2 class="mt-4">Learn. Build. Master.</h2>
                <p>
                    Our courses are designed to help beginners and professionals alike. Whether you’re building your first website,
                    designing a mobile app, or learning digital marketing, we’ve got step-by-step guides for you.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> Hands-on, practical lessons</li>
                    <li><i class="bi bi-check-circle"></i> Beginner to advanced topics</li>
                    <li><i class="bi bi-check-circle"></i> Updated with latest technologies</li>
                    <li><i class="bi bi-check-circle"></i> Free and easy to follow</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- courses Section -->
<section id="courses" class="services section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Our courses</h2>
        <p>Explore our growing collection of web, app, and design courses created by experts.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">

            <!-- HTML & CSS -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-filetype-html"></i></div>
                    <h3>HTML & CSS Basics</h3>
                    <p>Learn to build beautiful, responsive web pages with HTML and CSS fundamentals.</p>
                    <p class="course-price"><strong>£10–£15 / hour</strong></p>
                    <a href="./course-html-css.php?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- JavaScript -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-code-slash"></i></div>
                    <h3>JavaScript for Beginners</h3>
                    <p>Understand how JavaScript works to make your websites dynamic and interactive.</p>
                    <p class="course-price"><strong>£12–£18 / hour</strong></p>
                    <a href="./course-javascript?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- PHP & MySQL -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-server"></i></div>
                    <h3>PHP & MySQL</h3>
                    <p>Learn backend development with PHP and MySQL to create dynamic, database-driven sites.</p>
                    <p class="course-price"><strong>£15–£18 / hour</strong></p>
                    <a href="./course-php-mysql?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- UI/UX Design -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-palette"></i></div>
                    <h3>UI/UX Design</h3>
                    <p>Learn design principles, color theory, and user experience best practices.</p>
                    <p class="course-price"><strong>£12–£16 / hour</strong></p>
                    <a href="./course-ui-ux?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Digital Marketing -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-megaphone"></i></div>
                    <h3>Digital Marketing</h3>
                    <p>Master SEO, social media marketing, and online advertising techniques.</p>
                    <p class="course-price"><strong>£10–£15 / hour</strong></p>
                    <a href="./course-digital-marketing?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Mobile App Development -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-phone"></i></div>
                    <h3>Mobile App Development</h3>
                    <p>Learn to build Android and iOS apps with Flutter and React Native.</p>
                    <p class="course-price"><strong>£15–£20 / hour</strong></p>
                    <a href="./course-mobile-apps?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Python Basics -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-terminal"></i></div>
                    <h3>Python Basics</h3>
                    <p>Start programming with Python — learn syntax, logic, and problem-solving fundamentals.</p>
                    <p class="course-price"><strong>£12–£16 / hour</strong></p>
                    <a href="./course-python?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Graphics Design -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="800">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-brush"></i></div>
                    <h3>Graphics Design</h3>
                    <p>Learn to create stunning visual designs using Adobe Photoshop, Illustrator, and Canva.</p>
                    <p class="course-price"><strong>£10–£15 / hour</strong></p>
                    <a href="./course-graphics-design?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Version Control with Git -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="900">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-git"></i></div>
                    <h3>Version Control with Git</h3>
                    <p>Master Git for version control — track changes, collaborate, and manage your code like a pro.</p>
                    <p class="course-price"><strong>£12–£16 / hour</strong></p>
                    <a href="./course-git?ulen_ru74=<?= $encrypted ?>" class="btn btn-primary" style="background-color: #c0392b; border: none;">
                        Learn More
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php'; ?>