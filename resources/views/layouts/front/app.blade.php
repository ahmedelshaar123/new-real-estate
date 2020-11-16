<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> شركة عقارية</title>
    <link rel="icon" href="{{asset('front/dist/img/favicon.ico')}}" sizes="16x16">
    <link rel="stylesheet" href="{{asset('front/dist/css/jsRapStar.css')}}" />
    <link rel="stylesheet" href="{{asset('front/dist/css/main.css')}}">
    @stack('styles')
</head>

<body class="rtl" dir='rtl'>

<!-- <body> -->
@include('layouts.front.header')
@yield('content')
@include('layouts.front.footer')

    <script src="{{asset('front/dist/js/jquery.min.js ')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBt5tJTim4lOO3ojbGARhPd1Z3O3CnE-C8" type="text/javascript"></script>

    <script src="{{asset('front/dist/js/popper.min.js ')}}"></script>

    <script src="{{asset('front/dist/js/bootstrap.min.js ')}}"></script>
    <script src="{{asset('front/dist/js/owl.carousel.min.js ')}}"></script>
    <script src="{{asset('front/dist/js/lightgallery.js')}}"></script>
    <script src="{{asset('front/dist/js/main.js ')}}"></script>
    <script>
        $("#lightgallery").lightGallery({
            selector: '.item'
        });
    </script>
    <script>
        $(document).ready(function() {
            if ($('.wheel-map ').length) {
                $('.wheel-map ').each(function() {
                    initialize(this);
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    @if(session()->has('success'))
        <script>
            // setTimeout(function(){
            //     $("div.alert").remove();
            // }, 2000 ); // 2 secs
            Swal.fire({
                title: '{{session()->get('success')}}',
                imageUrl: "{{asset('front/dist/img/logo.png')}}",
            });
             // location.reload();
        </script>
    @endif
    @stack('scripts')

    <!-- </body> -->
</body>
</html>
