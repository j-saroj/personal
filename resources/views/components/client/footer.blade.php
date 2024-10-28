
<footer id="footer" class="footer">


            <div class="container footer-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="d-flex align-items-center">
                            <span class="sitename">SAROJ</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>{{ $profile->address }}</p>
                            <p class="mt-3">
                                <strong>Phone:</strong> <span>{{ $profile->number }}</span>
                            </p>
                            <p><strong>Email:</strong> <a href="mailto:joshisarjo431@gmail.com"><span style="font-size:14px">{{ $profile->email }}</span></a></p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i> <a href="{{ route('services') }}">Services</a>
                            </li>
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="{{ route('testimonial') }}">Reviews</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            @foreach($services as $service)
                            <li>
                                <i class="bi bi-chevron-right"></i>
                                <a href="{{ route('service.show',['id'=>$service->id]) }}">{{ $service->title }}</a>
                            </li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <h4>Follow Us</h4>
                        <p>
                            Cras fermentum odio eu feugiat lide par naso tierra videa magna
                            derita valies
                        </p>
                        <div class="social-links d-flex">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container copyright text-center mt-4">
                <p>
                    © <span>Copyright</span>
                    <strong class="px-1 sitename">SAROJ</strong>
                    <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="#">Saroj Joshi</a>
                </div>
            </div>
        </footer>
