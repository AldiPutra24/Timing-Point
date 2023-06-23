<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TimingPoing | {{ $title }}</title>
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/styledash.css')}}"/>
  </head>
  <body onload = "initClock()">
    <div class="container-1">
      @include('dashbroad.partial.sidebar')
      <div class="main-content">
        @include('dashbroad.partial.navbar')
        <div class="container-main-1" >
            @yield('container')
        </div>
      </div>
    </div>
    @include('partials.footer')
    <script src="{{ asset('js/scriptdash.js') }}"></script>
  </body>
</html>
