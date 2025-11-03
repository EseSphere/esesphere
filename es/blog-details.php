<?php include 'header.php'; ?>

<!-- Page Title -->
<div class="page-title">
  <div class="heading">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>Blog Details</h1>
          <p class="mb-0">Welcome to the EseSphere blog – where we share insights on web design, app development, UI/UX, and digital solutions to help your business grow. Design. Develop. Delight.</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">Blog Details</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <!-- Blog Details Section -->
      <section id="blog-details" class="blog-details section">
        <div class="container">
          <article class="article">
            <div class="post-img">
              <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="title">How EseSphere Transforms Ideas into Digital Success</h2>
            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">EseSphere Team</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01">Jan 1, 2025</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
              </ul>
            </div><!-- End meta top -->

            <div class="content">
              <p>
                At EseSphere, we don’t just build websites and apps – we create digital experiences that connect businesses with their audience. From responsive web design to powerful mobile applications, we blend creativity and technology to deliver solutions that delight.
              </p>

              <p>
                Our approach focuses on three pillars: design that inspires, development that performs, and results that delight. Whether it’s UI/UX design, SEO, or digital marketing, we tailor every project to meet your business goals.
              </p>

              <blockquote>
                <p>
                  "Design. Develop. Delight." – This is more than our slogan. It’s the standard we set for every project.
                </p>
              </blockquote>

              <p>
                We specialize in creating seamless online experiences that help businesses scale. From e-commerce platforms that drive sales to mobile apps that keep customers engaged, our team ensures that every solution is innovative, user-friendly, and reliable.
              </p>

              <h3>Why Businesses Choose EseSphere</h3>
              <p>
                Clients choose EseSphere because we combine technical expertise with creative excellence. Our services include Web Design, Mobile App Development, UI/UX Design, Digital Marketing, E-commerce Development, Print & Graphics, SEO, App Maintenance, and more.
              </p>
              <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

              <h3>Building the Future with Technology</h3>
              <p>
                Technology is at the heart of every modern business. At EseSphere, we partner with you to create solutions that not only meet today’s needs but also prepare your brand for the future. From responsive design to innovative digital campaigns, we’re here to support your growth.
              </p>
            </div><!-- End post content -->

            <div class="meta-bottom">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="#">Technology</a></li>
              </ul>

              <i class="bi bi-tags"></i>
              <ul class="tags">
                <li><a href="#">Web Design</a></li>
                <li><a href="#">Mobile Apps</a></li>
                <li><a href="#">Digital Marketing</a></li>
              </ul>
            </div><!-- End meta bottom -->
          </article>
        </div>
      </section><!-- /Blog Details Section -->

      <!-- Blog Author Section -->
      <section id="blog-author" class="blog-author section">
        <div class="container">
          <div class="author-container d-flex align-items-center">
            <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
            <div>
              <h4>EseSphere</h4>
              <div class="social-links">
                <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/#"><i class="bi bi-instagram"></i></a>
              </div>
              <p>
                EseSphere delivers world-class web and mobile solutions. We help brands stand out with creative design, smart development, and digital strategies that drive growth.
              </p>
            </div>
          </div>
        </div>
      </section><!-- /Blog Author Section -->

      <!-- Blog Comments Section -->
      <section id="blog-comments" class="blog-comments section">
        <div class="container">
          <h4 class="comments-count">8 Comments</h4>
          <!-- Existing comments remain as-is -->
        </div>
      </section><!-- /Blog Comments Section -->

      <!-- Comment Form Section -->
      <section id="comment-form" class="comment-form section">
        <div class="container">
          <form action="">
            <h4>Post Comment</h4>
            <p>Your email address will not be published. Required fields are marked * </p>
            <div class="row">
              <div class="col-md-6 form-group">
                <input name="name" type="text" class="form-control" placeholder="Your Name*">
              </div>
              <div class="col-md-6 form-group">
                <input name="email" type="text" class="form-control" placeholder="Your Email*">
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <input name="website" type="text" class="form-control" placeholder="Your Website">
              </div>
            </div>
            <div class="row">
              <div class="col form-group">
                <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Post Comment</button>
            </div>
          </form>
        </div>
      </section><!-- /Comment Form Section -->
    </div>

    <div class="col-lg-4 sidebar">
      <div class="widgets-container">

        <!-- Search Widget -->
        <div class="search-widget widget-item">
          <h3 class="widget-title">Search</h3>
          <form action="">
            <input type="text">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>
        </div><!--/Search Widget -->

        <!-- Categories Widget -->
        <div class="categories-widget widget-item">
          <h3 class="widget-title">Categories</h3>
          <ul class="mt-3">
            <li><a href="#">Web Design <span>(25)</span></a></li>
            <li><a href="#">Mobile Apps <span>(12)</span></a></li>
            <li><a href="#">Digital Marketing <span>(18)</span></a></li>
            <li><a href="#">UI/UX <span>(10)</span></a></li>
            <li><a href="#">E-commerce <span>(8)</span></a></li>
            <li><a href="#">SEO <span>(14)</span></a></li>
          </ul>
        </div><!--/Categories Widget -->

        <!-- Recent Posts Widget -->
        <div class="recent-posts-widget widget-item">
          <h3 class="widget-title">Recent Posts</h3>
          <div class="post-item">
            <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="blog-details.html">Top 5 Web Design Trends for 2025</a></h4>
              <time datetime="2025-01-01">Jan 1, 2025</time>
            </div>
          </div><!-- End recent post item-->

          <div class="post-item">
            <img src="assets/img/blog/blog-recent-2.jpg" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="blog-details.html">Why Your Business Needs a Mobile App</a></h4>
              <time datetime="2025-01-05">Jan 5, 2025</time>
            </div>
          </div><!-- End recent post item-->

          <div class="post-item">
            <img src="assets/img/blog/blog-recent-3.jpg" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="blog-details.html">Boost Your Brand with Digital Marketing</a></h4>
              <time datetime="2025-01-10">Jan 10, 2025</time>
            </div>
          </div><!-- End recent post item-->
        </div><!--/Recent Posts Widget -->

        <!-- Tags Widget -->
        <div class="tags-widget widget-item">
          <h3 class="widget-title">Tags</h3>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Apps</a></li>
            <li><a href="#">UI/UX</a></li>
            <li><a href="#">SEO</a></li>
            <li><a href="#">Digital Marketing</a></li>
            <li><a href="#">E-commerce</a></li>
            <li><a href="#">Creative</a></li>
            <li><a href="#">Technology</a></li>
          </ul>
        </div><!--/Tags Widget -->

      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>