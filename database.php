<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
    die($conn->connect_error);
} 

$email = $conn->query("SELECT username FROM `register` ORDER BY ID DESC LIMIT 1");
$result = $email->fetch_assoc();
$final = $result['username'];

$sql = "CREATE DATABASE `$final`";

$sql1 = "USE `$final`";

$sql2 = "CREATE TABLE `am4` (ID int(255) AUTO_INCREMENT PRIMARY KEY,E1C varchar(10), E1S varchar(10), E1R varchar(10), Marks1 int(3), E2C varchar(10), E2S varchar(10), E2R varchar(10), Marks2 int(3), E3C varchar(10), E3S varchar(10), E3R varchar(10), Marks3 int(3), E4C varchar(10), E4S varchar(10), E4R varchar(10), Marks4 int(3), E5C varchar(10), E5S varchar(10), E5R varchar(10), Marks5 int(3), E6C varchar(10), E6S varchar(10), E6R varchar(10), Marks6 int(3), E7C varchar(10), E7S varchar(10), E7R varchar(10), Marks7 int(3), E8C varchar(10), E8S varchar(10), E8R varchar(10), Marks8 int(3), E9C varchar(10), E9S varchar(10), E9R varchar(10), Marks9 int(3), E10C varchar(10), E10S varchar(10), E10R varchar(10), Marks10 int(3), A1C varchar(10), A1S varchar(10), A1R varchar(10), Marks11 int(3), A2C varchar(10), A2S varchar(10) ,A2R varchar(10), Marks12 int(3), A3C varchar(10), A3S varchar(10), A3R varchar(10), Marks13 int(3))";

$sql3 = "CREATE TABLE `cn` (ID int(255) AUTO_INCREMENT PRIMARY KEY,E1C varchar(10), E1S varchar(10), E1R varchar(10), Marks1 int(3), E2C varchar(10), E2S varchar(10), E2R varchar(10), Marks2 int(3), E3C varchar(10), E3S varchar(10), E3R varchar(10), Marks3 int(3), E4C varchar(10), E4S varchar(10), E4R varchar(10), Marks4 int(3), E5C varchar(10), E5S varchar(10), E5R varchar(10), Marks5 int(3), E6C varchar(10), E6S varchar(10), E6R varchar(10), Marks6 int(3), E7C varchar(10), E7S varchar(10), E7R varchar(10), Marks7 int(3), E8C varchar(10), E8S varchar(10), E8R varchar(10), Marks8 int(3), E9C varchar(10), E9S varchar(10), E9R varchar(10), Marks9 int(3), E10C varchar(10), E10S varchar(10), E10R varchar(10), Marks10 int(3), A1C varchar(10), A1S varchar(10), A1R varchar(10), Marks11 int(3), A2C varchar(10), A2S varchar(10) ,A2R varchar(10), Marks12 int(3), A3C varchar(10), A3S varchar(10), A3R varchar(10), Marks13 int(3))";

$sql4 = "CREATE TABLE `os` (ID int(255) AUTO_INCREMENT PRIMARY KEY,E1C varchar(10), E1S varchar(10), E1R varchar(10), Marks1 int(3), E2C varchar(10), E2S varchar(10), E2R varchar(10), Marks2 int(3), E3C varchar(10), E3S varchar(10), E3R varchar(10), Marks3 int(3), E4C varchar(10), E4S varchar(10), E4R varchar(10), Marks4 int(3), E5C varchar(10), E5S varchar(10), E5R varchar(10), Marks5 int(3), E6C varchar(10), E6S varchar(10), E6R varchar(10), Marks6 int(3), E7C varchar(10), E7S varchar(10), E7R varchar(10), Marks7 int(3), E8C varchar(10), E8S varchar(10), E8R varchar(10), Marks8 int(3), E9C varchar(10), E9S varchar(10), E9R varchar(10), Marks9 int(3), E10C varchar(10), E10S varchar(10), E10R varchar(10), Marks10 int(3), A1C varchar(10), A1S varchar(10), A1R varchar(10), Marks11 int(3), A2C varchar(10), A2S varchar(10) ,A2R varchar(10), Marks12 int(3), A3C varchar(10), A3S varchar(10), A3R varchar(10), Marks13 int(3))";

