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
                                    <li class="breadcrumb-item">Akademik</li>
                                    <li class="breadcrumb-item"><a href="/departemen">Departemen</a></li>
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
                                                <h3 class="text-white mb-0">Departemen</h3>
                                            </div>
                                        </div>
                                        <section class="py-lg-5">
                                            <div class="container">
                                                <div class="row my-5">
                                                    <div class="col-md-8 mx-auto text-center">
                                                        <h2 class="text-info">Departemen di Fakultas Teknik Universitas
                                                            Khairun</h2>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 mx-auto">
                                                        @if($data->body != null)
                                                        <p>{!! $data->body !!}</p>
                                                        @else
                                                        <div class="text dark mt-6">
                                                            <h2>Not Found!</h2>
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
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