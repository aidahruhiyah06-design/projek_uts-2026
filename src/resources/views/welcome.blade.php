<!DOCTYPE html>
<html lang="en">
<head>
     <title>My Professional Portfolio</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">
     <link rel="stylesheet" href="{{ asset('front/css/owl.theme.default.min.css') }}">
     <link rel="stylesheet" href="{{ asset('front/css/templatemo-style.css') }}">

     <style>
          .modal-content {
               border-radius: 8px;
               border: none;
               box-shadow: 0 5px 15px rgba(0,0,0,0.3);
          }
          .modal-header {
               background: #29ca8e;
               color: white;
               border-top-left-radius: 8px;
               border-top-right-radius: 8px;
               padding: 20px;
          }
          .modal-header .close {
               color: white;
               opacity: 0.8;
          }
          .modal-body {
               padding: 30px 20px;
          }
          .admin-login-btn {
               background: #29ca8e;
               color: white;
               font-weight: bold;
               border: none;
               transition: all 0.3s ease;
          }
          .admin-login-btn:hover {
               background: #22a775;
               color: white;
          }
          .github-link {
               color: #333;
               font-weight: bold;
               text-decoration: none;
               transition: color 0.3s ease;
          }
          .github-link:hover {
               color: #29ca8e;
               text-decoration: underline;
          }
          /* Style Tambahan untuk Menampilkan Gambar ERD */
          .erd-card {
               background: #fff;
               border: 1px solid #e1e8ed;
               border-radius: 8px;
               padding: 20px;
               box-shadow: 0 4px 12px rgba(0,0,0,0.05);
               margin-top: 20px;
          }
     </style>
</head>
<body id="top">

<section class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</section>

<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
     <div class="container">
          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="#" class="navbar-brand">Portfolio.Me</a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="#top" class="smoothScroll">Home</a></li>
                    <li><a href="#about" class="smoothScroll">About Me</a></li>
                    <li><a href="#courses" class="smoothScroll">Projects</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact</a></li>
               </ul>

               <ul class="nav navbar-nav navbar-right">
                    <li>
                         <a href="#" data-toggle="modal" data-target="#adminLoginModal" style="margin-top: 5px; padding: 10px 15px; color: #29ca8e !important; font-size: 20px;" title="Admin Area">
                              <i class="fa fa-user-circle"></i>
                         </a>
                    </li>
               </ul>
          </div>
     </div>
</section>

<div class="modal fade" id="adminLoginModal" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="adminLoginModalLabel" style="margin: 0; font-weight: bold;"><i class="fa fa-lock"></i> Admin Verification</h4>
               </div>
               
               <form action="{{ url('/login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="modal-body">
                         
                         <input type="text" style="display:none;" name="fakeuser"/>
                         <input type="password" style="display:none;" name="fakepass"/>

                         @if(session('login_error'))
                              <div class="alert alert-danger" style="font-size: 11px; padding: 8px 10px; color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; border-radius: 4px; margin-bottom: 15px;">
                                   {{ session('login_error') }}
                              </div>
                         @endif

                         <div class="form-group">
                              <label style="font-size: 12px; color: #666;">Email Address</label>
                              <input type="email" id="admin-email" name="email" class="form-control" placeholder="admin@example.com" style="border-radius: 4px;" value="{{ old('email') }}" required>
                         </div>
                         <div class="form-group" style="margin-bottom: 0;">
                              <label style="font-size: 12px; color: #666;">Password</label>
                              <input type="password" id="admin-password" name="password" class="form-control" placeholder="••••••••" style="border-radius: 4px;" required>
                         </div>
                    </div>
                    <div class="modal-footer" style="border-top: none; padding-top: 0;">
                         <button type="submit" class="btn form-control admin-login-btn" style="border-radius: 4px; height: 40px;">Sign In to Dashboard</button>
                    </div>
               </form>
          </div>
     </div>
</div>

<section id="home">
     <div class="row">
          <div class="owl-carousel owl-theme home-slider">
               <div class="item item-first">
                    <div class="caption">
                         <div class="container">
                              <div class="col-md-6 col-sm-12">
                                   <h1>Selamat Datang di Portofolio Saya</h1>
                                   <h3>Saya seorang Web Developer yang berfokus membangun aplikasi modern menggunakan Laravel.</h3>
                                   <a href="#about" class="section-btn btn btn-default smoothScroll">Kenali Saya Lebih Dalam</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>

<section id="about">
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <div class="about-info">
                         <h2>Tentang Saya</h2>
                         <figure>
                              <span><i class="fa fa-users"></i></span>
                              <figure>
                                   <h3>Profil Profesional</h3>
                                   <p>Saya mahasiswa Pemrograman Web yang berdedikasi tinggi dalam mempelajari arsitektur back-end dan integrasi front-end yang responsif.</p>
                              </figure>
                         </figure>

                         <figure>
                              <span><i class="fa fa-code"></i></span>
                              <figure>
                                   <h3>Tech Stack & Keahlian</h3>
                                   <p>PHP, Laravel Framework, MariaDB Database, Filament Admin, JavaScript, Bootstrap, dan Livewire.</p>
                              </figure>
                         </figure>

                         <figure>
                              <span><i class="fa fa-github"></i></span>
                              <figure>
                                   <h3>GitHub Repository</h3>
                                   <p>Lihat portofolio kode dan kontribusi saya di <a href="https://github.com/aidahruhiyah06-design" target="_blank" class="github-link">github.com/aidahruhiyah06-design <i class="fa fa-external-link"></i></a></p>
                              </figure>
                         </figure>
                    </div>
               </div>
          </div>
     </div>
