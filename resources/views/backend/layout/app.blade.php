<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Lomeyo Templeting</title>
            {{-- CSS --}}
            @include('backend.components.fixed.style')
           
            
  </head>
  <body >
    <script src="{{asset ('./dist/js/demo-theme.min.js?1684106062') }}"></script>
         <div class="page">

        {{-- Sidebar --}}
        @include('backend.components.fixed.sidebar')

        <div class="page-wrapper">

        {{-- Header --}}
        @include('backend.components.fixed.header')

               @yield('content')

         {{-- Footer --}}
         @include('backend.components.fixed.footer')

        </div>
        </div>

        {{-- Js --}}
        @include('backend.components.fixed.script')

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


  </body>
</html>
