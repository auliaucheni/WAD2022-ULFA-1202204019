<?php
require './connector.php';

$id = $_GET['id'];

$sql = "SELECT * FROM showroom_ulfa_table WHERE id_mobil = $id";

if (mysqli_query($connector, $sql)) {
  header("location: ../pages/ListCar-Ulfa.php?pesan=hapus");
} else {
  header("location: ../pages/ListCar-Ulfa.php?pesan=gagal");
}