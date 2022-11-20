<?php
$connection = new mysqli("localhost", "root", "", "modul3dyah");

if (!$connection) {
  die("Koneksi Error: " . $connection->connect_error);
}