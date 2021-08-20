@extends('layouts.index')

@section('content')
    @foreach ($statics as $static)
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center align-items-center">

            <div class="hero-container" data-aos="fade-in">
                <h1>{{ $static->user_titre }}</h1>
                <p>{{ $static->user_p }} <span class="typed"
                        data-typed-items="{{ $static->user_desp_1 }}, {{ $static->user_desp_2 }}, {{ $static->user_desp_3 }}, {{ $static->user_desp_4 }}"></span>
                </p>
            </div>

        </section><!-- End Hero -->

        <main id="main">
            @include('partials.main.about')

            @include('partials.main.facts')

            @include('partials.main.skills')

            @include('partials.main.portfolio')

            @include('partials.main.service')

            @include('partials.main.contact')
        </main>
    @endforeach
@endsection
