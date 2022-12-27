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
    </div>
    <div class="container">
        <div class="inputD" style="overflow-x:auto;">
            <form method="post" action="create_mobil.php">
                <table>
                    <tr>
                        <td>
                            <h1>Form service mobil</h1>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tipe mobil</b></td>
                        <td><input type="text" name="mobil_type" require></td>
                    </tr>
                    <tr>
                        <td><b>No plat mobil</td>
                        <td>
                            <input type="text" name="mobil_no_plat" required>
                        </td>
                    </tr>
                    <tr>
                        <td><b>keluhan mobil</b></td>
                        <td><input type="text" name="mobil_komplain" require></td>
                    </tr>
                    <tr>
                        <td><b>nama owner</td>
                        <td>
                            <input type="text" name="mobil_owner" require>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Address</td>
                        <td><textarea name="mobil_address" class="textarea"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Phone</td>
                        <td><input type="number" name="mobil_phone" require></td>
                    </tr>
                    <tr>
                        <td><b>tgl booking</td>
                        <td><input type="date" name="mobil_booking_tgl" require></td>
                    </tr>
                    <tr>
                        <td><b>jam booking</td>
                        <td><input type="time" name="mobil_booking_wkt" require></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" name="save" value="save" require>
                            <input type="reset" name="reset" value="reset" require>
                        </td>
                    </tr>
                </table>
                <p><a href="read_mobil.php">CANCEL</a></p>
            </form>
        </div>
    </div>
</body>

</html>