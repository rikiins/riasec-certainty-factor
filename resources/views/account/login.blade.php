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
    <div class="login-bg-wrapper">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
        
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="{{ asset('assets/img/ai.svg') }}">
                    </div>
        
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 p-4 rounded" style="background-color: #f9f4f4;">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/img/diagram-stats.png') }}" alt="" width="70">
                        </div>

                        <h4 class="text-center py-4">Login Sistem Pakar Kepribadian</h4>
        
                        <form action="{{ route('auth') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                @if ($errors->first('username'))
                                    <strong class="text-danger">{{ $errors->first('username') }}</strong>
                                @endif
                                <input type="text" name="username" value="{{ old('username') }}" id="username" class="form-control form-control-lg" autofocus required>
                                <label class="form-label" for="username">Username</label>
                                <p id="username-msg" class="text-danger"></p>
                            </div>
        
                            <div class="mb-4">
                                @if ($errors->first('password'))
                                    <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                @endif
                                <input type="Password" name="password" id="password" class="form-control form-control-lg" required>
                                <label class="form-label" for="password">Password</label>
                                <p id="password-msg" class="text-danger"></p>
                            </div>
        
                            <div class="col d-flex mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember-me">
                                    <label class="form-check-label" for="remember-me"> Remember me </label>
                                </div>
                            </div>
        
                            @if ($errors->first('message'))
                                <div class="col d-flex mb-4">
                                    <strong class="text-danger">{{ $errors->first('message') }}</strong>
                                </div>
                            @endif
                            <div class="col-12">
                                <button type="submit" style="width: 100%;" class="btn btn-outline-primary btn-lg">
                                    <i class="bi bi-box-arrow-in-right"></i> Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>    
</body>
</html>
