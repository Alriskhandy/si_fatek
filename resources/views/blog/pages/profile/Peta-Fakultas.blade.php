@extends('blog.layouts.main')
@include('blog.partials.navbar')

@section('body')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container-fluid" data-aos="fade-up">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7">
            <div class="container">
                <div class="row align-items-center">
                    <div class="section-title section-title__noBottom section-title__smallFont">
                        <h3>Peta Fakultas</h3>
                    </div>

                    @include('blog/components/breadcrumbs')
                    <div class="row mt-4">
                        <div class="col-md-6 m-auto">
                            <h4>Be the first to see the news</h4>
                            <p class="mb-4">
                                Your company may not be in the software business,
                                but eventually, a software company will be in your business.
                            </p>
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group input-group-outline">
                                        <label class="form-label">Email Here...</label>
                                        <input type="text" class="form-control mb-sm-0">
                                    </div>
                                </div>
                                <div class="col-4 ps-0">
                                    <button type="button"
                                        class="btn bg-gradient-info mb-0 h-100 position-relative z-index-2">Subscribe</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ms-auto">
                            <div class="position-relative">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d249.34155707237247!2d127.33567398088091!3d0.7626090651004984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x329cb4f414536a7d%3A0x745adef3b1852725!2sFakultas%20Teknik%20Universitas%20Khairun!5e0!3m2!1sid!2sid!4v1714623981535!5m2!1sid!2sid"
                                    width="400" height="350" style="border-radius:3%;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->
    </div>
</section>

@include('blog.partials.footer')
@endsection