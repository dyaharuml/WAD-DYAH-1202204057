<?php
require './koneksi.php';

$cname = $_POST['nama'];
$onwer = $_POST['pemilik'];
$carBrand = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$carPhoto = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $carPhoto)) {
  $sql = "INSERT INTO showroomdyah (nama_mobils, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$cname', '$owner', '$carBrand', '$tanggalbeli', '$desc', '$carPhoto', '$status')";
  if (mysqli_query($connection, $sql)) {
    header("location: ../pages/List-dyah.php");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}