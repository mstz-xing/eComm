<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('admin/css/material-dashboard.css')}}" rel="stylesheet">
    
    
  
    <!-- CSS Files -->
   <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{asset('fronted/css/custom.css')}}" rel="stylesheet" />
  
    <link href="{{asset('fronted/css/bootstrap5.css')}}" rel="stylesheet" />

    <link href="{{asset('fronted/css/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('fronted/css/owl.theme.default.min.css')}}" rel="stylesheet" />

    <style>
        a{
            text-decoration : none !important;
            
        }

     </style>   
</head>
<body>
    @include('layouts.inc.frontnavbar')
   
         <div class="content">
             @yield('content')
         </div>  
        
         <footer class="footer">
                <div class="container-fluid">
                    <nav>
                     
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="#">MinShwe ThaZin</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>


        <!--   Core JS Files   -->
<script src="{{ asset('fronted/js/boostrap.bundle.min.js') }} " type="text/javascript" defer></script>
<script src="{{ asset('fronted/js/owl.carousel.min.js') }}" type="text/javascript" defer></script>
<script src="{{ asset('fronted/js/jquery-3.6.3.min.js') }}" type="text/javascript" defer></script>
<script src="{{ asset('fronted/js/custom.js') }}" type="text/javascript" defer></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session('status'))
<script>
    swal("{{session('status')}}");
    </script>
@endif

    @yield('scripts')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

</body>
</html>
