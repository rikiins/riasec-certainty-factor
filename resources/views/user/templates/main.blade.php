<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>{{ $site }} | Sistem Pakar Kepribadian</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
	@include('user.templates.partials.navbar')
    @yield('content')
    
	@include('user.templates.partials.footer')
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
	@yield('script')
</body>
</html>
