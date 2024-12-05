<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Reset Password</title>
    <style>
        .login-form {
            background-color: #f8f9fa;
            padding: 50px 0;
        }
        .card {
            border-radius: 15px; /* Increase roundness */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Softer shadow */
            border: none; /* Remove default border */
        }
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-color: #007bff; /* Header background */
            color: white; /* Header text color */
            text-align: center; /* Center align header text */
            padding: 15px; /* Add padding */
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            transition: background-color 0.3s, border-color 0.3s, transform 0.2s; /* Added transform */
            font-weight: bold; /* Make button text bold */
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }
        .alert {
            border-radius: 5px;
            margin-bottom: 20px;
            transition: opacity 0.5s; /* Fade in/out effect */
        }
    </style>
</head>
<body>
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-header">Reset Password</div>
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success text-center" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            <form action="{{ route('reset.password.post') }}" method="POST" id="resetPasswordForm">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="form-group row mb-3">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required>
                                        @if ($errors->has('password_confirmation'))
                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Reset Password</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.getElementById('resetPasswordForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const passwordConfirm = document.getElementById('password-confirm').value;

            // Check if passwords match
            if (password !== passwordConfirm) {
                e.preventDefault(); // Prevent form submission
                alert('Passwords do not match. Please try again.'); // Alert user
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
