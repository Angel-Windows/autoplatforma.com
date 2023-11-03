<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="ajax-search" content="{{route('ajax.search')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Main</title>
</head>
<body id="body-page" class="dark:bg-gray-800">
<div class="wrapper flex min-h-[100vh] flex-col">

    <div id="iddddd"></div>
    <script>
        const ajax = document.querySelector('meta[name="ajax-search"]').getAttribute('content');
        iddddd.innerHTML = ajax + " <br /> " + "{{route('ajax.search')}}";
    </script>
    @include("layout.header")
    @yield("content")
    @include("layout.footer")
    @include("components.modals")
</div>
<script src="{{asset("js/ajax.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="js/sign-js.js"></script>

@yield("script")
</body>
</html>
