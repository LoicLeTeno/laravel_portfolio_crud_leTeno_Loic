        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>{{ $static->portfolio_titre }}</h2>
                    <p>{{ $static->portfolio_text }}</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">{{ $static->filter_all }}</li>
                            <li data-filter=".{{ $static->filter_1 }}">{{ $static->filter_1_nom }}</li>
                            <li data-filter=".{{ $static->filter_2 }}">{{ $static->filter_2_nom }}</li>
                            <li data-filter=".{{ $static->filter_3 }}">{{ $static->filter_3_nom }}</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-1.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="{{ route('details') }}" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-3.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-4.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-5.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-6.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-7.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-8.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="{{ asset('img/portfolio/portfolio-9.jpg') }}" data-gall="portfolioGallery"
                                    class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Section -->
