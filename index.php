<?php

// echo "Hello Matt!";


$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "mysql-adapt-dev.mysql.database.azure.com", "symbiotics", "Pukka118!", "trial", 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
  die("Connection failed: ".mysqli_connect_error());
}

$sql = "SELECT LastName, FirstName, Address, City FROM persons ORDER BY LastName";
$result = $conn -> query($sql);

// Associative array
$row = $result -> fetch_assoc();
printf ("%s (%s)\n", $row["LastName"], $row["FirstName"]);

// Free result set
$result -> free_result();

$conn -> close();