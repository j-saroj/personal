
<div>
    <!-- Well begun is half done. - Aristotle -->
    <!-- Faq Section -->
    <section id="faq" class="faq section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-container">

                        @foreach ($faqs as $faq)
                            <div class="faq-item faq-active">
                                <h3>
                                    {{ $faq->question }} </h3>
                                        <div class="faq-content">
                                            <p>
                                                {{ $faq->answer }}
                                            </p>
                                        </div>
                                        <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        @endforeach
                        <!-- End Faq item-->

                    </div>
                </div>
                <!-- End Faq Column-->
            </div>
        </div>
    </section>
    <!-- /Faq Section -->

</div>
