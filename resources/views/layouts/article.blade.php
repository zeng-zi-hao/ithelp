<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('http://localhost/ithelp/public/css/app.css') }}">
    <title>IT HELP!!</title>
</head>
<body>
<main class="m-4">
    @if(session()->has('notice'))
        <div class="bg-pink-300 px-3 py-2 rounded">
            {{session()->get('notice')}}
        </div>
    @endif
    @yield('main')
</main>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
