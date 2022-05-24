<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <title>DC Comics </title>
    {{-- @yeld('title') --}}
</head>
<body>

    {{-- header --}}
    @include('partials.header')

    {{-- main --}}
    <main>

        @yield('content')

    </main>

</body>
</html>
