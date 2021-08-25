<!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
    <div class="container">
        <div class="section-title">
            <h2>{{ $statics->facts_titre }}</h2>

            <p>{{ $statics->facts_text }}</p>
        </div>

        <div class="row no-gutters">
            @foreach ($facts as $fact)
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box">
                        <i class="{{ $fact->icon }}"></i>
                        <span data-toggle="counter-up">{{ $fact->number }}</span>
                        <p><strong>{{ $fact->titre }}</strong> {{ $fact->desp_titre }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- End Facts Section -->
