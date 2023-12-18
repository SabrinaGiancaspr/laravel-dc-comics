<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','dc comics')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

  <header>
    <div class="container py-1">
      <div class="row">
        <div class="col-auto me-auto">
          Comics
        </div>
        <nav class="col-auto">
          <div class="d-flex gap-2">
              <a href="{{route('comics.index')}}">Home</a>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <main class="bg-light">
    @yield('content')
  </main>

</body>

</html>