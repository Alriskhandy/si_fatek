<!-- Navbar -->
<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav
        class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container">
          <a class="navbar-brand text-dark" href="/" rel="tooltip" data-placement="bottom" target="_blank">
            _SiFatek
          </a>
          <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
              <span class="navbar-toggler-bar bar1"></span>
              <span class="navbar-toggler-bar bar2"></span>
              <span class="navbar-toggler-bar bar3"></span>
            </span>
          </button>
          <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">

            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-dark {{ Request::is('/') ? 'active' : '' }}" href="/">
                  Beranda
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Profile
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/sambutan-dekan">Sambutan Dekan</a></li>
                  <li><a class="dropdown-item" href="/berita">Berita</a></li>
                  <li><a class="dropdown-item" href="/sejarah-singkat">Sejarah Singkat</a></li>
                  <li><a class="dropdown-item" href="/visi-misi-dan-sasaran">Visi, Misi dan Sasaran</a></li>
                  <li><a class="dropdown-item" href="/manajemen">Manajemen</a></li>
                  <li><a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="/peta-fakultas">Peta Fakultas</a></li>
                  <li><a class="dropdown-item" href="/master-plan">Master Plan</a></li>
                  <li><a class="dropdown-item" href="/mediatek">Mediatek</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Akademik
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/departemen">Departemen</a></li>
                  <li><a class="dropdown-item" href="/program-magister">Program Magister</a></li>
                  <li><a class="dropdown-item" href="/program-doktor">Program Doktor</a></li>
                  <li><a class="dropdown-item" href="/program-profesi">Program Profesi</a></li>
                  <li><a class="dropdown-item" href="/akreditasi">Akreditasi</a></li>
                  <li><a class="dropdown-item" href="/kalender-akademik">Kalender Akademik</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Sumber Daya
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/guru-besar">Guru Besar</a></li>
                  <li><a class="dropdown-item" href="/tenaga-kependidikan">Tenaga Kependidikan</a></li>
                  <li><a class="dropdown-item" href="/sarana-prasarana">Sarana dan Prasarana</a></li>
                  <li><a class="dropdown-item" href="/perpustakaan">Perpustakaan</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Kemahasiswaan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/pengembangan-karakter-mahasiswa">Pengembangan Karakter
                      Mahasiswa</a></li>
                  <li><a class="dropdown-item" href="/peningkatan-prestasi-mahasiswa">Peningkatan Prestasi Mahasiswa</a>
                  </li>
                  <li><a class="dropdown-item" href="/mahasiswa-inbound-outbound">Mahsiswa Inbound dan Outbound</a></li>
                  <li><a class="dropdown-item" href="/alumni">Alumni</a></li>
                  <li><a class="dropdown-item" href="/aturan-kemahasiswaan">Aturan Kemahasiswaan</a></li>
                  <li><a class="dropdown-item" href="/pengumuman">Pengumuman</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Riset dan Inovasi
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/daftar-penelitian-lbe">Daftar Penelitian LBE</a></li>
                  <li><a class="dropdown-item" href="/hasil-inovasi">Hasil Inovasi</a></li>
                  <li><a class="dropdown-item" href="/hak-kekayaan-intelektual">Hak Kekayaan Intelektual</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  Kemitraan
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/kerjasama-dalam-negeri">Kerjasama Dalam Negeri</a></li>
                  <li><a class="dropdown-item" href="/kerjasama-luar-negeri">Kerjasama Luar Negeri</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  GPM-PR
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/understructure">Profile GPM-PR</a></li>
                  <li><a class="dropdown-item" href="/understructure">Dokumen Mutu</a></li>
                  <li><a class="dropdown-item" href="/understructure">Audit Mutu Akademik Internal</a></li>
                  <li><a class="dropdown-item" href="/understructure">Akreditasi</a></li>
                  <li><a class="dropdown-item" href="/understructure">LAM TEKNIK</a></li>
                  <li><a class="dropdown-item" href="/understructure">Laporan Kepuasan Pengguna</a></li>
                  <li><a class="dropdown-item" href="/understructure">Survei Kepuasan Layanan Mahsiswa</a></li>
                  <li><a class="dropdown-item" href="/understructure">Galeri</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  COT
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/understructure">COT Website</a></li>
                  <li><a class="dropdown-item" href="/understructure">Jurnal COT</a></li>
                  <li><a class="dropdown-item" href="/understructure">COT Newslatter</a></li>
                  <li><a class="dropdown-item" href="/understructure">U-I-G Collaboration</a></li>
                </ul>
              </li>
            </ul>

            <!-- nav Social Media -->
            <ul class="nav navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-dark" href="https://www.facebook.com/FatekUnkhair">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="https://www.instagram.com/FatekUnkhair">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
  </div>
</div>