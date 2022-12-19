<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link rel="stylesheet" href="../assets/css/log-style.css">
</head>
<body>
    <div class="container">
        <h3>Login Jika Anda Sudah Punya Akun</h3>
        <form action="<?= site_url('auth/login_user') ?>" method="post">
            <label for="username">Username :</label><br>
            <input type="text" name="username">
            <br>
            <label for="password">Password :</label><br>
            <input type="password" name="password">
            <br>
            <input type="submit" value="Login" name="btn_login" class="btn">
        </form>
        <hr>
        <a href="<?= site_url('auth/registrasi_user') ?>" class="btn_regis">Registrasi</a>
    </div>
</body>
</html>