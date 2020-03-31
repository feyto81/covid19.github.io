              @section('title','Covid-19 By Feyto')
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                <nav id="navbar-main" class="navbar navbar-sticky navbar-horizontal navbar-main navbar-expand-lg navbar-light bg-white ">
     <div class="container">
       <a class="navbar-brand" href="">
         <img src="{{asset('frontend/assets/img/logo.png')}}" width="80px" height="50px">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
         <div class="navbar-collapse-header">
           <div class="row">
             <div class="col-6 collapse-brand">
               
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
   <div class="main-content">
    
     <!-- Header -->
     <div class="header bg-primary pt-5 pb-7">
       <div class="container">
         <div class="header-body">
           <div class="row align-items-center">
             <div class="col-lg-6">
               <div class="pr-5">
                 <h1 class="display-2 text-white font-weight-bold mb-0">Chart</h1>
                 <h2 class="display-4 text-white font-weight-light"></h2>
                 <p class="text-white mt-4">Hai, website ini menggunakan sumber lain yaitu API KawalCorona untuk mendapatkan data secara terjadwal.

                  Website ini menggambil data dari beberapa url yang di jadikan rujukan untuk menampilkan data tanpa melakukan perubahan data jadi data ini valid dari sumber rujukan.

                  Dibawah ini ada list url yang kami jadikan rujukan untuk menampilkan data :

                  - Kawal Covid19

                  - Kawal Corona

                  Website ini sendiri dibuat menggunakan Laravel 7 dan Bootstrap 4</p>
                 <div class="mt-5">
                   
                 </div>
               </div>
             </div>
             <div class="col-lg-6">
               <div class="row pt-5">
                 <div class="col-md-6">

                 </div>
                 <div class="col-md-6 pt-lg-5 pt-4">
                   <div class="card mb-4">

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
         

          </div>
        </div>
      </div>
       <div class="row justify-content-center text-center">
         <div class="col-md-6">
           <h2 class="display-3 text-white">My Profile</h3>
             <p class="lead text-white">
              
             </p>
         </div>
       </div>
       
      <!-- Table -->
      

    </div>
    <h1 style="text-align: center;">Peta Sebaran Covid-19 di Indonesia</h1>
    {!! $chart->container() !!}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    {!! $chart->script() !!}	

                

                	
                
</div>
