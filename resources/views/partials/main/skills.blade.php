<!-- ======= Skills Section ======= -->
<section id="skills" class="skills section-bg">
    <div class="container">
        <div class="section-title">
            <h2>{{ $statics->skills_titre }}</h2>

            <p>{{ $statics->skills_text }}</p>
        </div>

        <div class="row skills-content">
            <div class="col-lg-6" data-aos="fade-up">
                @foreach ($skills as $skill)
                    @if ($loop->odd)
                        @if ($loop->index > -1)
                            <div class="progress">
                                <span class="skill">{{ $skill->skill }} <i
                                        class="val">{{ $skill->value }}%</i></span>

                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->value }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                @foreach ($skills as $skill)
                    @if ($loop->even)
                        @if ($loop->index > 0)
                            <div class="progress">
                                <span class="skill">{{ $skill->skill }} <i
                                        class="val">{{ $skill->value }}%</i></span>

                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->value }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</section><!-- End Skills Section -->
