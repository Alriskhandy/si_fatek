<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/img/logo-unkhair.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Fakultas Teknik</span>
    </a>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <!-- SIDEBAR MENU -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- BERANDA -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>

                <!-- PROFIL -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-pen"></i>
                        <p>
                            Profil
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('berita') }}"
                                class="nav-link {{ request()->routeIs('berita') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sejarah') }}"
                                class="nav-link {{ request()->routeIs('sejarah') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sejarah Singkat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('visi-misi') }}"
                                class="nav-link {{ request()->routeIs('visi-misi') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi, Misi dan Sasaran</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('struktur') }}"
                                class="nav-link {{ request()->routeIs('struktur') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Struktur Organisasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manajemen') }}"
                                class="nav-link {{ request()->routeIs('manajemen') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manajemen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('master-plan') }}"
                                class="nav-link {{ request()->routeIs('master-plan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Master Plan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- AKADEMIK -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-graduation-cap"></i>
                        <p>
                            Akademik
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('departemen') }}"
                                class="nav-link {{ request()->routeIs('departemen') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departemen</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('magister') }}"
                                class="nav-link {{ request()->routeIs('magister') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program Magister</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('doktor') }}"
                                class="nav-link {{ request()->routeIs('doktor') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program Doktor</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('profesi') }}"
                                class="nav-link {{ request()->routeIs('profesi') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Program Profesi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('akreditasi') }}"
                                class="nav-link {{ request()->routeIs('akreditasi') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Akreditasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kalender') }}"
                                class="nav-link {{ request()->routeIs('kalender') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kalender Akademik</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- SUMBER DAYA -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-seedling"></i>
                        <p>
                            Sumber Daya
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('guru-besar') }}"
                                class="nav-link {{ request()->routeIs('guru-besar') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Guru Besar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tenaga Kependidikan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sarana & Prasarana</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- KEMAHASISWAAN -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Kemahasiswaan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>UPT Asrama</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengembangan Karakter Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Peningkatan Prestasi Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Alumni</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Aturan Kemahasiswaan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- RISET & INOVASI -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-flask"></i>
                        <p>
                            Riset & Inovasi
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar Penelitian</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hasil Inovasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hak & Kekayaan Intelektual</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- KEMITRAAN -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-handshake"></i>
                        <p>
                            Kemitraan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('kerjasama-dalam-negeri') }}"
                                class="nav-link {{ request()->routeIs('kerjasama-dalam-negeri') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kerjasama Dalam Negeri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kerjasama-luar-negeri') }}"
                                class="nav-link {{ request()->routeIs('kerjasama-luar-negeri') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kerjasama Luar Negeri</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- GPM-PR -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            GPM-PR
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profil GPM-PR</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dokumen Mutu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Audit Mutu Akademik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>LAM Teknik</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Kepuasan Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Survei Kepuasan Layanan Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Galeri</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- KELOLA PENGGUNA -->
                @can('IsAdmin')
                <li class="nav-item">
                    <a href="{{ route('kelola-pengguna') }}"
                        class="nav-link {{ request()->routeIs('kelola-pengguna') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Kelola Pengguna</p>
                    </a>
                </li>
                @endcan

                <!-- EDIT PROFIL -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Edit Profil</p>
                    </a>
                </li>

                <!-- LOGOUT -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>