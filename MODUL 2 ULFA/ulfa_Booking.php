<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOOKING | Ulfa_1202204019</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <?php

    $jenismobil = [
        [
            "mobil" => "Toyota Rush",
            "img" => "img/toyota rush.png"
        ],
        [
            "mobil" => "Toyota Ayla",
            "img" => "img/ayla.png"
        ],
        [
            "mobil" => "Honda Brio",
            "img" => "img/brio.png"
        ],
    ]

    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="ulfa_Home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="ulfa_Booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 style="text-align:center; font-size: 25px">Rent your car now!</h1>
    <div class="container card shadow-sm">
        <div class="d-flex justify-content-arround">
            <div class="col-6 ps-5 pe-5 d-flex align-items-center">
                <?php
                if (isset($_GET["img"])) {
                ?><img class="" width="100%" src="<?= $_GET["img"]; ?>" alt="">
                <?php
                } else {
                ?><img width="100%" src="toyota rush.png" alt="">
                <?php } ?>
            </div>
            <div class="col-6 ps-5 pe-5">
                <ul type="none">
                    <form action="ulfa_MyBooking.php" method="post">
                        <li class="m-1">
                            <label for="name">Name</label><br>
                            <input class="form-control" type="text" name="name" id="name" value="Ulfa_1202204019" readonly>
                        </li>
                        <li class="m-1">
                            <label for="booking">Book Date</label><br>
                            <input class="form-control" type="" name="booking" id="booking">
                        </li>
                        <li class="m-1">
                            <label for="waktu">Start Time</label><br>
                            <input class="form-control" type="time" name="waktu" id="waktu">
                        </li>
                        <li class="m-1">
                            <label for="day">Duration (Days)</label><br>
                            <input class="form-control" type="number" name="day" id="day" min="1">
                        </li>
                        <li class="m-1">
                            <label for="mobil">Car Type</label>
                            <select class="form-select" name="mobil" id="mobil">
                                <option selected>Choose...</option>
                                <?php foreach ($jenismobil as $mobil) : ?>
                                    <?php
                                    if ($mobil["mobil"] == $_GET["mobil"]) {
                                    ?><option selected="selected" value="<?= $mobil["mobil"]; ?>"><?= $mobil["mobil"]; ?></option>
                                    <?php
                                    } else {
                                    ?><option value="<?= $mobil["mobil"]; ?>"><?= $mobil["mobil"]; ?></option>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </select>
                        </li>
                        <li class="m-1">
                            <label for="phone">Phone Number</label><br>
                            <input class="form-control" type="number" name="phone" id="phone" min="0">
                        </li>
                        <li class="m-1">
                            <label for="service">Add Service(s)</label><br>
                            <input class="form-check-input m-1" type="kbox" name="ser[]" value="Health protocol" id="health"><label class="form-check-label" for="health">Health protocol / Rp25.000</label><br>
                            <input class="form-check-input m-1" type="kbox" name="ser[]" value="Driver" id="driver"><label class="form-check-label" for="driver">Driver / Rp100.000</label><br>
                            <input class="form-check-input m-1" type="kbox" name="ser[]" value="Fuel Filled" id="fuel"><label class="form-check-label" for="fuel">Fuel Filled / Rp250.000</label><br>
                        </li>
                        <li class="text-center">
                            <div class="d-grid gap-2">
                                <button class="btn btn-success justify-content-around" type="submit">Book</button>
                            </div>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray">
            Created by ULFA_1202204019
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>