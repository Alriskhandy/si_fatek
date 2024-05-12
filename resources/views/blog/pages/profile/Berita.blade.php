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
                        @include('blog.components.breadcrumbs')

                        {{-- Hero Panel-3 beria terbaru --}}
                        <section>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($panels as $index => $p)
                                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                        <div class="page-header min-vh-75 border-radius-lg"
                                            style="background-image: url('{{ asset('storage/'.$p->image_path) }}');">
                                            <span class="mask bg-gradient-dark"></span>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 mx-8">
                                                        <h1 class="text-white fadeIn2 fadeInBottom">{{ $p->title }}</h1>
                                                        <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">{{
                                                            $p->excerpt }}</p>
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
                                    @endforeach
                                </div>
                                {{-- Carousel Button --}}
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        </section>

                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    {{-- List Berita-10 berita terbaru --}}
                                    <section class="py-5">
                                        {{-- Card Berita --}}
                                        @foreach ($berita as $b)
                                        <div class="card card-plain card-blog mt-3 mx-auto">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="card-image position-relative border-radius-lg">
                                                        <div class="blur-shadow-image">
                                                            <img class="img border-radius-lg img-fluid col-lg-12 col-md-10"
                                                                src="{{ asset('Storage/'.$b->image_path) }}"
                                                                alt="architecture" loading="lazy">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                                                    <h4>
                                                        <a href="/judul-berita" class="text-dark">{{ $b->title }}</a>
                                                    </h4>
                                                    <p class="text-justify">{{ $b->excerpt }}<a href="/judul-berita" class="text-info"> Read
                                                            More
                                                        </a>
                                                    </p>
                                                    <div class="author">
                                                        <p class="mb-0 text-body">{{ $b->created_at->format('d M Y') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="mt-5">
                                            {{ $berita->links('pagination::bootstrap-4') }}
                                        </div>
                                    </section>
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