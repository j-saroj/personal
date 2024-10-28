@props(['ourvalues'])
<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->


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

        <!-- Values Section -->
        <section id="values" class="values section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Values</h2>
                <p>What we value most<br /></p>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row gy-4">
                    @foreach ($ourvalues as $ourvalue)
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="{{ asset('storage/'.$ourvalue->image) }}" class="img-fluid" alt="" />
                                <h3>{{ $ourvalue->title }}</h3>
                                <p>
                                    {{ $ourvalue->description }}
                                </p>
                            </div>
                        </div>
                        <!-- End Card Item -->
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /Values Section -->
</div>
