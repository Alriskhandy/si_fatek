<x-dashboard-layout>
    <x-slot name="contentHeader">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola Pengguna</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">
                            <i class="nav-icon fas fa-house ml-1"></i>
                            Halaman Utama
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('kelola-pengguna') }}">Kelola Pengguna</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </x-slot>

    <div class="container pb-2">
        <div class="card">

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                    <thead class="ltr:text-left rtl:text-right">
                        <tr>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Username</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Email</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Tanggal Verifikasi</th>
                            <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Terakhir Update</th>
                        </tr>
                    </thead>
    
                    <tbody class="divide-y divide-gray-200">
                        <tr class="odd:bg-gray-50">
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John Doe</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                        </tr>
    
                        <tr class="odd:bg-gray-50">
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Jane Doe</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">04/11/1980</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Designer</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">$100,000</td>
                        </tr>
    
                        <tr class="odd:bg-gray-50">
                            <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Gary Barlow</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">Singer</td>
                            <td class="whitespace-nowrap px-4 py-2 text-gray-700">$20,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dashboard-layout>