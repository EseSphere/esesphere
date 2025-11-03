<?php include 'header.php'; ?>

<!-- Hero Section -->
<section id="hero" class="hero section accent-background">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-5 justify-content-between">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h2><span>Welcome to </span><span class="accent">EseSphere</span></h2>
        <p>We deliver world-class web and mobile solutions. We design, develop, and delight with websites, apps, digital marketing, and innovative technology services tailored to your business.</p>
        <div class="d-flex gap-2">
          <a href="#about" class="btn-get-started">Get Started</a>
          <a href="./get-a-quote?ulen_ru74=<?= $encrypted ?>" class="btn-get-started btn btn-info">Get a Quote</a>
        </div>
      </div>
      <div class=" col-lg-5 order-1 order-lg-2">
        <img src="assets/img/hero-img.svg" class="img-fluid" alt="EseSphere Hero Image">
      </div>
    </div>
  </div>

  <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
    <div class="container position-relative">
      <div class="row gy-4 mt-5">

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-easel"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Web Design</a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-gem"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Mobile Apps</a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-geo-alt"></i></div>
            <h4 class="title"><a href="" class="stretched-link">UI/UX Design</a></h4>
          </div>
        </div><!--End Icon Box -->

        <div class="col-xl-3 col-md-6">
          <div class="icon-box">
            <div class="icon"><i class="bi bi-command"></i></div>
            <h4 class="title"><a href="" class="stretched-link">Digital Marketing</a></h4>
          </div>
        </div><!--End Icon Box -->

      </div>
    </div>
  </div>
</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About Us<br></h2>
    <p>Design. Develop. Delight. — Crafting world-class digital solutions for your business</p>
  </div>
  <!-- End Section Title -->
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>Your Trusted Partner in Web and Mobile Innovation</h3>
        <img src="assets/img/about.jpg" class="img-fluid rounded-4 mb-4" alt="EseSphere">
        <p>EseSphere specializes in creating exceptional digital experiences. From web and mobile app development to UI/UX design, we deliver solutions that not only meet your needs but also delight your users.</p>
        <p>We combine creativity, technology, and strategic thinking to provide services including Digital Marketing, E-commerce Development, SEO, Print & Graphics, App Maintenance, and Software Development. Every project is tailored to help your business thrive in the digital world.</p>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            At EseSphere, we don’t just build websites or apps — we create experiences that connect, engage, and inspire your audience.
          </p>
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>Custom Web & Mobile App Development</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>UI/UX Design & Responsive Design Solutions</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Digital Marketing, SEO, and E-commerce Strategy to grow your business</span></li>
          </ul>
          <p>
            Our team ensures your digital presence is seamless, engaging, and effective. From concept to launch, EseSphere is committed to delivering excellence at every step.
          </p>

          <div class="position-relative mt-4">
            <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="EseSphere Team">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section id="stats" class="stats section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-5">
        <img src="assets/img/stats-img.svg" alt="" class="img-fluid">
      </div>

      <div class="col-lg-7">
        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-lightbulb flex-shrink-0"></i>
              <div>
                <span>Vision</span>
                <p><strong>Our Vision</strong> <span>to inspire innovation and create impactful digital solutions</span></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-bullseye flex-shrink-0"></i>
              <div>
                <span>Purpose</span>
                <p><strong>Our Purpose</strong> <span>to empower businesses with technology that drives growth</span></p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="stats-item d-flex">
              <i class="bi bi-flag flex-shrink-0"></i>
              <div>
                <span>Mission</span>
                <p><strong>Our Mission</strong> <span>to design, develop, and delight through world-class digital experiences</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section><!-- /Stats Section -->

<!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">
  <div class="container">
    <img src="assets/img/cta-bg.jpg" alt="">
    <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox play-btn"></a>
          <h3>Transform Your Digital Presence</h3>
          <p>At EseSphere, we design, develop, and deliver world-class web and mobile solutions that elevate your business. Let’s create something amazing together.</p>
          <a class="cta-btn" href="#">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Call To Action Section -->

