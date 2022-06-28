<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>APROCEL</title>
    <link rel="shortcut icon" href="{{asset("/images/logo1.jpg")}}" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset("images/fav.jpg")}}" />
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset("css/all.min.css")}}" />
    <link rel="stylesheet" href="{{asset("css/animate.css")}}" />
    <link rel="stylesheet" href="{{asset("plugins/slider/css/owl.carousel.min.css")}}" />
    <link rel="stylesheet" href="{{asset("plugins/slider/css/owl.theme.default.css")}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset("css/style.css")}}" />
    <link rel="stylesheet" type="text/css" href="{{asset("css/career.css")}}" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css")rel="stylesheet" id="bootstrap-css">
    
    {{-- live wire --}}
    @livewireStyles
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
@include('partials.nav')
@yield('content')
@include('partials.footer')
{{-- livewire scripts --}}

@livewireScripts
</body>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="plugins/slider/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="js/script.js"></script>
</html>