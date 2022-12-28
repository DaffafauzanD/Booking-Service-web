<?php
session_start();
if (isset($_POST['login'])) {
    include 'connection.php';

    $query = "SELECT * FROM user_tb WHERE user_email='$_POST[user_email]'";
    $login = mysqli_query($db_connection, $query);

    if (mysqli_num_rows($login) > 0) {
        $user = mysqli_fetch_assoc($login);
        if (password_verify($_POST['user_password'], $user['user_password'])) {
            $_SESSION['login'] = true;
            $_SESSION['userid'] = $user['userid'];
            $_SESSION['username'] = $user['user_name'];
            $_SESSION['useremail'] = $user['user_email'];
            $_SESSION['password'] = $user['user_password'];
            $_SESSION['usertype'] = $user['user_usertype'];
            echo "<script>window.location.replace('home.php');</script>";
        } else {
            echo "<script>alert('Login failed, wrong password !');window.location.replace('login.php');</script>";
        }
    } else {
        echo "<script>alert('login failed, user not found !');window.location.replace('login.php');</script>";
    }
}
?>