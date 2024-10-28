
<script>
    document.querySelectorAll('.navbarlink').forEach(link => {

        if (link.href === window.location.href) {
            link.classList.add('active');
        }
    });
</script>

<style>
    .active {
        font-weight: bold;
        color: red; /* Customize active link style */
    }
</style>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('/build/assets/img/logo.png') }}" alt="" />
                <h1 class="sitename">SAROJ</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li>
                        <a href="{{ route('home') }}" >Home<br /></a>
                    </li>
                    {{-- <li><a href="#about">About</a></li> --}}
                    <li><a class="navbarlink" href="{{ route('services') }}">Services</a></li>
                    <li><a class="navbarlink" href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li><a class="navbarlink" href="{{ route('teams') }}">Team</a></li>
                    <li><a class="navbarlink" href="{{ route('blogs') }}">Blog</a></li>

                    <li class="dropdown">
                        <a href="#"><span>Discover</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li>
                                <a href="#">FAQs</a>
                                <a href="{{ route('testimonial') }}">reviews</a>
                                <a href="{{ route('contact') }}">Get In Touch</a>
                            </li>

                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted flex-md-shrink-0" href="{{ route('contact') }}">Get Started</a>
        </div>
    </header>
