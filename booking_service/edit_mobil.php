<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.Onder Jaya</title>
</head>

<body>
    <h1>PT.Onder Jaya</h1>
    <h3>Form edit mobil</h3>
    <?php
    include 'connection.php';
    $query = "SELECT * FROM mobil_tb WHERE no_id_kendaraan='$_GET[id]'";
    $mobils = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($mobils);
    ?>
    <form method="post" action="update_mobil.php">
        <table>
            <tr>
                <td>tipe mobil</td>
                <td><input type="text" name="mobil_type" value="<?= $data[
                    'mobil_type'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>no plat mobil</td>
                <td><input type="text" name="mobil_no_plat" value="<?= $data[
                    'mobil_no_plat'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>keluhan mobil</td>
                <td><input type="text" name="mobil_komplain" value="<?= $data[
                    'mobil_komplain'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>nama owner</td>
                <td><input type="text" name="mobil_owner" value="<?= $data[
                    'mobil_owner'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>address</td>
                <td><input type="textarea" name="mobil_address" value="<?= $data[
                    'mobil_address'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="mobil_phone" value="<?= $data[
                    'mobil_phone'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>tgl booking</td>
                <td><input type="date" name="mobil_booking_tgl" value="<?= $data[
                    'mobil_booking_tgl'
                ] ?>" require></td>
            </tr>
            <tr>
                <td>tgl booking</td>
                <td><input type="date" name="mobil_booking_wkt" value="<?= $data[
                    'mobil_booking_wkt'
                ] ?>" require></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="save" require>
                    <input type="reset" name="reset" value="reset" require>
                    <input type="hidden" name="no_id_kendaraan" value="<?= $data[
                        'no_id_kendaraan'
                    ] ?>" require>
                </td>
            </tr>
        </table>
        <p><a href="read_mobil.php">CANCEL</a></p>
    </form>
</body>

</html>