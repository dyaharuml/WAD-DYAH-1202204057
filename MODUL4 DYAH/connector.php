<?php
$servername = "127.0.0.1:3344";
$username = "root";
$password = "";
$database = "modul4dyah";

$conne = mysqli_connect("localhost", "root", "", "modul4dyah", 3308);

if (!$conne) {
  echo "<script>
            alert('failed connect into database')
          </script>";
}