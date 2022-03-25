<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset('img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light">
                <a href="index.html">Alex Smith</a>
            </h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <!-- .nav-menu -->
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                @foreach ($navbar as $nav_link)
                    <li>
                        <a href="{{ $nav_link->nav_to }}" class="nav-link scrollto active">
                            <i class="{{ $nav_link->nav_icon }}"></i>
                            <span>{{ $nav_link->nav_name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>   
        </nav>
    </div>
</header><!-- End Header -->
{{-- 
<li>
    <a href={{ $nav_link->nav_to }}"#hero" class="nav-link scrollto active">
        <i class="{{ $nav_link->nav_icon }}bx bx-home"></i>
        <span>Home{{ $nav_link->nav_name }}</span>
    </a>
</li>
<li>
    <a href="#about" class="nav-link scrollto">
        <i class="bx bx-user"></i>
        <span>About</span>
    </a>
</li>
<li>
    <a href="#skills" class="nav-link scrollto">
        <i class="bx bx-file-blank"></i>
        <span>Skills</span>
    </a>
</li>
<li>
    <a href="#portfolio" class="nav-link scrollto">
        <i class="bx bx-book-content"></i>
        <span>Portfolio</span>
    </a>
</li>
<li>
    <a href="#testimonials" class="nav-link scrollto">
        <i class="bx bx-server"></i>
        <span>Testimonials</span>
    </a>
</li>
<li>
    <a href="#contact" class="nav-link scrollto">
        <i class="bx bx-envelope"></i> 
        <span>Contact</span>
    </a>
</li> --}}