<!-- Services Section -->
<section id="services" class="services section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services</h2>
    <p>Delivering exceptional technology solutions tailored to your business needs</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item  position-relative">
          <div class="icon">
            <i class="bi bi-layout-text-window-reverse"></i>
          </div>
          <h3>Web Design</h3>
          <p>Creating responsive and visually stunning websites that engage your audience and enhance your brand presence.</p>
          <a href="./web-design?ulen_ru74=<?= $encrypted ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-phone"></i>
          </div>
          <h3>Mobile App Development</h3>
          <p>Building intuitive and high-performance mobile applications for iOS and Android to elevate your business reach.</p>
          <a href="./mobile-app-development?ulen_ru74=<?= $encrypted ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-palette"></i>
          </div>
          <h3>UI/UX Design</h3>
          <p>Designing user-centric interfaces and experiences that captivate users and drive engagement across all platforms.</p>
          <a href="./ui-ux-design?ulen_ru74=<?= $encrypted ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-megaphone"></i>
          </div>
          <h3>Digital Marketing</h3>
          <p>Optimizing your online presence through SEO, social media, and marketing strategies that drive growth and visibility.</p>
          <a href="./digital-marketing?ulen_ru74=<?= $encrypted ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-cart"></i>
          </div>
          <h3>E-commerce Development</h3>
          <p>Developing scalable and secure e-commerce platforms that enhance your sales and provide seamless shopping experiences.</p>
          <a href="./e-commerce-development?ulen_ru74=<?= $encrypted ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-image"></i>
          </div>
          <h3>Graphics Design</h3>
          <p>Creating stunning visual designs, branding materials, and print graphics that communicate your message effectively.</p>
          <a href="./graphics-design?ulen_ru74=<?= $encrypted ?>" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Services Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>What our clients say about working with EseSphere</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 10
            }
          }
        }
      </script>
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>David Johnson</h3>
            <h4>Small Business Owner</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>EseSphere transformed our outdated website into a modern, responsive platform that our customers love. The team was professional, creative, and always attentive to our needs.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Amelia Carter</h3>
            <h4>E-commerce Entrepreneur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Thanks to EseSphere, my online store now runs smoothly and attracts more sales. Their e-commerce expertise and marketing support exceeded my expectations.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Michael Green</h3>
            <h4>Startup Founder</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Working with EseSphere was seamless. They developed our mobile app on time and with great attention to detail. I highly recommend their services to any startup.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>Sophia Williams</h3>
            <h4>Marketing Manager</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>The UI/UX design from EseSphere elevated our brand. Customers find our app much easier to use, and we’ve seen a boost in engagement and retention.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <h3>James Miller</h3>
            <h4>Tech Consultant</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>EseSphere goes beyond development – they become a true partner in your success. Their support and maintenance services keep our systems running perfectly.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section><!-- /Testimonials Section -->

<!-- Faq Section -->
<section id="faq" class="faq section">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="content px-xl-5">
          <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
          <p>
            Discover how EseSphere can help your business thrive with web, mobile, and digital solutions. Here are some of the questions our clients often ask.
          </p>
        </div>
      </div>

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
        <div class="faq-container">
          <div class="faq-item faq-active">
            <h3><span class="num">1.</span> <span>What services does EseSphere offer?</span></h3>
            <div class="faq-content">
              <p>EseSphere specializes in Web Design, Mobile App Development, UI/UX Design, Digital Marketing, E-commerce Development, Software Development, SEO, and more. We deliver end-to-end solutions tailored to your business needs.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span class="num">2.</span> <span>How does EseSphere ensure quality in projects?</span></h3>
            <div class="faq-content">
              <p>We follow best practices in design, development, and testing. Our team focuses on responsive design, clean code, and user-friendly interfaces, ensuring each project meets high standards and exceeds expectations.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span class="num">3.</span> <span>Do you provide ongoing support after launch?</span></h3>
            <div class="faq-content">
              <p>Yes! EseSphere offers app and website maintenance, updates, and performance optimization to ensure your digital solutions remain secure, fast, and fully functional after launch.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span class="num">4.</span> <span>Can you handle digital marketing and SEO?</span></h3>
            <div class="faq-content">
              <p>Absolutely. Our team provides SEO strategies, content marketing, social media management, and other digital marketing services to help your business grow its online presence and reach more customers.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span class="num">5.</span> <span>How do I get started with EseSphere?</span></h3>
            <div class="faq-content">
              <p>Getting started is simple. Contact us via our website or email, share your project requirements, and our team will guide you through the planning, design, and development process from start to finish.</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>