<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | TodoList</title>
    <!-- AdminLTE local CSS -->
    <link rel="stylesheet" href="<?= base_url('asset') ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url('asset') ?>/plugins/fontawesome-free/css/all.min.css">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .split-container {
            display: flex;
            min-height: 100vh;
        }

        .register-left {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
        }

        .register-form-box {
            width: 100%;
            max-width: 400px;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0, 0, 0, 0.07);
            background: #fff;
        }

        .register-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .register-subtitle {
            color: #888;
            margin-bottom: 32px;
        }

        .input-group .form-control {
            border-radius: 8px;
            border: 1px solid #d1d5db;
            padding: 18px 16px;
            font-size: 1rem;
        }

        .input-group-text {
            background: none;
            border: none;
        }

        .btn-primary {
            background: #3973f7;
            border-radius: 8px;
            font-size: 1.1rem;
            padding: 12px 0;
            font-weight: 600;
            border: none;
            margin-top: 12px;
        }

        .register-or {
            text-align: center;
            margin: 24px 0 16px 0;
            color: #aaa;
            font-size: 0.95rem;
        }

        .social-btns {
            display: flex;
            gap: 16px;
            justify-content: center;
            margin-bottom: 16px;
        }

        .social-btns button {
            flex: 1;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            background: #fff;
            padding: 10px 0;
            font-size: 1.2rem;
            transition: box-shadow 0.2s;
        }

        .social-btns button:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.07);
        }

        .register-link {
            text-align: left;
            margin-top: 24px;
            font-size: 0.98rem;
        }

        .register-link a {
            color: #3973f7;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        .register-right {
            flex: 1;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=800&q=80') center center/cover no-repeat;
            min-height: 100vh;
        }

        @media (max-width: 900px) {
            .split-container {
                flex-direction: column;
            }

            .register-right {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="split-container">
        <div class="register-left">
            <div class="register-form-box">
                <div class="text-center mb-4">
                    <img src="public/admin-lte/img/AdminLTELogo.png" alt="Logo" style="height:40px;">
                </div>
                <div class="register-title">Sign Up to TodoList</div>
                <div class="register-subtitle">Start your journey</div>
                <form action="#" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" name="name" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                        <div class="input-group-append">
                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
                <div class="register-or">or sign up with</div>
                <div class="social-btns mb-2">
                    <button type="button"><i class="fab fa-facebook-f"></i></button>
                    <button type="button"><i class="fab fa-google"></i></button>
                    <button type="button"><i class="fab fa-apple"></i></button>
                </div>
                <div class="register-link">
                    Have an account? <a href="<?= base_url('Login') ?>">Sign in</a>
                </div>
            </div>
        </div>
        <div class="register-right"></div>
    </div>
    <!-- AdminLTE local JS -->
    <script src="<?= base_url('asset') ?>/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('asset') ?>/js/adminlte.min.js"></script>
</body>

</html>