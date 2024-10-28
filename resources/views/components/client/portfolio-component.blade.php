<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Check My latest work</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter=".filter-app" class="filter-active">Web Apps</li>

                </ul>
                <!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="{{ asset('build/assets/img/portfolio/app-1.jpg') }}" class="img-fluid"
                                alt="" />
                            <div class="portfolio-info">
                                <h4>Backend</h4>
                                <p>This is the admin page for the Mangal Secondary School.</p>
                                <a href="{{ asset('build/assets/img/portfolio/app-1.jpg') }}" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="#" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                </div>
                <!-- End Portfolio Container -->
            </div>
        </div>
    </section>
    <!-- /Portfolio Section -->
</div>
