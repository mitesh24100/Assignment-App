<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "mithilesh bhutada";

$con = new mysqli ($servername, $username, $password, $database);


$four = $_POST['four'];
echo $four;
die();

$sql2 = $con->query("INSERT INTO dbmsattendanceseita (Date, 4) VALUES ('2019-08-05', '$four')");