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
                                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                            Iusto, id illo atque voluptate</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10 mx-auto">
                                                        <div class="accordion" id="accordionRental">
                                                            <div class="accordion-item mb-3">
                                                                <h5 class="accordion-header" id="headingOne">
                                                                    <button
                                                                        class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne">
                                                                        1. Departemen Teknik Sipil
                                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseOne"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-bs-parent="#accordionRental" style="">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Lorem, ipsum dolor sit amet consectetur
                                                                        adipisicing elit. Consectetur consequatur nobis
                                                                        minus tempora nulla, non tempore voluptate
                                                                        omnis, maiores id, ab modi harum officia ut
                                                                        praesentium numquam delectus ullam commodi!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item mb-3">
                                                                <h5 class="accordion-header" id="headingTwo">
                                                                    <button
                                                                        class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseTwo"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseTwo">
                                                                        2. Departemen Teknik Elektro
                                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseTwo"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-bs-parent="#accordionRental" style="">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Lorem, ipsum dolor sit amet consectetur
                                                                        adipisicing elit. Quia facere unde repudiandae
                                                                        nulla deserunt maiores, quas illum, cumque
                                                                        explicabo illo architecto hic, ipsa porro
                                                                        excepturi non harum perferendis blanditiis ab!
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item mb-3">
                                                                <h5 class="accordion-header" id="headingThree">
                                                                    <button
                                                                        class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        3. Departemen Teknik Informatika
                                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit. Quas, vero tenetur!
                                                                        Reprehenderit, iure in veritatis corporis ullam
                                                                        fugiat, amet laudantium ipsum quisquam est
                                                                        voluptatibus? Sint error eius eligendi voluptas
                                                                        quas?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item mb-3">
                                                                <h5 class="accordion-header" id="headingThree">
                                                                    <button
                                                                        class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        4. Departemen Teknik Pertambangan
                                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit. Quas, vero tenetur!
                                                                        Reprehenderit, iure in veritatis corporis ullam
                                                                        fugiat, amet laudantium ipsum quisquam est
                                                                        voluptatibus? Sint error eius eligendi voluptas
                                                                        quas?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item mb-3">
                                                                <h5 class="accordion-header" id="headingThree">
                                                                    <button
                                                                        class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        5. Departemen Teknik Industri
                                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit. Quas, vero tenetur!
                                                                        Reprehenderit, iure in veritatis corporis ullam
                                                                        fugiat, amet laudantium ipsum quisquam est
                                                                        voluptatibus? Sint error eius eligendi voluptas
                                                                        quas?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item mb-3">
                                                                <h5 class="accordion-header" id="headingThree">
                                                                    <button
                                                                        class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        6. Departemen Teknik Mesin
                                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit. Quas, vero tenetur!
                                                                        Reprehenderit, iure in veritatis corporis ullam
                                                                        fugiat, amet laudantium ipsum quisquam est
                                                                        voluptatibus? Sint error eius eligendi voluptas
                                                                        quas?
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item mb-3">
                                                                <h5 class="accordion-header" id="headingThree">
                                                                    <button
                                                                        class="accordion-button border-bottom font-weight-bold text-start collapsed"
                                                                        type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#collapseThree"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseThree">
                                                                        7. Departemen Teknik Arsitek
                                                                        <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                        <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0"
                                                                            aria-hidden="true"></i>
                                                                    </button>
                                                                </h5>
                                                                <div id="collapseThree"
                                                                    class="accordion-collapse collapse"
                                                                    aria-labelledby="headingThree"
                                                                    data-bs-parent="#accordionRental">
                                                                    <div class="accordion-body text-sm opacity-8">
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing elit. Quas, vero tenetur!
                                                                        Reprehenderit, iure in veritatis corporis ullam
                                                                        fugiat, amet laudantium ipsum quisquam est
                                                                        voluptatibus? Sint error eius eligendi voluptas
                                                                        quas?
                                                                    </div>
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
                </div>
            </div>
        </section>

    </div>
</section>

@include('blog.partials.footer')
@endsection