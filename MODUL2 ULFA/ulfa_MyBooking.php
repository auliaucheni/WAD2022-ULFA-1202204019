<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>MY BOOKING | Ulfa_1202204019</title>
</head>

<body><?php
        $name = "ULFA_1202204019";

        $listmobil = [
            [
                "mobil" => "Toyota Rush",
                "harga" => 200000
            ],
            [
                "mobil" => "Toyota Ayla",
                "harga" => 150000
            ],
            [
                "mobil" => "Honda Brio",
                "harga" => 150000
            ],
        ];

        $book = $_POST["booking"] . " " . $_POST["waktu"];
        $startbook = date("d-m-Y H:i:s", strtotime($book));
        $endbook = date("d-m-Y H:i:s", (strtotime($book) + 60 * 60 * 24 * $_POST["day"]));
        $jenismobil = $_POST["mobil"];
        $phone = $_POST["phone"];

        $serprice = 0;
        if (isset($_POST["ser"])) {
            foreach ($_POST["ser"] as $ser) {
                if ($ser == "Health protocol") {
                    $serprice += 25000;
                }
                if ($ser == "Driver") {
                    $serprice += 100000;
                }
                if ($ser == "Fuel Filled") {
                    $serprice += 250000;
                }
            }
        } else {
            $serprice += 0;
        }

        ?>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">

            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ulfa_Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ulfa_Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="text-align: center;">
        <div class="m-2">
            <p class="m-0" style="font-size:30px">Thank you <?php echo $name; ?> for Reserving</p>
            <p class="m-0" style="font-size:25px">Please double check your reservation detail</p>
        </div>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-In</th>
                    <th scope="col">Check-Out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>
            </thead>
            <tbody class="bg-light">
                <tr>
                    <td><?php echo rand(8000000, 10000000); ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $startbook ?></td>
                    <td><?php echo $endbook ?></td>
                    <td><?php echo $jenismobil ?></td>
                    <td><?php echo $phone ?></td>
                    <td>
                        <?php
                        if (isset($_POST["ser"])) {
                            foreach ($_POST["ser"] as $ser) {
                                echo "<li>$ser</li>";
                            }
                        } else {
                            echo "no service";
                        }
                        ?>
                    </td>
                    <td> Rp.
                        <?php
                        if ($_POST["mobil"] == $listmobil[0]["mobil"]) {
                            echo ($_POST["day"] * $listmobil[0]["harga"]) + $serprice;
                        } else if ($_POST["mobil"] == $listmobil[1]["mobil"]) {
                            echo ($_POST["day"] * $listmobil[1]["harga"]) + $serprice;
                        } else if ($_POST["mobil"] == $listmobil[2]["mobil"]) {
                            echo ($_POST["day"] * $listmobil[2]["harga"]) + $serprice;
                        } else {
                            echo "0";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
            Created by <?php echo $name; ?>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>