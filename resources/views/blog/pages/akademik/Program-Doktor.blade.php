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
                                                <h3 class="text-white mb-0">Program Doktor</h3>
                                            </div>
                                        </div>
                                        <div class="card-body p-5 pt-0 mt-5">
                                            <p>

                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget
                                                mauris nec elit convallis condimentum. Integer
                                                sodales lacinia mauris, vitae vehicula ligula tincidunt nec. Vivamus
                                                lobortis mauris sit amet nisi volutpat, a pulvinar
                                                odio consequat. Sed luctus, risus a scelerisque viverra, sapien arcu
                                                gravida purus, id convallis nulla eros nec justo.
                                                <br><br>
                                                Suspendisse vitae massa eu nibh consectetur posuere. Morbi ultricies
                                                justo ac lorem viverra, nec gravida elit bibendum.
                                                Integer non odio non eros vestibulum fermentum. Maecenas finibus nibh
                                                sit amet risus auctor, eget aliquet magna
                                                fermentum. Quisque quis condimentum neque.
                                                <br><br>
                                                Pellentesque habitant morbi tristique senectus et netus et malesuada
                                                fames ac turpis egestas. Phasellus ut metus
                                                eleifend, rutrum odio vel, aliquet nisi. Sed tincidunt varius velit, ut
                                                congue enim congue eget. Integer bibendum
                                                suscipit ipsum, non malesuada nisi commodo eu. Nam ut elit sed libero
                                                luctus efficitur vel et arcu.
                                                <br><br>
                                                Fusce consectetur mi vel felis eleifend, non posuere arcu interdum.
                                                Nulla facilisi. Ut vestibulum vehicula ante, ac
                                                venenatis magna consequat vel. Nam vestibulum sodales quam, vitae
                                                molestie risus lacinia non. Vestibulum sit amet odio
                                                at magna rhoncus hendrerit.
                                                <br><br>
                                                Vestibulum consectetur sapien nec nunc fermentum, quis cursus mauris
                                                faucibus. Morbi pretium sapien sit amet ipsum
                                                tempus, at vestibulum lacus sagittis. Maecenas sit amet bibendum velit.
                                                Cras at ultricies magna. Integer feugiat viverra
                                                lacus, vel ullamcorper libero gravida vel. Sed tincidunt metus eu arcu
                                                feugiat, in gravida dolor lacinia.
                                            </p>
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