<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- Styles -->
    <link href="{{ asset('admin/css/material-dashboard.css')}}" rel="stylesheet">
    
  
    <!-- CSS Files -->
   <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/light-bootstrap-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('admin/css/demo.css')}}" rel="stylesheet" />
   
</head>
<body class="g-sidenav-show  bg-gray-200">
    <div class="wrapper">
       
        @include('layouts.inc.sidebar')
         

        <div class="main-panel">
          @include('layouts.inc.adminnav')
         <div class="content">
             @yield('content')
         </div>  
         @include('layouts.inc.adminfooter')
        </div>
    </div>
   


        <!--   Core JS Files   -->
<script src="{{ asset('admin/js/jquery.3.2.1.min.js') }} " type="text/javascript" defer></script>
<script src="{{ asset('admin/js/popper.min.js') }}" type="text/javascript" defer></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}" type="text/javascript" defer></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('admin/js/bootstrap-switch.js') }}" defer></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE" ></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('admin/js/chartist.min.js') }}" defer></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('admin/js/bootstrap-notify.js') }}" defer></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ asset('admin/js/light-bootstrap-dashboard.js?v=2.0.0') }}" type="text/javascript" defer></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('admin/js/demo.js') }}" defer></script>
  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
<script>
    swal("{{session('status')}}");
    </script>
@endif
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>
    @yield('scripts')

    
    <!-- <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script> -->
</body>
</html>
