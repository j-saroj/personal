@props(['services'])
<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

    <!-- Services Section -->
    <section id="services" class="services section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Check Our Services<br /></p>
        </div>
        <!-- End Section Title -->
        @php
            $icon = [
                'bi bi-activity',
                'bi bi-broadcast',
                'bi bi-easel',
                'bi bi-bounding-box-circles',
                'bi bi-calendar-week',
                'bi bi-chat-square-text',
            ];
            $color = ['item-cyan', 'item-pink', 'item-orange', 'item-pink', 'item-green', 'item-purple'];
            $count = 0;
        @endphp
        <div class="container">
            <div class="row gy-4">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $count * 100 }}">
                        <div class="service-item {{ $color[$count] }} position-relative">
                            <i class="{{ $icon[$count] }} icon"></i>
                            <h3>{{ $service->title }}</h3>
                            <p>
                                {!! Str::limit($service->description, 80) !!}
                            </p>
                            <a href="{{ route('service.show', $service->id) }}" class="read-more stretched-link">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    @php
                        $count++;
                        if ($count == count($icon)) {
                            $count = 0;
                        }
                    @endphp
                @endforeach
                <!-- End Service Item -->

            </div>
        </div>
    </section>
    <!-- /Services Section -->
</div>
