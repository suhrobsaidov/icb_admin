<html>

<body>
  	@include('layouts.header')
 
  		@yield('content')
 
  	@include('layouts.remmitancefooter')
 
  	@stack('js')
  </body>
</html>