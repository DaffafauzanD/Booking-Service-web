<?php
if (isset($_POST['save'])) {
    include 'connection.php';

    $query = "INSERT INTO data_tb SET
              no_id_kendaraan       = '$_POST[id_mobil]',
              no_id_user    = '$_POST[id_user]',
              data_mobil_type      = '$_POST[data_mobil_type]',
              data_mobil_komplain     = '$_POST[data_mobil_komplain]',
              data_service    = '$_POST[data_service]',
              data_cost         = '$_POST[data_cost]'";

    $create = mysqli_query($db_connection, $query);

    if ($create) {
        echo "<script> alert('medical added successfully!'); </script>";
    } else {
        echo "<script> alert('medical added failed!'); </script>";
    }
} ?>
<script>
window.location.replace("data_mobil.php?id_mobil=<?= $_POST[
    'id_mobil'
] ?>");</script>