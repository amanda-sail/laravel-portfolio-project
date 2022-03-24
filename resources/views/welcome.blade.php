@extends('layouts.layout')


@section('content')

    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    @include('partials.header')

    <!-- ======= Hero Section ======= -->
    @include('partials.hero')


    <!-- Start #main -->
    <main id="main">

        <!-- ======= About Section ======= -->
        @include('partials.about')

        <!-- ======= Facts Section ======= -->
        @include('partials.facts')

        <!-- ======= Skills Section ======= -->
        @include('partials.skills')

        <!-- ======= Resume Section ======= -->
        @include('partials.resume')

        <!-- ======= Portfolio Section ======= -->
        @include('partials.portfolio')

        <!-- ======= Services Section ======= -->
        @include('partials.services')

        <!-- ======= Testimonials Section ======= -->
        @include('partials.testimonials')

        <!-- ======= Contact Section ======= -->
        @include('partials.contact')

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    @include('partials.footer')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection