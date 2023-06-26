<html>

<body>
@include('layouts.theader')

@yield('content')

@include('layouts.tfooter')

@stack('js')
</body>
</html>
