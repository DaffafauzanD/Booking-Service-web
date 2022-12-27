<?php

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