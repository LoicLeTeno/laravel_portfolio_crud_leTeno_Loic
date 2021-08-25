@extends('backOffice.layouts.index')

@section('back-content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">

        <div class="hero-container" data-aos="fade-in">
            <h1>{{ $statics->user_titre }}</h1>
            <p>{{ $statics->user_p }} <span class="typed"
                    data-typed-items="{{ $statics->user_desp_1 }}, {{ $statics->user_desp_2 }}, {{ $statics->user_desp_3 }}, {{ $statics->user_desp_4 }}"></span>
            </p>
        </div>

    </section><!-- End Hero -->

    <main id="main">
        @include('backOffice.partials.main.about')

        @include('backOffice.partials.main.facts')

        @include('backOffice.partials.main.skills')

        @include('backOffice.partials.main.portfolio')

        @include('backOffice.partials.main.service')

        @include('backOffice.partials.main.contact')
    </main>
@endsection
