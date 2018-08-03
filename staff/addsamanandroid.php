<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "samanfyp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


  $sql2 = "insert into denda (kenderaan_id,saman_id,tarikh,staffID)
  VALUES ('$T_name','$jenisKesalahan','$date','$staffID')";
  $result2 = mysqli_query($conn, $sql2);

  ?>
