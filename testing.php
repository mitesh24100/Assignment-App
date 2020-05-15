<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "attendance_system";

$con = new mysqli ($servername, $username, $password, $dbname);

/*$var1 = $_POST['var1'];

echo $var;

$out = $con->query("SELECT Subject FROM teacherclasssubject WHERE Name = '$result' AND Class='$var1'");

$red = $out->fetch_assoc();

echo $red['Subject'];
?>
<option value="<?php echo $red['Subject']?>"><?php echo $red['Subject']?></option>
*/

$first = $_GET['email'];

$sql = $con->query("SELECT TeacherId FROM teacherregister WHERE Email = '$first'");

$sql1 = $sql->fetch_assoc();

$result = $sql1['TeacherId'];

$sql1 = $con->query("SELECT Class FROM Classes WHERE TeacherId = '$result'");
$sqli = $con->query("SELECT ClassId FROM Classes WHERE TeacherId = '$result'");

$sqli2 = $sqli->fetch_assoc();

$result1 = $sqli2['ClassId'];

?>

<select name="class" id="input" onchange="getState(this.value)" required>
<?php foreach($sql1 as $end){?>

	Choose Class:<option value="<?php echo $end['Class'];?>"><?php echo $end['Class'];?></option>

<?php }?>
</select>

<select name="classs" id="onput" required>

	Choose Subject:<option value="">Select Subject</option>

</select>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "sampleee.php",
	data:'Class='+val,
	success: function(data){
		$("#onput").html(data);
	}
	});
}
</script>