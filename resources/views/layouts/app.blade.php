<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') </title>
        
        <link rel="stylesheet" href="{{asset('assets/homeswiper.css')}}">
        <link rel="stylesheet" href="{{asset('assets/navigation.css')}}">

       
    </head>
    
    <body class="overflow-hidden overflow-y-auto lg:!overflow-y-auto">
        @include('partials.nav')
            @yield('content')
        @include('partials.footer')
        <!-- appfootet -->
        <script src="{{asset('assets/navigation.js')}}"></script>
        <script src="{{asset('assets/homeswiper.js')}}"></script>
   

</body>

</html>
