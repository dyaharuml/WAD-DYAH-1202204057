<?php
require './koneksi.php';

$id = $_GET['id'];

$mysql = "DELETE FROM showroomdyah WHERE id_mobil = $id";

if (mysqli_query($connection, $mysql)) {
  header("location: ../pages/List-dyah.php?pesan=delete");
} else {
  echo "Error";
}