</section>

<section id="courses">
     <div class="container">
          <div class="row">
               <div class="col-md-12 col-sm-12">
                    <div class="section-title">
                         <h2>Showcase Projects <small>Daftar aplikasi yang telah saya bangun</small></h2>
                    </div>
               </div>

               @if(isset($projects) && count($projects) > 0)
                    @foreach($projects as $project)
                         <div class="col-md-4 col-sm-4">
                              <div class="item">
                                   <div class="courses-thumb">
                                        <div class="courses-top">
                                             <div class="courses-image">
                                                  <img src="{{ asset('front/images/courses-image1.jpg') }}" class="img-responsive" alt="">
                                             </div>
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="#">{{ $project->nama }}</a></h3>
                                             <p>{{ $project->description ?? 'Tidak ada deskripsi.' }}</p>
                                        </div>

                                        <div class="courses-info">
                                             @if(isset($project->link))
                                                  <a href="{{ $project->link }}" target="_blank" class="btn btn-primary btn-sm" style="color: white;">Lihat Project <i class="fa fa-external-link"></i></a>
                                             @else
                                                  <span class="text-muted">No Link Available</span>
                                             @endif
                                        </div>
                                   </div>
                              </div>
                         </div>
                    @endforeach
               @else
                    <div class="col-md-12">
                         <p class="text-center text-muted">Belum ada project yang ditambahkan.</p>
                    </div>
               @endif
          </div>
     </div>
</section>

<section id="erd-design" style="padding: 60px 0; background: #fafafa; border-top: 1px solid #eee;">
     <div class="container">
          <div class="row">
               <div class="col-md-12 text-center">
                    <div class="section-title">
                         <h2>Rencana Perancangan Sistem (ERD)</h2>
                         <small>Struktur relasi tabel basis data untuk Sistem Manajemen Catering Harian</small>
                    </div>
               </div>
               
               <div class="col-md-10 col-md-offset-1">
                    <div class="erd-card text-center">
                         <img src="{{ asset('front/images/erd catering.png') }}" class="img-responsive" alt="Entity Relationship Diagram Catering Harian" style="margin: 0 auto; border-radius: 6px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                    </div>

                    <div style="margin-top: 30px; line-height: 1.7; color: #555;">
                         <h4><i class="fa fa-tags" style="color: #29ca8e;"></i> Deskripsi Alur Relasi Tabel ERD:</h4>
                         <ul style="padding-left: 20px; list-style-type: square;">
                              <li><strong>kategori menu ke menu (1 ke N):</strong> Satu kategori dapat mengelompokkan banyak menu hidangan makanan/minuman yang tersedia.</li>
                              <li><strong>Customer ke pesanan (1 ke N):</strong> Data akun Customer terhubung langsung ke transaksi pemesanan, di mana satu pelanggan bisa memesan berkali-kali.</li>
                              <li><strong>paket harian ke pesanan (1 ke N):</strong> Paket katering pilihan pelanggan dimasukkan ke dalam data transaksi induk pesanan.</li>
                              <li><strong>menu ke detail_pesanan (1 ke N) & pesanan ke detail_pesanan (1 ke N):</strong> Tabel detail_pesanan berfungsi sebagai jembatan untuk mencatat rincian menu apa saja yang dibeli di dalam setiap nota transaksi pesanan beserta kuantitas harga satuannya.</li>
                              <li><strong>pesanans ke jadwal_pengiriman (1 ke N):</strong> Mengatur pelacakan logistik, di mana satu pesanan katering terjadwal untuk proses pengiriman harian secara teratur.</li>
                         </ul>
                    </div>
               </div>
          </div>
     </div>
</section>
<section id="contact">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-2 col-md-8 col-sm-12">
                    @if(session('success'))
                         <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Sukses!</strong> Pesan Anda berhasil dikirim.
                         </div>
                    @endif

                    <form id="contact-form" role="form" action="{{ route('contact') }}" method="post">
                         @csrf
                         <div class="section-title">
                              <h2>Hubungi Saya <small>Kirim pesan langsung ke database admin</small></h2>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <input type="text" class="form-control" placeholder="Nama Lengkap Anda" name="name" required>
                         </div>

                         <div class="col-md-6 col-sm-6">
                              <input type="email" class="form-control" placeholder="Alamat Email" name="email" required>
                         </div>

                         <div class="col-md-12 col-sm-12">
                              <textarea class="form-control" rows="6" placeholder="Tulis pesan atau penawaran kerja sama di sini..." name="message" required></textarea>
                         </div>

                         <div class="col-md-4 col-sm-12">
                              <input type="submit" class="form-control submit-btn" name="submit" value="Kirim Pesan">
                         </div>
                    </form>
               </div>
          </div>
     </div>
</section>

<script src="{{ asset('front/js/jquery.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/smoothscroll.js') }}"></script>
<script src="{{ asset('front/js/custom.js') }}"></script>

<script>
     $(document).ready(function() {
          @if(session('login_error'))
               $('#adminLoginModal').modal('show');
          @endif
     });
</script>

</body>
</html>