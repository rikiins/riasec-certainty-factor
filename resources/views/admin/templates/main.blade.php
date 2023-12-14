<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>{{ $site }} | Sistem Pakar Kepribadian</title>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
	@include('admin.templates.partials.navbar')
	@include('admin.templates.partials.sidebar')
    
	@include('admin.templates.partials.footer')
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
	@yield('script')
</body>
</html>
