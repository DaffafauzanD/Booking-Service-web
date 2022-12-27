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
    <section class="booking">
        <h1>Form service mobil</h1>
        <form method="post" action="create_mobil.php">
            <div class="flex">
                <div class="inputD" style="overflow-x:auto;">
                    <div>
                        <label>Tipe mobil</label>
                        <input type="text" name="mobil_type" require>
                    </div>

                    <div>
                        <label>No plat mobil</label>

                        <input type="text" name="mobil_no_plat" placeholder="B 1234 TES" required>
                    </div>

                    <div>
                        <label>layanan servis</label>
                        <input type="text" name="mobil_komplain" require>
                    </div>
                    <div>
                        <label>nama owner</label>

                        <input type="text" name="mobil_owner" require>
                    </div>

                    <div>
                        <label>Address</label>
                        <textarea name="mobil_address" class="textarea"></textarea>
                    </div>
                    <div>
                        <label>Phone</label>
                        <input type="number" name="mobil_phone" require>
                    </div>
                    <div>
                        <label>tgl booking</label>
                        <input type="date" name="mobil_booking_tgl" require>
                    </div>
                    <div>
                        <label>jam booking</label>
                        <input type="time" name="mobil_booking_wkt" require>
                    </div>

                    <input type="submit" name="save" value="save" require>
                    <input type="reset" name="reset" value="reset" require>

                    <p><a href="read_mobil.php">CANCEL</a></p>

                </div>
            </div>
        </form>
    </section>
</body>

</html>