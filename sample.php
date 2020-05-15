<?php
$servername = "localhost";
$username = "root";
$password = "";
$name =  "mithilesh bhutada";

$con = new mysqli ($servername, $username, $password, $name);

$sql1 = $con->query("SELECT (status) FROM `seita`"); 

$i = $sql1->num_rows;
$result = [];
for($x=1; $x<=$i; $x++)
{
    $sql = $con->query("SELECT status FROM `seita` WHERE RollNo = '$x'");
    $result[] = mysqli_fetch_row($sql);
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Assign.css?version=51">
</head>
<body style="background-color: #343A40">
<form method = "POST" action = "samplesubmit.php">
 <h5 style="color: white;">Arun Bhutada:  <input type="submit" onclick="change0()" id="0" name="one" value="<?php echo implode(', ', $result[0]) ?>" class="btn btn-outline-dark" style="font-family: monospace; font-size: 22px; color: #FDF6F6;  border: 1px solid #ccc;"></h5>
 <h5 style="color: white;">Sangeeta Bhutada:  <input type="submit" onclick="change1()" id="1" name="two" value="<?php echo implode(', ', $result[1]) ?>" class="btn btn-outline-dark" style="font-family: monospace; font-size: 22px; color: #FDF6F6;  border: 1px solid #ccc;"></h5>
 <h5 style="color: white;">Harsh Bhutada:  <input type="submit" onclick="change2()" id="2" name="three" value="<?php echo implode(', ', $result[2]) ?>" class="btn btn-outline-dark" style="font-family: monospace; font-size: 22px; color: #FDF6F6;  border: 1px solid #ccc;"></h5>
 <h5 style="color: white;">Mithilesh Bhutada:  <input type="button" onclick="change3()" id="3" name="four" value="<?php echo implode(', ', $result[3]) ?>" class="btn btn-outline-dark" style="font-family: monospace; font-size: 22px; color: #FDF6F6;  border: 1px solid #ccc;"></h5>
<!--Mithilesh Bhutada: <button type="submit" id="3" onclick="change3()" name="four">Absent</button>-->
<br><input type = "submit" value = "SUBMIT" class = "btn btn-outline-dark" required style = "font-family: monospace; font-size: 19px; color: #FDF6F6;"><br>
<!--<form action="samplesubmit.php">
 <h5 style="color: white;">Arun Bhutada :   <input type="checkbox" name="Absent" value="Absent" style="font-family: monospace; font-size: 22px; color: #FDF6F6;  border: 1px solid #ccc;"> Absent <input type="checkbox" name="Present" value="Present"> Present </h5></form>
<br><br>
<button type="submit" class="btn btn-outline-dark" style = "font-family: monospace; font-size: 22px; color: #FDF6F6;">Submit!</button><br>-->
</form> 

<script>    
function change0()
{
    var elem = document.getElementById("0");
    if (elem.value=="Absent") 
        {
            elem.value = "Present";
        }
    else if (elem.value=="Present") 
        {
            elem.value = "Absent";
        }
}
function change1()
{
    var elem = document.getElementById("1");
    if (elem.value=="Absent") 
        {
            elem.value = "Present";
        }
    else if (elem.value=="Present") 
        {
            elem.value = "Absent";
        }
}
function change2()
{
    var elem = document.getElementById("2");
    if (elem.value=="Absent") 
        {
            elem.value = "Present";
        }
    else if (elem.value=="Present") 
        {
            elem.value = "Absent";
        }
}
function change3()
{
    var elem = document.getElementById("3");
    if (elem.value=="Absent") 
        {
            elem.value = "Present";
        }
    else if (elem.value=="Present") 
        {
            elem.value = "Absent";
        }
}
</script>
</form>
</body>
</html>