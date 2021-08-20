@extends('layouts.index')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Alex Smith</h1>
            <p>I'm <span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
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
@endsection
