 <!-- =========================================================
 * Argon Dashboard PRO v1.1.0
 =========================================================

 * Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
 * Copyright 2019 Creative Tim (https://www.creative-tim.com)

 * Coded by Creative Tim

 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
  -->
 <!DOCTYPE html>
 <html>

 <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="author" content="Creative Tim">
   <title>@yield('title')</title>
   <!-- Extra details for Live View on GitHub Pages -->
   <!-- Canonical SEO -->
   <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard-pro" />
   <!--  Social tags      -->
   <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
   <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <!-- Schema.org markup for Google+ -->
   <meta itemprop="name" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
   <meta itemprop="description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta itemprop="image" content="../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
   <!-- Twitter Card data -->
   <meta name="twitter:card" content="product">
   <meta name="twitter:site" content="@creativetim">
   <meta name="twitter:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim">
   <meta name="twitter:description" content="Start your development with a Dashboard for Bootstrap 4.">
   <meta name="twitter:creator" content="@creativetim">
   <meta name="twitter:image" content="../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg">
   <!-- Open Graph data -->
   <meta property="fb:app_id" content="655968634437471">
   <meta property="og:title" content="Argon - Premium Dashboard for Bootstrap 4 by Creative Tim" />
   <meta property="og:type" content="article" />
   <meta property="og:url" content="https://demos.creative-tim.com/argon-dashboard/index.html" />
   <meta property="og:image" content="../../s3.amazonaws.com/creativetim_bucket/products/137/original/opt_adp_thumbnail.jpg" />
   <meta property="og:description" content="Start your development with a Dashboard for Bootstrap 4." />
   <meta property="og:site_name" content="Creative Tim" />
   <!-- Favicon -->
   <link rel="icon" href="{{asset('frontend/assets/img/brand/favicon.png')}}" type="{{asset('/frontend/image/png')}}">
   <!-- Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
   <!-- Icons -->
   <link rel="stylesheet" href="{{asset('frontend/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('frontend/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
   <link rel="stylesheet" href="{{asset('frontend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')}}">
   <!-- Page plugins -->
   <!-- Argon CSS -->
   <link rel="stylesheet" href="{{asset('frontend/assets/css/argon.min9f1e.css?v=1.1.0')}}" type="text/css">
   <!-- Google Tag Manager -->
   <script>
     (function(w, d, s, l, i) {
       w[l] = w[l] || [];
       w[l].push({
         'gtm.start': new Date().getTime(),
         event: 'gtm.js'
       });
       var f = d.getElementsByTagName(s)[0],
         j = d.createElement(s),
         dl = l != 'dataLayer' ? '&l=' + l : '';
       j.async = true;
       j.src =
         '../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
       f.parentNode.insertBefore(j, f);
     })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
   </script>
   <!-- End Google Tag Manager -->
 </head>

 <body>
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   <!-- Navabr -->
   <nav id="navbar-main" class="navbar navbar-sticky navbar-horizontal navbar-main navbar-expand-lg navbar-light bg-white ">
     <div class="container">
       <a class="navbar-brand" href="{{asset('frontend/pages/dashboards/dashboard.html')}}">
         <img src="{{asset('frontend/assets/img/logo.png')}}">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
         <div class="navbar-collapse-header">
           <div class="row">
             <div class="col-6 collapse-brand">
               <a href="pages/dashboards/dashboard.html">
                 <img src="{{asset('frontend/assets/img/logo.png')}}">
               </a>
             </div>
             <div class="col-6 collapse-close">
               <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                 <span></span>
                 <span></span>
               </button>
             </div>
           </div>
         </div>
         <ul class="navbar-nav mr-auto">
           <li class="nav-item">
             <a href="{{url('/')}}" class="nav-link">
               <span class="nav-link-inner--text">Indonesia</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="{{url('/global')}}" class="nav-link">
               <span class="nav-link-inner--text">Global</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="{{url('/about')}}" class="nav-link">
               <span class="nav-link-inner--text">About</span>
             </a>
           </li>
           <li class="nav-item">
             <a href="{{url('/chart')}}" class="nav-link">
               <span class="nav-link-inner--text">Chart</span>
             </a>
           </li>
         </ul>
         <hr class="d-lg-none" />
         <ul class="navbar-nav align-items-lg-center ml-lg-auto">
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.facebook.com/feyto_qbz" target="_blank" data-toggle="tooltip" title="" data-original-title="Like us on Facebook">
               <i class="fab fa-facebook-square"></i>
               <span class="nav-link-inner--text d-lg-none">Facebook</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://www.instagram.com/feyto_fd" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Instagram">
               <i class="fab fa-instagram"></i>
               <span class="nav-link-inner--text d-lg-none">Instagram</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="#" target="_blank" data-toggle="tooltip" title="" data-original-title="Follow us on Twitter">
               <i class="fab fa-twitter-square"></i>
               <span class="nav-link-inner--text d-lg-none">Twitter</span>
             </a>
           </li>
           <li class="nav-item">
             <a class="nav-link nav-link-icon" href="https://github.com/feyto81" target="_blank" data-toggle="tooltip" title="" data-original-title="Star us on Github">
               <i class="fab fa-github"></i>
               <span class="nav-link-inner--text d-lg-none">Github</span>
             </a>
           </li>
           <li class="nav-item d-none d-lg-block ml-lg-4">
             <a href="#" target="_blank" class="btn btn-neutral btn-icon">
               <span class="btn-inner--icon">
                 <i class="fas fa-shopping-cart mr-2"></i>
               </span>
               
             </a>
           </li>
         </ul>
       </div>
     </div>
   </nav>
   <!-- Main content -->
   <div class="main-content">
     <!-- Header -->
     <div class="header bg-primary pt-5 pb-7">
       <div class="container">
         <div class="header-body">
           <div class="row align-items-center">
             <div class="col-lg-6">
               <div class="pr-5">
                 <h1 class="display-2 text-white font-weight-bold mb-0">Website Monitoring Covid-19 In This World</h1>
                 <h2 class="display-4 text-white font-weight-light">By Feyto Dev</h2>
                 <p class="text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                 tempor incididunt ut labore et dolore magna aliqua.</p>
                 <div class="mt-5">
                   <a href="pages/dashboards/dashboard.html" class="btn btn-neutral my-2">#Dirumah Aja</a>
                   <a href="https://www.creative-tim.com/product/argon-dashboard-pro" class="btn btn-default my-2">Indonesia Bisa</a>
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="row pt-5">
                 <div class="col-md-6">
                   <div class="card">
                     <div class="card-body">
                       <div class="icon icon-shape bg-gradient- text-white rounded-circle shadow mb-4"><img src="{{asset('frontend/assets/img/sad-u6e.png')}}" width="50px" height="50px">
                         <i class="ni ni-active-40"></i>
                       </div>
                       {{--@foreach ($positif as $row)--}}
                       <h5 class="h3">Total Positif</h5>
                       <p>{{ $positif['value'] }}</p>
                       {{--@endforeach--}}
                     </div>
                   </div>
                   <div class="card">
                     <div class="card-body">
                       <div class="icon icon-shape bg-gradient text-white rounded-circle shadow mb-4">
                        <img src="{{asset('frontend/assets/img/happy-ipM.png')}}" width="50px" height="50px">
                         <i class="ni ni-active-40"></i>
                       </div>
                       {{--@foreach ($sembuh as $row)--}}
                       <h5 class="h3">Total Sembuh</h5>
                       <p>{{ $sembuh['value'] }}</p>
                       {{--@endforeach--}}
                     </div>
                   </div>
                 </div>
                 <div class="col-md-6 pt-lg-5 pt-4">
                   <div class="card mb-4">
                     <div class="card-body">
                       <div class="icon icon-shape bg-gradient- text-white rounded-circle shadow mb-4">
                        <img src="{{asset('frontend/assets/img/emoji-LWx.png')}}" width="50px" height="50px">
                         <i class="ni ni-active-40"></i>
                       </div>
                      {{-- @foreach ($meninggal as $row) --}}
                       <h5 class="h3">Total Meninggal</h5>
                       <p>{{ $meninggal['value'] }}</p>
                       {{--@endforeach--}}
                     </div>
                   </div>
                   <div class="card mb-4">
                     
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="separator separator-bottom separator-skew zindex-100">
         <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
           <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
         </svg>
       </div>
     </div>
     <section class="py-6 pb-9 bg-default">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Covid-19</h3>
                <p class="text-sm mb-0">
                 Data Kasus Coronavirus Di Dunia Berdasarkan Negara
                </p>
              </div>
              <div class="table-responsive py-4">
                <table class="table table-flush" id="dataTable">
                  <thead class="thead-light">
                    <tr>
                          <th scope="col">No</th>
                          <th scope="col">Negara</th>
                          <th scope="col">Positif</th>
                          <th scope="col">Sembuh</th>
                          <th scope="col">Meninggal</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                         <th scope="col">No</th>
                          <th scope="col">Negara</th>
                          <th scope="col">Positif</th>
                          <th scope="col">Sembuh</th>
                          <th scope="col">Meninggal</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     @php
                          $no = 0;
                        @endphp
                    @foreach ($global_country as $p)
                    @php
                          $no++;
                        @endphp  
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{ $p['attributes']['Country_Region'] }}</td>
                        <td>{{ $p['attributes']['Confirmed'] }}</td>
                        <td>{{ $p['attributes']['Recovered'] }}</td>
                        <td>{{ $p['attributes']['Deaths'] }}</td>
                    </tr>
                    @endforeach
                        
                      </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h2 class="display-3 text-white">Hal Yang Mungkin Diperlukan</h3>
             <p class="lead text-white">
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat.
             </p>
         </div>
       </div>
       <div class="container-fluid mt--6">
      <!-- Table -->
      

    </div>
     </section>

     <section class="section section-lg pt-lg-0 mt--7">
       <div class="container">
         <div class="row justify-content-center">
           <div class="col-lg-12">
             <div class="row">
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-primary text-white rounded-circle mb-4">
                       <i class="ni ni-istanbul"></i>
                     </div>
                     <h4 class="h3 text-primary text-uppercase">Rumah Sakit</h4>
                     <p class="description mt-3">Daftar 100 Rumah Sakit Rujukan Penanganan Virus Corona</p>
                     <div>
                      Klik
                       <a href="https://news.detik.com/berita/d-4942353/daftar-rumah-sakit-rujukan-covid-19-seluruh-indonesia" class="btn btn-sm btn-success">Di Sini</a>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-success text-white rounded-circle mb-4">
                       <i class="ni ni-check-bold"></i>
                     </div>
                     <h4 class="h3 text-success text-uppercase">Apa Itu Virus Corona?</h4>
                     <p class="description mt-3">Apa Itu Virus Corona, yang Jadi Penyebab Penyakit Covid-19, MERS, dan SARS?</p>
                     <div>
                       Klik
                       <a href="https://www.kompas.com/tren/read/2020/03/17/153000465/apa-itu-virus-corona-yang-jadi-penyebab-penyakit-covid-19-mers-dan-sars?page=2" class="btn btn-sm btn-success">Di Sini</a>
                     </div>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="card card-lift--hover shadow border-0">
                   <div class="card-body py-5">
                     <div class="icon icon-shape bg-gradient-warning text-white rounded-circle mb-4">
                       <i class="ni ni-planet"></i>
                     </div>
                     <h4 class="h3 text-warning text-uppercase">Cara Cuci Tangan Yang Benar</h4>
                     <p class="description mt-3">Cara Cuci Tangan yang Benar untuk Cegah Virus Corona COVID-19.</p>
                     <div>
                        Klik
                       <a href="https://tirto.id/cara-cuci-tangan-yang-benar-untuk-cegah-virus-corona-covid-19-eCPj" class="btn btn-sm btn-success">Di Sini</a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6 order-md-2">
             <img src="{{asset('frontend/assets/img/theme/landing-1.png')}}" class="img-fluid">
           </div>
           <div class="col-md-6 order-md-1">
             <div class="pr-md-5">
               <h1>Tentang Website</h1>
               <p>Hai, website ini menggunakan sumber lain yaitu API untuk mendapatkan data secara terjadwal.

