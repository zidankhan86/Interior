







<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ env('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
 {{-- CSS --}}
 @include('frontend.components.fixed.style')
  </head>
  <body>
    
	  {{-- CSS --}}
    @include('frontend.components.fixed.header')

    {{-- Content --}}
    @yield('content')

    
    {{-- Footer --}}
    @include('frontend.components.fixed.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  
    {{-- Js --}}
    @include('frontend.components.fixed.script')
    
  </body>
</html>