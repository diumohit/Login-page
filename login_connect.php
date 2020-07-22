<?php

$db_hostname = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "coderhousebd";

$connect = mysqli_connect($db_hostname,$db_user,$db_password,$db_name);

if ($connect == true) {
    echo "Datebase connected";
}
else {
    echo "Database connection failed";
}


?>

