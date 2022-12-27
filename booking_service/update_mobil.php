<?php

if (isset($_POST['save'])) {
    include 'connection.php';

    $query = "UPDATE mobil_tb SET
              mobil_type = '$_POST[mobil_type]',
              mobil_no_plat = '$_POST[mobil_no_plat]',
              mobil_komplain = '$_POST[mobil_komplain]',
              mobil_owner = '$_POST[mobil_owner]',
              mobil_address = '$_POST[mobil_address]',
              mobil_phone = '$_POST[mobil_phone]',
              mobil_booking_tgl = '$_POST[mobil_booking_tgl]',
              mobil_booking_tgl = '$_POST[mobil_booking_wkt]'
              WHERE no_id_kendaraan = '$_POST[no_id_kendaraan]';
              ";

    $update = mysqli_query($db_connection, $query);

    if ($update) {
        echo '<p>mobil update successfully ! </p>';
    } else {
        echo '<p>mobil update failed ! </p>';
    }
} ?>
<p><a href="read_mobil.php">BACK TO mobil LIST</a></p>