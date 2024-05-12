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
                        <div class="container py-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                                    <li class="breadcrumb-item">Profil</li>
                                    <li class="breadcrumb-item"><a href="/struktur-organisasi">Struktur Organisasi</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        <section class="pt-md-2 pb-md-5 pt-lg-5 mt-3 mt-md-4 mt-lg-0">
                            <div class="container">
                                <div class="col-12 mx-auto pb-5">
                                    <div class="card shadow-lg">
                                        <div
                                            class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                            <div class="bg-gradient-info shadow-dark border-radius-lg p-4">
                                                <h3 class="text-white mb-0">Struktur Organisasi</h3>
                                            </div>
                                        </div>
                                        <div class="card-body p-1 pt-0">
                                            @if($data->image_path != null)
                                            <div class="card-image position-relative text-center border-radius-lg my-5">
                                                <div class="blur-shadow-image">
                                                    <img class="img img-fluid border-radius-lg col-lg-10 col-md-11"
                                                        src="{{ asset('storage/'.$data->image_path) }}"
                                                        alt="architecture" loading="lazy">
                                                </div>
                                            </div>
                                            @else
                                            <div class="text dark mt-6">
                                                <h2>Not Found!</h2>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>

@include('blog.partials.footer')
@endsection