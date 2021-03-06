        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>{{ $statics->portfolio_titre }}</h2>
                    <p>{{ $statics->portfolio_text }}</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">{{ $statics->filter_all }}</li>
                            <li data-filter=".{{ $statics->filter_1 }}">{{ $statics->filter_1_nom }}</li>
                            <li data-filter=".{{ $statics->filter_2 }}">{{ $statics->filter_2_nom }}</li>
                            <li data-filter=".{{ $statics->filter_3 }}">{{ $statics->filter_3_nom }}</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                    @foreach ($portfolios as $portfolio)
                        <div class="col-lg-4 col-md-6 portfolio-item {{ $portfolio->filter }}">
                            <div class="portfolio-wrap">
                                <img src="{{ asset($portfolio->image) }}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{ asset($portfolio->image) }}" data-gall="portfolioGallery"
                                        class="venobox" title="{{ $portfolio->title }}"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="{{ route('details') }}" title="More Details"><i
                                            class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Portfolio Section -->
