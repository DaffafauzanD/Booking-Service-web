<?php
if (isset($_POST['submit'])) {
    include 'connection.php';

    $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO user_tb (user_name, user_email, user_password, user_usertype) VALUES ('$_POST[user_name]', '$_POST[user_email]', '$password', '$_POST[user_usertype]')";

    $create = mysqli_query($db_connection, $query);

    if ($create) {
        echo "<script> alert('users added succesfully !'); </script>";
    } else {
        echo "<script> alert('users add failed !'); </script>";
    }
} ?>

<script>
window.location.replace("login.php");
</script>