<?php
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "crud_flutter";

$con = mysqli_connect($localhost, $username, $password, $dbname);
mysqli_set_charset($con, "utf8");

if (!$con) {
    print("Not Connected");
}
