<?php
session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert ('Please login first !');window.location.replace('form_login_0014.php');</script>";
}
if ($_SESSION['usertype'] != 'admin') {
    echo "<script>alert ('Access Forbiden !');window.location.replace('index.php');</script>";
    header('location:home.php');
}
if (isset($_GET['id'])) {
    include 'connection.php';

    $query = "DELETE FROM mobil_tb WHERE no_id_kendaraan = '$_GET[id]'";

    $delete = mysqli_query($db_connection, $query);

    if ($delete) {
        header('location:read_mobil.php');
        echo '<p>mobil delete successfully ! </p>';
    } else {
        echo '<p>mobil delete failed ! </p>';
    }
} ?>