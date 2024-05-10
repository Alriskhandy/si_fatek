@extends('blog.layouts.main')
@include('blog.partials.navbar')

@section('body')
<!-- ======= Blog Section ======= -->

<section id="blog" class="blog">
    <div class="container-fluid" data-aos="fade-left">

        <section class="py-7 position-relative">
            <div class="row">

                <div class="col-lg-12">
                    <div class="container">
                        <div class="section-title section-title__noBottom section-title__smallFont">
                            <h2 class="text-info">Sambutan Dekan _____</h2>
                        </div>

                        @include('blog/components/breadcrumbs')
                        <div class="row">
                            <div class="col-lg-6 justify-content-center d-flex flex-column">
                                <div class="card col-lg-9 col-md-8">
                                    <div class="d-block blur-shadow-image ">
                                        <img src="{{ asset('assets/blog/img/team-4.jpg') }}"
                                            alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg "
                                            loading="lazy">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
                                <h1 class="card-title ">
                                    <a href="#" class="text-dark">Jhon Smith ST, M.Kom</a>
                                </h1>
                                <h5 class="category text-warning ">Dekan Fakultas Teknik Unuversitas Khairun</h5>
                                <p class="card-description">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium atque fugit
                                    deserunt consequuntur dignissimos debitis? Deserunt incidunt debitis dolor
                                    voluptatibus, nesciunt culpa? Magnam, aliquid eligendi sequi nobis maiores quasi
                                    delectus!
                                </p>
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