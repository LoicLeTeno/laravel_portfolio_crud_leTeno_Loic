    <!-- ======= Header ======= -->
    <header id="header">
        @foreach ($upDowns as $upDown)
            <div class="d-flex flex-column">
                <div class="profile">
                    <img src="{{ asset('img/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
                    <h1 class="text-light"><a href="/">{{ $upDown->user }}</a></h1>

                    <div class="social-links mt-3 text-center">
                        <a href="{{ $upDown->lien_twitter }}" class="twitter"><i
                                class="{{ $upDown->icon_twitter }}"></i></a>
                        <a href="{{ $upDown->lien_facebook }}" class="facebook"><i
                                class="{{ $upDown->icon_facebook }}"></i></a>
                        <a href="{{ $upDown->lien_instagram }}" class="instagram"><i
                                class="{{ $upDown->icon_instagram }}"></i></a>
                        <a href="{{ $upDown->lien_skype }}" class="google-plus"><i
                                class="{{ $upDown->icon_skype }}"></i></a>
                        <a href="{{ $upDown->lien_linkedin }}" class="linkedin"><i
                                class="{{ $upDown->icon_linkedin }}"></i></a>
                    </div>
                </div>

                <nav class="nav-menu">
                    <ul>
                        <li class="active">
                            <a href="/"><i class="{{ $upDown->icon_home }}"></i>
                                <span>{{ $upDown->p_home }}</span></a>
                        </li>

                        <li>
                            <a href="#about"><i class="{{ $upDown->icon_about }}"></i>
                                <span>{{ $upDown->p_about }}</span></a>
                        </li>

                        <li>
                            <a href="#portfolio"><i class="{{ $upDown->icon_portfolio }}"></i>
                                {{ $upDown->p_portfolio }}</a>
                        </li>

                        <li>
                            <a href="#services"><i class="{{ $upDown->icon_services }}"></i>
                                {{ $upDown->p_services }}</a>
                        </li>

                        <li>
                            <a href="#contact"><i class="{{ $upDown->icon_contact }}"></i>
                                {{ $upDown->p_contact }}</a>
                        </li>
                    </ul>
                </nav><!-- .nav-menu -->

                <button type="button" class="mobile-nav-toggle d-xl-none"><i
                        class="icofont-navigation-menu"></i></button>
            </div>
        @endforeach
    </header><!-- End Header -->
