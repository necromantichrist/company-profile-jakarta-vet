<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Jakarta Top Dogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/admin.css')
</head>

<body class="login-page">

<div class="login-container">
    <div class="login-card">
        
        <div class="login-brand">
            <span></span>Admin Login
        </div>
        
        @if (session('status'))
            <div class="alert alert-success small py-2" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email" class="form-label-custom">Alamat Email</label>
                <input id="email" type="email" name="email" class="form-control-custom @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                    <div class="invalid-feedback-custom">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <label for="password" class="form-label-custom">Password</label>
                    @if (Route::has('password.request'))
                        <a class="forgot-password-link" href="{{ route('password.request') }}">
                            Lupa password?
                        </a>
                    @endif
                </div>
                <input id="password" type="password" name="password" class="form-control-custom @error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                    <div class="invalid-feedback-custom">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check mb-4 mt-2">
                <input id="remember_me" type="checkbox" name="remember" class="form-check-input-custom">
                <label for="remember_me" class="form-check-label-custom">Ingat saya di perangkat ini</label>
            </div>

            <button type="submit" class="btn-login-submit">
                Masuk ke Dashboard
            </button>
        </form>

    </div>
</div>

</body>