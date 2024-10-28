@extends('layouts.main')

@section('content')
<div class="container mb-5 ">
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </div>
    <div class="container rounded" data-aos="fade-up" data-aos-delay="100" style="padding:30px; margin:10px; box-shadow: 10px 10px 30px 10px rgba(0, 0, 0, 0.111);">
        <div class="row gy-4 mb-2">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Location</h3>
                            <p>{{ $profile->address }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>{{ $profile->number }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>{{ $profile->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{ route('contact') }}" method="post" class=" mb-4" data-aos="fade-up"
                    data-aos-delay="200">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required />
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required />
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required />
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>


                    </div>
                        <button type="submit" class="mt-5 btn btn-primary" width="100%">Send Message</button>

                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
