<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href=<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <title>@yield('title-block')</title>
</head>
<body>
    @include('layouts.inc.header')

    @if(Request::is('/'))
    @include('layouts.inc.hero')
    @endif

    <div class="container mt-5" >
        <div class="row">
            <div class="col-8">
    @yield('content')
            </div>
            <div class="col-4">
    @include('layouts.inc.aside')
            </div>
        </div>
    </div>

    @include('layouts.inc.footer')
</body>
</html>
