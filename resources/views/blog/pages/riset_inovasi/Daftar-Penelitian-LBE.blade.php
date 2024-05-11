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
                                                <h3 class="text-white mb-0">Daftar Penelitian LBE</h3>
                                            </div>
                                        </div>
                                        <div class="card-body p-2 pt-0 my-5">
                                            <div class="col-lg-10 mx-auto">
                                                @if(isset($data) && count($data) > 0)
                                                <div class="overflow-x-auto table-responsive">
                                                    <table
                                                        class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                                                        <thead class="ltr:text-left rtl:text-right">
                                                            <tr>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                                    No</th>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                                    Nama</th>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                                    NIP</th>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                                    Judul</th>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                                    Program Studi</th>
                                                                <th
                                                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                                    Tahun</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody class="divide-y divide-gray-200">
                                                            @foreach ($data as $a)
                                                            <tr class="odd:bg-gray-50">
                                                                <td
                                                                    class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                                                                    {{ $loop->iteration }}</td>
                                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                                                    {{ $a->nama }}</td>
                                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                                                    {{ $a->nip }}</td>
                                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                                                    {{ $a->judul }}</td>
                                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                                                    {{ $a->prodi }}</td>
                                                                <td class="whitespace-nowrap px-4 py-2 text-gray-700">
                                                                    {{ $a->tahun }}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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