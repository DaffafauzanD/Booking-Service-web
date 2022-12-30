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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>
    <div class="form-container">
        <form method="post" action="login-config.php">
            <h3>login</h3>
            <input type="email" name="user_email" required placeholder="masukan email anda">
            <div class="input-field">
                <input type="password" name="user_password" required placeholder="masukan password anda">
                <i class="fa-solid fa-eye-slash show-hide"></i>
            </div>
            <input type="submit" name="login" value="Login" class="form-btn">
            <p>belum punya akun?<a href="register.php">buat sekarang</a> </p>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/63807ffb7d.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>