<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>{{ $static->about_titre }}</h2>

            <p>{{ $static->about_text }}</p>
        </div>

        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
                <img src="{{ asset('img/profile-img.jpg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3>{{ $static->about_sousTitre }}</h3>

                <p class="font-italic">{{ $static->about_sousText }}
                </p>

                @foreach ($abouts as $about)
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_birthday }}</strong>
                                    {{ $about->birthday }}
                                </li>

                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_website }}</strong>
                                    {{ $about->website }}
                                </li>

                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_phone }}</strong>
                                    {{ $about->phone }}
                                </li>

                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_city }}</strong>
                                    {{ $about->city }}
                                </li>

                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_age }}</strong>
                                    {{ $about->age }}
                                </li>

                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_degree }}</strong>
                                    {{ $about->degree }}
                                </li>

                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_email }}</strong>
                                    {{ $about->email }}
                                </li>

                                <li>
                                    <i class="icofont-rounded-right"></i> <strong>{{ $about->p_freelance }}</strong>
                                    {{ $about->freelance }}
                                </li>
                            </ul>
                        </div>


                        
                    </div>
                @endforeach
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  

                <p>{{ $static->about_endText }}</p>
            </div>
        </div>
    </div>


</section><!-- End About Section -->
