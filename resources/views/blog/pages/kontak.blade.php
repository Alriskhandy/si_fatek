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

                        <section>
                            <div class="page-header min-vh-100">
                                <div class="container">
                                    <div class="row">
                                        <div
                                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                                            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center"
                                                style="background-image: url('{{ asset('/assets/blog/img/illustrations/illustration-signin.jpg') }}'); background-size: cover;"
                                                loading="lazy" data-aos="fade-right" data-aos-duration="1000"></div>
                                        </div>
                                        <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5"
                                            data-aos="fade-left" data-aos-duration="1000">
                                            <div
                                                class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                                                <div
                                                    class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                                    <div
                                                        class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                                                        <h3 class="text-white text-primary mb-0">Kontak Kami</h3>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="pb-3">
                                                        For further questions, including partnership opportunities,
                                                        please email
                                                        fatekunkhair@gmail.com
                                                        or contact using our contact form.
                                                    </p>
                                                    <form id="contact-form" method="post" autocomplete="off">
                                                        <div class="card-body p-0 my-3">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label>Full Name</label>
                                                                        <input type="email" class="form-control"
                                                                            placeholder="Full Name">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 ps-md-2">
                                                                    <div class="input-group input-group-static mb-4">
                                                                        <label>Email</label>
                                                                        <input type="email" class="form-control"
                                                                            placeholder="fatekunkhair@gmail.com">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group mb-0 mt-md-0 mt-4">
                                                                <div class="input-group input-group-static mb-4">
                                                                    <label>How can we help you?</label>
                                                                    <textarea name="message" class="form-control"
                                                                        id="message" rows="6"
                                                                        placeholder="Describe your problem in at least 250 characters"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 text-center">
                                                                    <button type="submit"
                                                                        class="btn bg-gradient-primary mt-3 mb-0">Send
                                                                        Message</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
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