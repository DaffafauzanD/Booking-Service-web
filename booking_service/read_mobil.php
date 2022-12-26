<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT.Onder Jaya</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="navbar">
        <div>
            <h1>PT.Onder Jaya</h1>
        </div>
        <div>
            <h1>Service List</h1>
        </div>
    </div>
    <div class="background-body">
        <div class="text">
            <ul>
                <li>
                    <a href="add_mobil.php">add service mobil</a>
                </li>
                <li>
                    <a href="home.php">BACK TO THE MENU</a>
                </li>
            </ul>
        </div>
        <div>
            <table border="1">
                <tr>
                    <th>no</th>
                    <th>tipe mobil</th>
                    <th>no plat</th>
                    <th>keluhan</th>
                    <th>owner</th>
                    <th>address</th>
                    <th>phone</th>
                    <th>tanggal booking</th>
                    <th colspan="2">action</th>
                </tr>
                <?php
                include 'connection.php';
                $query = 'SELECT * FROM mobil_tb';
                $mobils = mysqli_query($db_connection, $query);

                $i = 1;
                foreach ($mobils as $data): ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $data['mobil_type']; ?></td>
                    <td><?php echo $data['mobil_no_plat']; ?></td>
                    <td><?php echo $data['mobil_komplain']; ?></td>
                    <td><?php echo $data['mobil_owner']; ?></td>
                    <td><?php echo $data['mobil_address']; ?></td>
                    <td><?php echo $data['mobil_phone']; ?></td>
                    <td><?php echo $data['mobil_booking_tgl']; ?></td>
                    <td><a href="edit_mobil.php?id=<?= $data[
                        'no_id_kendaraan'
                    ] ?>">Edit mobil</a></td>
                    <td><a href="delete_mobil.php?id=<?= $data[
                        'no_id_kendaraan'
                    ] ?>" onclick="return confirm('are you sure?')">delete pet</a></td>
                </tr>
                <?php endforeach;
                ?>
            </table>
        </div>
    </div>

</body>

</html>