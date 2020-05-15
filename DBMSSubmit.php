<?php

$servername = "localhost";
$username = "root";
$password = "";
$email = $_GET['email'];

$con = new mysqli ($servername, $username, $password, $email);

$one = $_POST['one'];
$two = $_POST['two'];
$three = $_POST['three'];
$marks1 = $_POST['marks1'];
$four = $_POST['four'];
$five = $_POST['five'];
$six = $_POST['six'];
$marks2 = $_POST['marks2'];
$seven = $_POST['seven'];
$eight = $_POST['eight'];
$nine = $_POST['nine'];
$marks3 = $_POST['marks3'];
$ten = $_POST['ten'];
$eleven = $_POST['eleven'];
$twelve = $_POST['twelve'];
$marks4 = $_POST['marks4'];
$thirteen = $_POST['thirteen'];
$fourteen = $_POST['fourteen'];
$fifteen = $_POST['fifteen'];
$marks5 = $_POST['marks5'];
$sixteen = $_POST['sixteen'];
$seventeen = $_POST['seventeen'];
$eighteen = $_POST['eighteen'];
$marks6 = $_POST['marks6'];
$nineteen = $_POST['nineteen'];
$twenty = $_POST['twenty'];
$twenty_one = $_POST['twenty_one'];
$marks7 = $_POST['marks7'];
$twenty_two = $_POST['twenty_two'];
$twenty_three = $_POST['twenty_three'];
$twenty_four = $_POST['twenty_four'];
$marks8 = $_POST['marks8'];
$twenty_five = $_POST['twenty_five'];
$twenty_six = $_POST['twenty_six'];
$twenty_seven = $_POST['twenty_seven'];
$marks9 = $_POST['marks9'];
$twenty_eight = $_POST['twenty_eight'];
$twenty_nine = $_POST['twenty_nine'];
$thirty = $_POST['thirty'];
$marks10 = $_POST['marks10'];
$thirty_one = $_POST['thirty_one'];
$thirty_two = $_POST['thirty_two'];
$thirty_three = $_POST['thirty_three'];
$marks11 = $_POST['marks11'];
$thirty_four = $_POST['thirty_four'];
$thirty_five = $_POST['thirty_five'];
$thirty_six = $_POST['thirty_six'];
$marks12 = $_POST['marks12'];
$thirty_seven = $_POST['thirty_seven'];
$thirty_eight = $_POST['thirty_eight'];
$thirty_nine = $_POST['thirty_nine'];
$marks13 = $_POST['marks13'];

$sql2 = $con->query("INSERT INTO DBMS (E1C, E1S, E1R, Marks1, E2C, E2S, E2R, Marks2, E3C, E3S, E3R, Marks3, E4C, E4S, E4R, Marks4, E5C, E5S, E5R, Marks5, E6C, E6S, E6R, Marks6, E7C, E7S, E7R, Marks7, E8C, E8S, E8R, Marks8, E9C, E9S, E9R, Marks9, E10C, E10S, E10R, Marks10, A1C, A1S, A1R, Marks11, A2C, A2S ,A2R, Marks12, A3C, A3S, A3R, Marks13) VALUES ('$one', '$two', '$three', '$marks1', '$four', '$five', '$six', '$marks2', '$seven', '$eight', '$nine', '$marks3', '$ten', '$eleven', '$twelve', '$marks4', '$thirteen', '$fourteen', '$fifteen', '$marks5', '$sixteen', '$seventeen', '$eighteen', '$marks6', '$nineteen', '$twenty', '$twenty_one', '$marks7', '$twenty_two', '$twenty_three', '$twenty_four', '$marks8', '$twenty_five', '$twenty_six', '$twenty_seven', '$marks9', '$twenty_eight', '$twenty_nine', '$thirty', '$marks10', '$thirty_one', '$thirty_two', '$thirty_three', '$marks11', '$thirty_four', '$thirty_five', '$thirty_six', '$marks12', '$thirty_seven', '$thirty_eight', '$thirty_nine', '$marks13')");
echo "<br><br><h2 align='center' style = 'color: #FDF6F6;' >Your Responses Have Been Recorded!</h2><br>"
?>
<html>
	<body style="background-color: #343A40">
		<a href = "index.php?email=<?php echo $email;?>" style = "font-family: monospace; font-size: 19px; text-decoration: none; color: #007BFF;" align = "center"><h3><-- Dashboard</h3>
		</a>
	</body>
</html>