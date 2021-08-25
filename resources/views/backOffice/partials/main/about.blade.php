<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>{{ $statics->about_titre }}</h2>

            <p>{{ $statics->about_text }}</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('img/profile-img.jpg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $statics->about_sousTitre }}</h3>

                <p class="font-italic">{{ $statics->about_sousText }}
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_birthday }}</strong>
                                {{ $abouts->birthday }}
                            </li>

                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_website }}</strong>
                                {{ $abouts->website }}
                            </li>

                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_phone }}</strong>
                                {{ $abouts->phone }}
                            </li>

                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_city }}</strong>
                                {{ $abouts->city }}
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul>
                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_age }}</strong>
                                {{ $abouts->age }}
                            </li>

                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_degree }}</strong>
                                {{ $abouts->degree }}
                            </li>

                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_email }}</strong>
                                {{ $abouts->email }}
                            </li>

                            <li>
                                <i class="icofont-rounded-right"></i> <strong>{{ $abouts->p_freelance }}</strong>
                                {{ $abouts->freelance }}
                            </li>

                        </ul>
                    </div>
                </div>

                <p>{{ $statics->about_endText }}</p>
            </div>
        </div>
    </div>
</section><!-- End About Section -->
