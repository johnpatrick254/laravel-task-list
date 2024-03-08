<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
    @yield('styles')
</head>
<body>
    @if (session()->has('success'))
    <div>{{session('success')}}</div>
    @endif
    <h1>@yield('title')</h1>
    <div>
        @yield('content')
    </div>
    @yield('script')
</body>
</html>