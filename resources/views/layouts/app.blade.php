<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <title>Tasks</title>
  @yield('styles')
</head>

<body class="container mx-auto my-10 max-w-lg">
  <div class="">
    @if (session()->has('success'))
    <div class="w-max py-3 relative  px-4 bg-green-400 my-1.5 rounded-sm" x-data="{flash:true}" x-show="flash">   
        <p class="text-lg absolute top-1.5 right-4 hover:cursor-pointer" @click="flash=false">x</p>
        <strong>Success!</strong>
        <p>
          {{session('success')}}
        </p>
    </div>
    @endif
    <h1 class="text-lg font-bold mb-5">@yield('title')</h1>
    <div>
      @yield('content')
    </div>
    @yield('script')
  </div>

</body>

</html>