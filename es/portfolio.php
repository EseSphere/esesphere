<?php include 'header.php'; ?>

<!-- Page Title: Portfolio -->
<div class="page-title">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>Portfolio</h1>
                    <p class="mb-0">EseSphere delivers world-class web and mobile solutions. We design, develop, and delight with websites, apps, web marketing, e-commerce, and innovative technology services tailored to your business.</p>
                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="./">Home</a></li>
                <li class="current">Portfolio</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Work</h2>
        <p>Explore some of the innovative projects we’ve designed, developed, and delivered for our clients across web, mobile, branding, and digital marketing.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-web">Web</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-branding">Branding</li>
                <li data-filter=".filter-digital">Digital Marketing</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <?php
                // Helper function to scan folders
                function loadPortfolioItems($folder, $filterClass, $gallery)
                {
                    $path = "./img/portfolio/$folder";
                    if (is_dir($path)) {
                        $files = glob($path . "/*.{jpg,jpeg,png,gif,webp}", GLOB_BRACE);
                        foreach ($files as $file) {
                            $filename = basename($file);
                            $title = pathinfo($filename, PATHINFO_FILENAME);
                ?>
                            <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= $filterClass ?>">
                                <div class="portfolio-content h-100">
                                    <a href="<?= $file ?>" data-gallery="portfolio-gallery-<?= $gallery ?>" class="glightbox">
                                        <img src="<?= $file ?>" class="img-fluid" alt="<?= ucfirst($title) ?>">
                                    </a>
                                    <div class="portfolio-info">
                                        <h4><a href="#" title="More Details"><?= ucfirst(str_replace('-', ' ', $title)) ?></a></h4>
                                        <p>Project from <?= ucfirst($folder) ?> category.</p>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }

                // Load projects from folders
                loadPortfolioItems("web", "filter-web", "web");
                loadPortfolioItems("app", "filter-app", "app");
                loadPortfolioItems("branding", "filter-branding", "branding");
                loadPortfolioItems("digital-marketing", "filter-digital", "digital");
                ?>

            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>