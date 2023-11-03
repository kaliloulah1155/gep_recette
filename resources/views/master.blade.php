<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>GEP UTA - @yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{ asset('assets_front/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/responsive.css') }}" />
      <!-- color css  <link rel="stylesheet" href="{{ asset('assets_front/css/colors.css') }}" />-->
     
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets_front/css/custom.css') }}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
           @include('layouts.sidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
              @include('layouts.navbar')
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2> <!-- title content-->
                    @yield('title_content')
                     <!-- end title content--></h2>
                           </div>
                        </div>
                     </div>
                    <!--content-->
                    @yield('content')
                     <!-- end content-->
                  </div>
                  <!-- footer -->
                 @include('layouts.footer')
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{ asset('assets_front/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets_front/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets_front/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('assets_front/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('assets_front/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('assets_front/js/owl.carousel.js') }}"></script> 
       <!-- calendar js -->
       <script src="{{ asset('assets_front/js/calendar.min.js') }}"></script>
      <!-- chart js -->
      <script src="{{ asset('assets_front/js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets_front/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('assets_front/js/utils.js') }}"></script>
      <script src="{{ asset('assets_front/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('assets_front/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('assets_front/js/custom.js') }}"></script>
      @yield('script_js')
   </body>
</html>
