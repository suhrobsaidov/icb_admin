<html>

<body>
  	@include('layouts.header')
 
  		@yield('content')
 
  	@include('layouts.footer')
 
  	@stack('js')
  </body>
</html>