<?php

// echo "Hello Matt!";


$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "/site/wwwroot/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "mysql-adapt-dev.mysql.database.azure.com", "symbiotics", "Pukka118!", "trial", 3306, MYSQLI_CLIENT_SSL);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}