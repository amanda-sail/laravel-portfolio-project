<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{ asset($header->profile_pic) }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light">
                <a href="{{ $header->link_to }}">{{ $header->name }}</a>
            </h1>
            <div class="social-links mt-3 text-center">
                @foreach ($social_media as $social_media_link)
                    <a href="{{ $social_media_link->media_link }}" class="{{ $social_media_link->media_class }}">
                        <i class="{{ $social_media_link->media_icon }}"></i>
                    </a>                    
                @endforeach
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