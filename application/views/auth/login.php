<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php endif; ?>
        <?= form_open('auth/login'); ?>
            <div class="form-group">
                <label for="identity">Username or Email</label>
                <input type="text" name="identity" id="identity" class="form-control" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        <?= form_close(); ?>
        <p><a href="<?= site_url('auth/forgot_password'); ?>">Forgot your password?</a></p>
    </div>
</body>
</html>