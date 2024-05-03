@extends('blog.layouts.main')
@include('blog.partials.navbar')

@include('blog.partials.hero')

@section('body')
<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container-fluid" data-aos="fade-up">

    <div class="row">

      <section class="py-6 position-relative mt-5">
        <div class="col-lg-6">
          <h2 class="mb-7 px-5 text-info">Pendidikan _________</h2>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class=" bg-gradient-dark">
              <div class="row py-5">
                <div class="col-xl-4 col-md-6 px-5 position-relative">
                  <img class="img max-width-300 w-100 position-relative z-index-2 mt-n7"
                    src="{{ asset('assets/blog/img/bg10.jpg') }}" loading="lazy" alt="card image">
                </div>
                <div class="col-xl-7 col-md-5 z-index-2 position-relative px-md-3 px-5 my-md-auto mt-4">
                  <i class="material-icons text-light text-5xl">format_quote</i>
                  <p class="text-lg text-light">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat eaque nesciunt mollitia facilis
                    suscipit. Maxime officiis ipsa, ab saepe, beatae omnis repellat accusantium magni debitis nesciunt
                    nam possimus asperiores doloribus!
                  </p>
                  <p class="text-light font-weight-bold text-sm">Michael - <span
                      class="text-xs font-weight-normal">Writter</span></p>
                  <hr class="vertical start-100 ms-n5 d-xl-block d-none">
                  <div class="button">
                    <button url="/sejarah-singkat" type="button" class="btn bg-gradient-info btn-sm mb-0 mt-3">Read
                      More</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="my-3">
        <div class="card shadow-lg mt-n5 mx-4 mb-4">
          <div class="card-body">
            <div class="container-fluid px-0">
              <div class="row">
                <div class="col-lg-4 col-sm-6 mb-sm-0 mb-4">
                  <div class="info-horizontal border-radius-xl p-4 d-block d-md-flex ">
                    <i class="material-icons text-3xl text-gradient text-info">tune</i>
                    <div class="description ps-0 ps-md-3">
                      <h5>Pendaftaran</h5>
                      <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that
                        process
                        will continue whatever.</p>
                      <a href="#" class="text-dark icon-move-right">
                        Read More
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-lg-1">
                  <div class="info-horizontal border-radius-xl p-4 d-block d-md-flex ">
                    <i class="material-icons text-3xl text-gradient text-info">settings_suggest</i>
                    <div class="description ps-0 ps-md-3">
                      <h5>Fasilitas Kampus</h5>
                      <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that
                        process
                        will continue whatever.</p>
                      <a href="#" class="text-dark icon-move-right">
                        Read More
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mt-lg-0 mt-4">
                  <div class="info-horizontal bg-gradient-info border-radius-xl p-4 d-block d-md-flex ">
                    <i class="material-icons text-3xl text-white">compare</i>
                    <div class="description ps-0 ps-md-3">
                      <h5 class="text-white">Beasiswa</h5>
                      <p class="text-white">The Arctic Ocean freezes every winter and much of the sea-ice then thaws
                        every
                        summer, and that process will continue whatever.</p>
                      <a href="#" class="text-white icon-move-right">
                        Read More
                        <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3"
                    data-aos="fade-right">
                    <h2 class="category text-info mt-3">Penelitian</h2>
                    <h4 class="card-title">
                      <a href="#" class="text-dark">Warner Music Group buys concert discovery service
                        Songkick</a>
                    </h4>
                    <p class="card-description">
                      Warner Music Group announced today it’s acquiring the selected assets of the music platform
                      Songkick,
                      including its app for finding concerts and the company’s trademark. Songkick has been involved
                      in a
                      lawsuit against the major… <a href="#" class="text-darker icon-move-right text-sm">Read
                        More
                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                      </a>
                    </p>
                  </div>
                  <div class="col-lg-6 justify-content-center d-flex flex-column" data-aos="fade-left">
                    <div class="card">
                      <div class="d-block blur-shadow-image">
                        <img src="{{ asset('assets/blog/img/bg2.jpg') }}" alt="img-blur-shadow-blog-2"
                          class="img-fluid border-radius-lg" loading="lazy">
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row mt-5">
                  <div class="col-lg-6 justify-content-center d-flex flex-column">
                    <div class="card">
                      <div class="d-block blur-shadow-image">
                        <img src="{{ asset('assets/blog/img/bg3.jpg') }}" alt="img-blur-shadow-blog-2"
                          class="img-fluid border-radius-xl" loading="lazy">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
                    <h2 class="category text-info mt-3">Pengabdian</h2>
                    <h4 class="card-title">
                      <a href="#" class="text-dark">Interesting factoids I bet you never knew about
                        Creative
                        Tim</a>
                    </h4>
                    <p class="card-description">
                      Warner Music Group announced today it’s acquiring the selected assets of the music platform
                      Songkick,
                      including its app for finding concerts and the company’s trademark. Songkick has been involved
                      in a
                      lawsuit against the major… <a href="#" class="text-darker icon-move-right text-sm">Read
                        More
                        <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-6">
        <div class="container">
          <div class="row">
            <div class="col-9 text-center mx-auto" data-aos="fade-up">
              <h2 class="mb-1 text-info">Berita Terbaru</h2>
              <p class="mb-6 px-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, inventore maiores
                quisquam tenetur debitis nobis non.</p>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
              <div class="card">
                <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-1">
                  <a href="#" class="d-block blur-shadow-image">
                    <img src="{{ asset('assets/blog/img/bg2.jpg') }}" class="img-fluid border-radius-md" alt="anastasia"
                      loading="lazy">
                  </a>
                </div>
                <div class="card-body">
                  <a href="#" class="card-title mt-3 h5 d-block text-darker">
                    Shared Coworking
                  </a>
                  <p class="card-description mb-4">
                    Use border utilities to quickly style the border and border-radius of an element. Great for images,
                    buttons.
                  </p>
                  <div class="author align-items-center">
                    <img src="{{ asset('assets/blog/img/team-1.jpg') }}" alt="..." class="avatar shadow" loading="lazy">
                    <div class="name ps-2">
                      <span>Mathew Glock</span>
                      <div class="stats">
                        <small>Posted on 28 February</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
              <div class="card">
                <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-1">
                  <a href="#" class="d-block blur-shadow-image">
                    <img src="{{ asset('assets/blog/img/bg3.jpg') }}" class="img-fluid border-radius-md" alt="nastuh"
                      loading="lazy">
                  </a>
                </div>
                <div class="card-body">
                  <a href="#" class="text-darker card-title mt-3 h5 d-block">
                    Really Housekeeping
                  </a>
                  <p class="card-description mb-4">
                    Use border utilities to quickly style the border and border-radius of an element. Great for images,
                    buttons.
                  </p>
                  <div class="author align-items-center">
                    <img src="{{ asset('assets/blog/img/team-2.jpg') }}" alt="ivana" class="avatar shadow"
                      loading="lazy">
                    <div class="name ps-2">
                      <span>Mathew Glock</span>
                      <div class="stats">
                        <small>Posted on 28 February</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
              <div class="card">
                <div class="card-header p-0 mx-3 mt-n4 position-relative z-index-1">
                  <a href="#" class="d-block blur-shadow-image">
                    <img src="{{ asset('assets/blog/img/bg.jpg') }}" class="img-fluid border-radius-md" alt="annie"
                      loading="lazy">
                  </a>
                </div>
                <div class="card-body">
                  <a href="#" class="text-darker card-title mt-3 h5 d-block">
                    Shared Coworking
                  </a>
                  <p class="card-description mb-4">
                    Use border utilities to quickly style the border and border-radius of an element. Great for images,
                    buttons.
                  </p>
                  <div class="author align-items-center">
                    <img src="{{ asset('assets/blog/img/team-3.jpg') }}" alt="marie" class="avatar shadow"
                      loading="lazy">
                    <div class="name ps-2">
                      <span>Mathew Glock</span>
                      <div class="stats">
                        <small>Posted on 28 February</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="pt-3 pb-4" id="count-stats">
        <div class=" bg-gradient-dark">
          <div class="container">
            <div class="row">
              <div class="col-lg-9 mx-auto py-3">
                <div class="row">
                  <div class="col-md-4 position-relative">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-info"><span id="state1" countto="15">15</span></h1>
                      <h5 class="mt-3 text-light">Prodi</h5>
                    </div>
                    <hr class="vertical light">
                  </div>
                  <div class="col-md-4 position-relative">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-info"><span id="state2" countto="75">75</span></h1>
                      <h5 class="mt-3 text-light">Pengajar</h5>
                    </div>
                    <hr class="vertical light">
                  </div>
                  <div class="col-md-4">
                    <div class="p-3 text-center">
                      <h1 class="text-gradient text-info"><span id="state3" countto="1000">1000</span>+</h1>
                      <h5 class="mt-3 text-light">Mahasiswa</h5>
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
</section>

@include('blog.partials.footer')
@endsection