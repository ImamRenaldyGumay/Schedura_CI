<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FinTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: #f5f6fa;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(44, 62, 80, 0.08);
            background: #fff;
            padding: 2.5rem 2rem;
            max-width: 420px;
            width: 100%;
        }

        .login-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .login-title span {
            color: #6c63ff;
        }

        .social-btn {
            background: #fff;
            border: none;
            box-shadow: 0 2px 8px rgba(44, 62, 80, 0.06);
            border-radius: 10px;
            padding: 0.75rem 1rem;
            margin-bottom: 1rem;
            width: 100%;
            display: flex;
            align-items: center;
            font-weight: 500;
            font-size: 1rem;
            transition: box-shadow 0.2s;
        }

        .social-btn:hover {
            box-shadow: 0 4px 16px rgba(44, 62, 80, 0.12);
        }

        .social-btn img {
            width: 24px;
            margin-right: 1rem;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            margin: 1.5rem 0 1.25rem 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e0e0e0;
        }

        .divider:not(:empty)::before {
            margin-right: .75em;
        }

        .divider:not(:empty)::after {
            margin-left: .75em;
        }

        .form-control,
        .form-check-input {
            border-radius: 10px;
            min-height: 48px;
        }

        .input-group-text {
            border-radius: 10px 0 0 10px;
        }

        .form-label {
            font-weight: 500;
        }

        .btn-login {
            background: #6c63ff;
            color: #fff;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1.1rem;
            min-height: 48px;
        }

        .btn-login:hover {
            background: #5548c8;
        }

        .forgot-link {
            color: #6c63ff;
            text-decoration: none;
            font-size: 0.98rem;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        .register-link {
            color: #6c63ff;
            text-decoration: none;
            font-weight: 500;
        }

        .register-link:hover {
            text-decoration: underline;
        }

        @media (min-width: 992px) {
            .login-container {
                padding: 0 5vw;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid login-container">
        <div class="row w-100 align-items-center justify-content-center">
            <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center">
                <img src="<?= base_url('asset/img/Illustration.svg') ?>" alt="Login Illustration" class="img-fluid"
                    style="max-width: 480px;">
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
                <div class="login-card">
                    <div class="text-center mb-4">
                        <div class="login-title">Welcome to <span>FinTrack</span></div>
                    </div>
                    <button class="social-btn mb-2"><img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg"
                            alt="Google">Login with Google</button>
                    <button class="social-btn"><img
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/facebook/facebook-original.svg"
                            alt="Facebook">Login with Facebook</button>
                    <div class="divider">OR</div>
                    <form method="post" action="<?php echo base_url('auth/login'); ?>">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="example@gmail.com" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group" id="show_hide_password">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                                <span class="input-group-text" style="cursor:pointer;" onclick="togglePassword()"><i
                                        class="fas fa-eye" id="toggleIcon"></i></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <a href="#" class="forgot-link">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-login w-100 mb-3">Login</button>
                    </form>
                    <div class="text-center">
                        <span>Don't have an account? <a href="<?php echo base_url('auth/register'); ?>"
                                class="register-link">Register</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            var passwordInput = document.getElementById('password');
            var toggleIcon = document.getElementById('toggleIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>

</html>