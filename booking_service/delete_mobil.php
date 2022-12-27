<?php

if (isset($_GET['id'])) {
    include 'connection.php';

    $query = "DELETE FROM mobil_tb WHERE no_id_kendaraan = '$_GET[id]'";

    $delete = mysqli_query($db_connection, $query);

    if ($delete) {
        echo '<p>mobil delete successfully ! </p>';
    } else {
        echo '<p>mobil delete failed ! </p>';
    }
} ?>
<p><a href="read_mobil.php">BACK TO mobil LIST</a></p>