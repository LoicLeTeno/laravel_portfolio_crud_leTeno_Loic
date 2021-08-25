<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="{{ asset('img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="/">{{ $upDowns->user }}</a></h1>

            <div class="social-links mt-3 text-center">
                <a href="{{ $upDowns->lien_twitter }}" class="twitter"><i
                        class="{{ $upDowns->icon_twitter }}"></i></a>
                <a href="{{ $upDowns->lien_facebook }}" class="facebook"><i
                        class="{{ $upDowns->icon_facebook }}"></i></a>
                <a href="{{ $upDowns->lien_instagram }}" class="instagram"><i
                        class="{{ $upDowns->icon_instagram }}"></i></a>
                <a href="{{ $upDowns->lien_skype }}" class="google-plus"><i
                        class="{{ $upDowns->icon_skype }}"></i></a>
                <a href="{{ $upDowns->lien_linkedin }}" class="linkedin"><i
                        class="{{ $upDowns->icon_linkedin }}"></i></a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active">
                    <a href="/"><i class="{{ $upDowns->icon_home }}"></i>
                        <span>{{ $upDowns->p_home }}</span></a>
                </li>

                <li>
                    <a href="#about"><i class="{{ $upDowns->icon_about }}"></i>
                        <span>{{ $upDowns->p_about }}</span></a>
                </li>

                <li>
                    <a href="#portfolio"><i class="{{ $upDowns->icon_portfolio }}"></i>
                        {{ $upDowns->p_portfolio }}</a>
                </li>

                <li>
                    <a href="#services"><i class="{{ $upDowns->icon_services }}"></i>
                        {{ $upDowns->p_services }}</a>
                </li>

                <li>
                    <a href="#contact"><i class="{{ $upDowns->icon_contact }}"></i>
                        {{ $upDowns->p_contact }}</a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
</header><!-- End Header -->
