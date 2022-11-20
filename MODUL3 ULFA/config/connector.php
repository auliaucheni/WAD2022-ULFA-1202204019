<?php
$host = "localhost:3308";
$username = "root";
$password = "";
$namadb = "modul3";

$connector = new mysqli($host, $username, $password, $namadb);

if (!$connector) {
  die("connector Gagal: " . $connector->connect_error);
}