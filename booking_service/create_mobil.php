<?php

if (isset($_POST['save'])) {
    include 'connection.php';
    $type = $_POST['mobil_type'];
    $noplat = $_POST['mobil_no_plat'];
    $komplain = $_POST['mobil_komplain'];
    $owner = $_POST['mobil_owner'];
    $address = $_POST['mobil_address'];
    $phone = $_POST['mobil_phone'];
    $booking = $_POST['mobil_booking_tgl'];
    $bookingwkt = $_POST['mobil_booking_wkt'];

    $query = "INSERT INTO mobil_tb SET mobil_type='$type', mobil_no_plat='$noplat', mobil_komplain='$komplain', mobil_owner='$owner', mobil_address='$address', mobil_phone='$phone', mobil_booking_tgl='$booking', mobil_booking_wkt='$bookingwkt'";

    $create = mysqli_query($db_connection, $query);

    if ($create) {
        echo '<p>mobil added successfully ! </p>';
    } else {
        echo '<p>mobil add failed ! </p>';
    }
} ?>
<p><a href="add_mobil.php">BACK TO mobilS LIST</a></p>