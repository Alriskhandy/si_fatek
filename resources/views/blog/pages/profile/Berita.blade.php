@extends('blog.layouts.main')
@include('blog.partials.navbar')

@section('body')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container-fluid" data-aos="fade-up">

        <section class="section-page sc-about--menu my-7">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title section-title__noBottom section-title__smallFont">
                            <h2 class="text-info">Berita _____</h2>
                        </div>
                        @include('blog.components.breadcrumbs')

                        <section>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active carousel-item-start ">
                                        <div class="page-header min-vh-75 border-radius-lg"
                                            style="background-image: url('{{ asset('assets/blog/img/bg2.jpg') }}');"
                                            loading="lazy">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 mx-8">
                                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Pricing Plans
                                                        </h4>
                                                        <h1 class="text-white fadeIn2 fadeInBottom">Work with the
                                                            rockets
                                                        </h1>
                                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Wealth
                                                            creation is an
                                                            evolutionarily recent positive-sum game. Status is an old
                                                            zero-sum game. Those attacking
                                                            wealth creation are often just seeking status.</p>
                                                        <a href="/judul-berita" class="text-light icon-move-right">
                                                            Read More
                                                            <i class="fas fa-arrow-right text-sm ms-1"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item carousel-item-next carousel-item-start">
                                        <div class="page-header min-vh-75"
                                            style="background-image: url('{{ asset('assets/blog/img/bg10.jpg') }}');"
                                            loading="lazy">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 mx-8">
                                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Our Team</h4>
                                                        <h1 class="text-white fadeIn2 fadeInBottom">Work with the best
                                                        </h1>
                                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Free
                                                            people make free choices.
                                                            Free choices mean you get unequal outcomes. You can have
                                                            freedom, or you can have equal
                                                            outcomes. You can’t have both.</p>
                                                        <a href="/judul-berita" class="text-light icon-move-right">
                                                            Read More
                                                            <i class="fas fa-arrow-right text-sm ms-1"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="page-header min-vh-75"
                                            style="background-image: url('{{ asset('assets/blog/img/bg3.jpg') }}');"
                                            loading="lazy">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 mx-8">
                                                        <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Office Places
                                                        </h4>
                                                        <h1 class="text-white fadeIn2 fadeInBottom">Work from home</h1>
                                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">You’re
                                                            spending time to save money
                                                            when you should be spending money to save time.</p>
                                                        <a href="/judul-berita" class="text-light icon-move-right">
                                                            Read More
                                                            <i class="fas fa-arrow-right text-sm ms-1"
                                                                aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-vh-75 position-absolute w-100 top-0">
                                    <a class="carousel-control-prev ms-0 ms-md-n5 mt-12 mb-n7 mt-md-0 mb-md-0"
                                        href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon position-absolute bottom-50"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next ms-0 ms-md-n5 mt-12 mb-n7 mt-md-0 mb-md-0"
                                        href="#carouselExampleControls" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon position-absolute bottom-50"
                                            aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </section>

                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">

                                    <section class="py-5">
                                        <div class="card card-plain card-blog mt-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card-image position-relative border-radius-lg">
                                                        <div class="blur-shadow-image">
                                                            <img class="img border-radius-lg col-lg-12 col-md-10"
                                                                src="{{ asset('assets/blog/img/bg9.jpg') }}"
                                                                alt="architecture" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                                                    <h4>
                                                        <a href="/judul-berita" class="text-dark">Rover raised to $65
                                                            million</a>
                                                    </h4>
                                                    <p>
                                                        Finding temporary housing for your dog should be as easy as
                                                        renting an Airbnb. That’s
                                                        the idea behind Rover, which raised $65 million to expand its
                                                        pet sitting <a href="/judul-berita" class="text-info"> Read More
                                                        </a>
                                                    </p>
                                                    <div class="author">
                                                        <p class="mb-0 text-body">Mar 08, 2020</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-plain card-blog mt-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card-image position-relative border-radius-lg">
                                                        <div class="blur-shadow-image">
                                                            <img class="img border-radius-lg col-lg-12 col-md-10"
                                                                src="{{ asset('assets/blog/img/bg9.jpg') }}"
                                                                alt="architecture" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                                                    <h4>
                                                        <a href="/judul-berita" class="text-dark">Rover raised to $65
                                                            million</a>
                                                    </h4>
                                                    <p>
                                                        Finding temporary housing for your dog should be as easy as
                                                        renting an Airbnb. That’s
                                                        the idea behind Rover, which raised $65 million to expand its
                                                        pet sitting <a href="/judul-berita" class="text-info"> Read More
                                                        </a>
                                                    </p>
                                                    <div class="author">
                                                        <p class="mb-0 text-body">Mar 08, 2020</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-plain card-blog mt-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card-image position-relative border-radius-lg">
                                                        <div class="blur-shadow-image">
                                                            <img class="img border-radius-lg col-lg-12 col-md-10"
                                                                src="{{ asset('assets/blog/img/bg9.jpg') }}"
                                                                alt="architecture" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                                                    <h4>
                                                        <a href="/judul-berita" class="text-dark">Rover raised to $65
                                                            million</a>
                                                    </h4>
                                                    <p>
                                                        Finding temporary housing for your dog should be as easy as
                                                        renting an Airbnb. That’s
                                                        the idea behind Rover, which raised $65 million to expand its
                                                        pet sitting <a href="/judul-berita" class="text-info"> Read More
                                                        </a>
                                                    </p>
                                                    <div class="author">
                                                        <p class="mb-0 text-body">Mar 08, 2020</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card card-plain card-blog mt-5">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card-image position-relative border-radius-lg">
                                                        <div class="blur-shadow-image">
                                                            <img class="img border-radius-lg col-lg-12 col-md-10"
                                                                src="{{ asset('assets/blog/img/bg9.jpg') }}"
                                                                alt="architecture" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                                                    <h4>
                                                        <a href="#" class="text-dark">Rover raised to $65
                                                            million</a>
                                                    </h4>
                                                    <p>
                                                        Finding temporary housing for your dog should be as easy as
                                                        renting an Airbnb. That’s
                                                        the idea behind Rover, which raised $65 million to expand its
                                                        pet sitting <a href="#" class="text-info"> Read More </a>
                                                    </p>
                                                    <div class="author">
                                                        <p class="mb-0 text-body">Mar 08, 2020</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-lg-4 ml-auto">
                                    <div class="pt-1 pb-5 position-sticky top-1 mt-lg-4">
                                        <h4 class="mt-6">Kategori</h4>
                                        <a href="javascript::">
                                            <div class="card justify-content-center mb-3">
                                                <div class="card-body p-3">
                                                    <h6 class="mb-0">Top 50 Tips for Creative Tim</h6>
                                                    <p class="mb-0 text-body">Mar 08, 2020</p>
                                                </div>
                                                <div class="position-absolute end-0 me-3 ">
                                                    <i class="fas fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript::">
                                            <div class="card justify-content-center mb-3">
                                                <div class="card-body p-3">
                                                    <h6 class="mb-0">Best ways to avoid the Burnout</h6>
                                                    <p class="mb-0 text-body">Aug 11, 2020</p>
                                                </div>
                                                <div class="position-absolute end-0 me-3 ">
                                                    <i class="fas fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript::">
                                            <div class="card justify-content-center mb-3">
                                                <div class="card-body p-3">
                                                    <h6 class="mb-0">Fascinating tactics to help your Business</h6>
                                                    <p class="mb-0 text-body">Jan 07, 2021</p>
                                                </div>
                                                <div class="position-absolute end-0 me-3 ">
                                                    <i class="fas fa-angle-right" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>

@include('blog.partials.footer')
@endsection