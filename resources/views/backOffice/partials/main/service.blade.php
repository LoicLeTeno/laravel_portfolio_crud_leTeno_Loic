        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">
                <div class="section-title">
                    <h2>{{ $static->service_titre }}</h2>
                    <p>{{ $static->service_text }}</p>
                </div>

                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                            <div class="icon"><i class="{{ $service->icon }}"></i></div>
                            <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                            <p class="description">{{ $service->desp }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->
