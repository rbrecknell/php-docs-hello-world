<?php

// echo "Hello Matt!";


$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/site/wwwroot/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "mysql-adapt-dev.mysql.database.azure.com", "symbiotics", "Pukka118!", "trial", 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
  die("Connection failed: ".mysqli_connect_error());
}