$sql5 = "CREATE TABLE `coa` (ID int(255) AUTO_INCREMENT PRIMARY KEY,E1C varchar(10), E1S varchar(10), E1R varchar(10), Marks1 int(3), E2C varchar(10), E2S varchar(10), E2R varchar(10), Marks2 int(3), E3C varchar(10), E3S varchar(10), E3R varchar(10), Marks3 int(3), E4C varchar(10), E4S varchar(10), E4R varchar(10), Marks4 int(3), E5C varchar(10), E5S varchar(10), E5R varchar(10), Marks5 int(3), E6C varchar(10), E6S varchar(10), E6R varchar(10), Marks6 int(3), E7C varchar(10), E7S varchar(10), E7R varchar(10), Marks7 int(3), E8C varchar(10), E8S varchar(10), E8R varchar(10), Marks8 int(3), E9C varchar(10), E9S varchar(10), E9R varchar(10), Marks9 int(3), E10C varchar(10), E10S varchar(10), E10R varchar(10), Marks10 int(3), A1C varchar(10), A1S varchar(10), A1R varchar(10), Marks11 int(3), A2C varchar(10), A2S varchar(10) ,A2R varchar(10), Marks12 int(3), A3C varchar(10), A3S varchar(10), A3R varchar(10), Marks13 int(3))";

$sql6 = "CREATE TABLE `at` (ID int(255) AUTO_INCREMENT PRIMARY KEY,E1C varchar(10), E1S varchar(10), E1R varchar(10), Marks1 int(3), E2C varchar(10), E2S varchar(10), E2R varchar(10), Marks2 int(3), E3C varchar(10), E3S varchar(10), E3R varchar(10), Marks3 int(3), E4C varchar(10), E4S varchar(10), E4R varchar(10), Marks4 int(3), E5C varchar(10), E5S varchar(10), E5R varchar(10), Marks5 int(3), E6C varchar(10), E6S varchar(10), E6R varchar(10), Marks6 int(3), E7C varchar(10), E7S varchar(10), E7R varchar(10), Marks7 int(3), E8C varchar(10), E8S varchar(10), E8R varchar(10), Marks8 int(3), E9C varchar(10), E9S varchar(10), E9R varchar(10), Marks9 int(3), E10C varchar(10), E10S varchar(10), E10R varchar(10), Marks10 int(3), A1C varchar(10), A1S varchar(10), A1R varchar(10), Marks11 int(3), A2C varchar(10), A2S varchar(10) ,A2R varchar(10), Marks12 int(3), A3C varchar(10), A3S varchar(10), A3R varchar(10), Marks13 int(3))";

$sql7 = "CREATE TABLE `py` (ID int(255) AUTO_INCREMENT PRIMARY KEY,E1C varchar(10), E1S varchar(10), E1R varchar(10), Marks1 int(3), E2C varchar(10), E2S varchar(10), E2R varchar(10), Marks2 int(3), E3C varchar(10), E3S varchar(10), E3R varchar(10), Marks3 int(3), E4C varchar(10), E4S varchar(10), E4R varchar(10), Marks4 int(3), E5C varchar(10), E5S varchar(10), E5R varchar(10), Marks5 int(3), E6C varchar(10), E6S varchar(10), E6R varchar(10), Marks6 int(3), E7C varchar(10), E7S varchar(10), E7R varchar(10), Marks7 int(3), E8C varchar(10), E8S varchar(10), E8R varchar(10), Marks8 int(3), E9C varchar(10), E9S varchar(10), E9R varchar(10), Marks9 int(3), E10C varchar(10), E10S varchar(10), E10R varchar(10), Marks10 int(3), A1C varchar(10), A1S varchar(10), A1R varchar(10), Marks11 int(3), A2C varchar(10), A2S varchar(10) ,A2R varchar(10), Marks12 int(3), A3C varchar(10), A3S varchar(10), A3R varchar(10), Marks13 int(3))";

if ($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE && $conn->query($sql7) === TRUE) 
{
    header('location:login.php');
} 
else
{
    echo $conn->error;
}

$conn->close();
?>
