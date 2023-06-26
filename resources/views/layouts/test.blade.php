<html>

<body>
  	@include('layouts.theader')

  		@yield('content')

  	@include('layouts.footer')

  	@stack('js')
  </body>
</html>