Website ini menggambil data dari beberapa url yang di jadikan rujukan untuk menampilkan data tanpa melakukan perubahan data jadi data ini valid dari sumber rujukan.

Dibawah ini ada list url yang kami jadikan rujukan untuk menampilkan data :

- Kawal Covid19

- Kawal Corona

Website ini sendiri dibuat menggunakan Laravel 7 dan Bootstrap 4</p>
               <ul class="list-unstyled mt-5">
                 <li class="py-2">
                   <div class="d-flex align-items-center">
                     <div>
                       <div class="badge badge-circle badge-success mr-3">
                         <i class="ni ni-settings-gear-65"></i>
                       </div>
                     </div>
                     <div>
                       <h4 class="mb-0">Carefully crafted components</h4>
                     </div>
                   </div>
                 </li>
                 <li class="py-2">
                   <div class="d-flex align-items-center">
                     <div>
                       <div class="badge badge-circle badge-success mr-3">
                         <i class="ni ni-html5"></i>
                       </div>
                     </div>
                     <div>
                       <h4 class="mb-0">Amazing page examples</h4>
                     </div>
                   </div>
                 </li>
                 <li class="py-2">
                   <div class="d-flex align-items-center">
                     <div>
                       <div class="badge badge-circle badge-success mr-3">
                         <i class="ni ni-satisfied"></i>
                       </div>
                     </div>
                     <div>
                       <h4 class="mb-0">Super friendly support team</h4>
                     </div>
                   </div>
                 </li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </section>
     <section class="py-6">
       <div class="container">
         <div class="row row-grid align-items-center">
           <div class="col-md-6">
           </div>
          
         </div>
       </div>
     </section>    
   </div>
   <!-- Footer -->
   <footer class="py-5" id="footer-main">
     <div class="container">
       <div class="row align-items-center justify-content-xl-between">
         <div class="col-xl-6">
           <div class="copyright text-center text-xl-left text-muted">
             &copy; 2020 <a href="javascript:void(0)" class="font-weight-bold ml-1" target="_blank">Feyto Frizky Dewangga</a>
           </div>
         </div>
         <div class="col-xl-6">
           <ul class="nav nav-footer justify-content-center justify-content-xl-end">
             <li class="nav-item">
               <a href="javascript:void(0)" class="nav-link" target="_blank">Feyto Dev</a>
             </li>
             <li class="nav-item">
               <a href="javascript:void(0)" class="nav-link" target="_blank">About Us</a>
             </li>
             <li class="nav-item">
               <a href="javascript:void(0)" class="nav-link" target="_blank">Blog</a>
             </li>
             <li class="nav-item">
               <a href="javascript:void(0)" class="nav-link" target="_blank">License</a>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </footer>
   <!-- Argon Scripts -->
   <!-- Core -->
   <script src="{{asset('frontend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
   <script src="{{asset('frontend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('frontend/assets/vendor/js-cookie/js.cookie.js')}}"></script>
   <script src="{{asset('frontend/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
   <script src="{{asset('frontend/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
   <!-- Optional JS -->
   <script src="{{asset('frontend/assets/vendor/onscreen/dist/on-screen.umd.min.js')}}"></script>
   <!-- Argon JS -->
   <script src="{{asset('frontend/assets/js/argon.min9f1e.js?v=1.1.0')}}"></script>
   <!-- Demo JS - remove this in your project -->
   <script src="{{asset('frontend/assets/js/demo.min.js')}}"></script>
   <script src="{{asset('/frontend/assets/vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.min9f1e.js?v=1.1.0"></script>
   <script>

     // Facebook Pixel Code Don't Delete
     ! function(f, b, e, v, n, t, s) {
       if (f.fbq) return;
       n = f.fbq = function() {
         n.callMethod ?
           n.callMethod.apply(n, arguments) : n.queue.push(arguments)
       };
       if (!f._fbq) f._fbq = n;
       n.push = n;
       n.loaded = !0;
       n.version = '2.0';
       n.queue = [];
       t = b.createElement(e);
       t.async = !0;
       t.src = v;
       s = b.getElementsByTagName(e)[0];
       s.parentNode.insertBefore(t, s)
     }(window,
       document, 'script', '../../connect.facebook.net/en_US/fbevents.js');

     try {
       fbq('init', '111649226022273');
       fbq('track', "PageView");

     } catch (err) {
       console.log('Facebook Track Error:', err);
     }
     $(document).ready(function () {
            $('#dataTable').DataTable({
                dom: 'lBfrtip',
                buttons: []
            });
        });
   </script>
   <noscript>
     <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
   </noscript>
 </body>

 </html>