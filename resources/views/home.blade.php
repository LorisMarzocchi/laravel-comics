<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

    <title>Laravel</title>

    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    @include('partials.main')
    @include('partials.footer')


        {{-- <h1 class="text-center">Ciao da vite</h1> --}}
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
















    </body>
</html>
