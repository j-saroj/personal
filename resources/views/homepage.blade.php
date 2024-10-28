@extends('layouts.main')
@section('content')

    <body class="index-page">

        {{-- <x-demo/>
    <x-demo type='password' /> --}}
        <main class="main">
            <!-- Hero Section -->
            <section id="hero" class="hero section">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                            <h1 data-aos="fade-up">
                                Let me offer modern solutions for growing your business
                            </h1>
                            <p data-aos="fade-up" data-aos-delay="100">
                                I am a full stack developer with experience in web development, mobile app development, and content creation.
                            </p>
                            <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                                <a href="{{ route('contact') }}" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
                                <a href="https://www.youtube.com/@sarojjoshi6719" target="_blank"
                                    class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i
                                        class="bi bi-play-circle"></i><span>Watch Video</span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                            <img src="https://cdn.pixabay.com/photo/2023/10/10/19/27/anonymous-8307252_1280.png"
                                class="img-fluid animated" alt="homepage image" style="height:70%;" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Hero Section -->

            <!-- About Section -->
            <section id="about" class="about section">
                <div class="container" data-aos="fade-up">
                    <div class="row gx-0">
                        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="content">
                                <h3>Who We Are</h3>
                                <h2>

                                    {{ $about_us->title }}
                                </h2>
                                <p>
                                    {!! $about_us->description !!}
                                </p>
                                <div class="text-center text-lg-start">
                                    <a href="#"
                                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                        <span>Read More</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                            <img src="{{ asset('storage/' . $about_us->image) }}" class="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </section>
            <!-- /About Section -->

            <!-- /Values Section -->
            <x-client.our-values-component :ourvalues="$Ourvalues" />
            <x-client.stat-component />
            <x-client.features-component />
            <x-client.service-component :services="$services" />
            <x-client.team-component :teams="$teams" />
            <x-client.portfolio-component :products="$products" />
            <x-client.testimonial-component :testimonials="$testimonials" />
            <x-client.faq-component :faqs="$faqs" />


        </main>



        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    @endsection
