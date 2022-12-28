<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register tb</title>
    <style>
    <?php include 'css/style-login.css';
    ?>
    </style>
</head>

<body>
    <div class="form-container">
        <form method="post" action="login-config.php">
            <h3>login</h3>
            <input type="email" name="user_email" required placeholder="masukan email anda">
            <input type="password" name="user_password" required placeholder="masukan password anda">
            <input type="submit" name="login" value="Login" class="form-btn">
            <p>belum punya akun?<a href="register.php">buat sekarang</a> </p>
        </form>
    </div>
</body>

</html>