<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ecommerce Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 30px;
            border-radius: 12px;
            background: #ffffff;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .brand-title {
            font-weight: 700;
            font-size: 22px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn-primary {
            border-radius: 8px;
            padding: 10px;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: gray;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="brand-title">
        🛒 Ecommerce Login
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    {{-- Error Message --}}
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email Address</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control"
                placeholder="Enter your email"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Enter your password"
                required
            >
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">
                Login & Go To Foodpanda 🚀
            </button>
        </div>
    </form>

    <div class="footer-text">
        Multi Login System - SSO Demo
    </div>
</div>

</body>
</html>
