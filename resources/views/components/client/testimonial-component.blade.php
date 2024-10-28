<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

    <style>
        .testimonials .testimonial-item {
            background-color: var(--surface-color);
            box-shadow: 0px 0 20px rgba(0, 0, 0, 0.1);
            box-sizing: content-box;
            padding: 30px;
            margin: 40px 30px;
            min-height: 320px;
            height: 300px;
            width: 300px;
            display: flex;
            flex-direction: column;
            text-align: center;
            transition: 0.3s;
        }

        .testimonials .testimonial-item .stars {
            margin-bottom: 15px;
        }

        .testimonials .testimonial-item .stars i {
            color: #ffc107;
            margin: 0 1px;
        }

        .testimonials .testimonial-item .testimonial-img {
            width: 90px;
            border-radius: 50%;
            border: 4px solid var(--background-color);
            margin: 0 auto;
        }

        .testimonials .testimonial-item h3 {
            font-size: 18px;
            font-weight: bold;
            margin: 10px 0 5px 0;
        }

        .testimonials .testimonial-item h4 {
            font-size: 14px;
            color: color-mix(in srgb, var(--default-color), transparent 40%);
            margin: 0;
        }

        .testimonials .testimonial-item p {
            font-style: italic;
            margin: 0 auto 15px auto;
        }

        .testimonials .swiper-wrapper {
            height: auto;
        }

        .testimonials .swiper-pagination {
            margin-top: 20px;
            position: relative;
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet {
            width: 12px;
            height: 12px;
            background-color: color-mix(in srgb, var(--default-color), transparent 85%);
            opacity: 1;
        }

        .testimonials .swiper-pagination .swiper-pagination-bullet-active {
            background-color: var(--accent-color);
        }

        .testimonials .swiper-slide {
            opacity: 0.3;
        }

        @media (max-width: 1199px) {
            .testimonials .swiper-slide-active {
                opacity: 1;
            }

            .testimonials .swiper-pagination {
                margin-top: 0;
            }

            .testimonials .testimonial-item {
                margin: 40px 20px;
            }
        }

        @media (min-width: 1200px) {
            .testimonials .swiper-slide-next {
                opacity: 1;
                transform: scale(1.12);
            }
        }
    </style>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonials</h2>
            <p>What they are saying about us<br /></p>
        </div>
        <!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-container">
                <div class="swiper-wrapper">

                    @foreach($testimonials as $testimonial)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                {{$testimonial->content}}
                            </p>
                            <div class="profile mt-auto">
                                <img src="{{ asset('storage/'.$testimonial->image) }}"
                                    class="testimonial-img" alt="Saul Goodman" />
                                <h3>{{ $testimonial->name }}</h3>
                                <h4>{{ $testimonial->position }}</h4>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- End testimonial item -->


                </div>
                <div class="swiper-pagination"></div>

        </div>
    </section>
    <!-- /Testimonials Section -->
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper('.swiper-container', {
            loop: true,
            speed: 600,
            autoplay: {
                delay: 5000,
            },
            slidesPerView: 'auto',
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 1,
                },
            },
        });
    });
</script>
