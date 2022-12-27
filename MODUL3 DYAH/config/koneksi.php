<?php
$connection = new mysqli("localhost", "root", "", "modul3dyah", 3308);

if (!$connection) {
  die("Koneksi Error: " . $connection->connect_error);
}