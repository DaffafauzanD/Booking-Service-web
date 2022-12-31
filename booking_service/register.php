<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <style>
    <?php include 'css/style-login.css';
    ?>
    </style>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />


</head>

<body>
    <div class="form-container">
        <form method="post" action="register-config.php" name="myform">
            <h3>register</h3>
            <input type="text" name="user_name" required placeholder="masukan nama anda">
            <input type="email" name="user_email" required placeholder="masukan email anda" class="email">
            <div class="input-field">
                <input type="password" name="user_password" required placeholder="masukan password anda"
                    class="password">
                <i class="fa-solid fa-eye-slash show-hide"></i>
            </div>
            <div class="input-field">
                <input type="password" name="cuser_password" required placeholder="konfirmasi password anda"
                    class="cPassword">
                <i class="fa-solid fa-eye-slash show-hide" onclick="show()"></i>
            </div>
            <select name="user_usertype" onclick="adminu()" id="user-type">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="password" name="validation_admin" class="v-password" placeholder="password admin">
            <input type="submit" name="submit" value="register" class="form-btn">
            <p>sudah punya akun?<a href="login.php">login now</a> </p>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/63807ffb7d.js" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>