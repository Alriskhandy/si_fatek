@extends('blog.layouts.main')
@include('blog.partials.navbar')

@include('blog.partials.hero')

@section('body')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <!-- Kolom Blog -->
      <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
        <!-- Section with four info areas left & one card right with image and waves -->
        <section class="py-7">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="row justify-content-start">
                  <div class="col-md-6">
                    <div class="info">
                      <i class="material-icons text-3xl text-gradient text-info mb-3">public</i>
                      <h5>Fully integrated</h5>
                      <p>We get insulted by others, lose trust for those We get back freezes</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info">
                      <i class="material-icons text-3xl text-gradient text-info mb-3">payments</i>
                      <h5>Payments functionality</h5>
                      <p>We get insulted by others, lose trust for those We get back freezes</p>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-start mt-4">
                  <div class="col-md-6">
                    <div class="info">
                      <i class="material-icons text-3xl text-gradient text-info mb-3">apps</i>
                      <h5>Prebuilt components</h5>
                      <p>We get insulted by others, lose trust for those We get back freezes</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="info">
                      <i class="material-icons text-3xl text-gradient text-info mb-3">3p</i>
                      <h5>Improved platform</h5>
                      <p>We get insulted by others, lose trust for those We get back freezes</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 ms-auto mt-lg-0 mt-4">
                <div class="card">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <a class="d-block blur-shadow-image">
                      <img
                        src="https://images.unsplash.com/photo-1544717302-de2939b7ef71?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80"
                        alt="img-colored-shadow" class="img-fluid border-radius">
                    </a>
                  </div>
                  <div class="card-body text-center">
                    <h5 class="font-weight-normal">
                      <a href="javascript:;">Get insights on Search</a>
                    </h5>
                    <p class="mb-0">
                      Website visitors today demand a frictionless user expericence — especially when using search.
                      Because of the hight standards.
                    </p>
                    <button type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Find out more</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- END Section with four info areas left & one card right with image and waves -->
        <!-- -------- START Features w/ pattern background & stats & rocket -------- -->
        <section class="pb-5 position-relative bg-gradient-dark mx-n3">
          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <h3 class="mb-5 mt-5 text-white">Check my latest blogposts</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6">
                <div class="card card-plain">
                  <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                      <img src="{{ asset('assets/blog/img/examples/testimonial-6-2.jpg') }}" alt="img-blur-shadow"
                        class="img-fluid shadow border-radius" loading="lazy">
                    </a>
                  </div>
                  <div class="card-body px-0">
                    <h5>
                      <a href="javascript:;" class="text-light font-weight-bold">Rover raised $65 million</a>
                    </h5>
                    <p>
                      Finding temporary housing for your dog should be as easy as
                      renting an Airbnb. That’s the idea behind Rover ...
                    </p>
                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-plain">
                  <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                      <img src="{{ asset('assets/blog/img/examples/testimonial-6-3.jpg') }}" alt="img-blur-shadow"
                        class="img-fluid shadow border-radius" loading="lazy">
                    </a>
                  </div>
                  <div class="card-body px-0">
                    <h5>
                      <a href="javascript:;" class="text-light font-weight-bold">MateLabs machine learning</a>
                    </h5>
                    <p>
                      If you’ve ever wanted to train a machine learning model
                      and integrate it with IFTTT, you now can with ...
                    </p>
                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-plain">
                  <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                      <img src="{{ asset('assets/blog/img/examples/blog-9-4.jpg') }}" alt="img-blur-shadow"
                        class="img-fluid shadow border-radius" loading="lazy">
                    </a>
                  </div>
                  <div class="card-body px-0">
                    <h5>
                      <a href="javascript:;" class="text-light font-weight-bold">MateLabs machine learning</a>
                    </h5>
                    <p>
                      If you’ve ever wanted to train a machine learning model
                      and integrate it with IFTTT, you now can with ...
                    </p>
                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                <div class="card card-plain">
                  <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                      <img src="{{ asset('assets/blog/img/examples/blog2.jpg') }}" alt="img-blur-shadow"
                        class="img-fluid shadow border-radius" loading="lazy">
                    </a>
                  </div>
                  <div class="card-body px-0">
                    <h5>
                      <a href="javascript:;" class="text-light font-weight-bold">MateLabs machine learning</a>
                    </h5>
                    <p>
                      If you’ve ever wanted to train a machine learning model
                      and integrate it with IFTTT, you now can with ...
                    </p>
                    <a href="javascript:;" class="text-info text-sm icon-move-right">Read More
                      <i class="fas fa-arrow-right text-xs ms-1"></i>
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- -------- END Features w/ pattern background & stats & rocket -------- -->
        <section class="pt-4 pb-6" id="count-stats">
          <div class="container">
            <div class="row justify-content-center text-center mt-7">
              <div class="col-md-3">
                <h1 class="text-gradient text-info" id="state1" countTo="5234">0</h1>
                <h5>Projects</h5>
                <p>Of “high-performing” level are led by a certified project manager</p>
              </div>
              <div class="col-md-3">
                <h1 class="text-gradient text-info"><span id="state2" countTo="3400">0</span>+</h1>
                <h5>Hours</h5>
                <p>That meets quality standards required by our users</p>
              </div>
              <div class="col-md-3">
                <h1 class="text-gradient text-info"><span id="state3" countTo="24">0</span>/7</h1>
                <h5>Support</h5>
                <p>Actively engage team members that finishes on time</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
</section>

@include('blog.partials.footer')
@endsection