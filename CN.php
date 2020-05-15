<?php
$servername = "localhost";
$username = "root";
$password = "";
$mail = $_GET['email'];

$con = new mysqli ($servername, $username, $password, $mail);

$sql1 = $con->query("SELECT * FROM `cn` ORDER BY ID DESC LIMIT 1"); 

$result = mysqli_fetch_row($sql1);
?>
<html>

<head>
	<title>Computer Networks</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Assign.css?version=51">
</head>

<body style="background-color: #343A40">
	<form method="POST" action="CNSubmit.php?email=<?php echo $mail;?>">
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<h2 align="center" style = "font-family: monospace; font-size: 32px; color: #FDF6F6;">COMPUTER NETWORKS</h2>
				</div>
			</div>
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 1<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px; color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="one">
				        	<option value="No"  <?php if($result[1]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[1]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="two">
				        	<option value="No" <?php if($result[2]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[2]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="three">
				        	<option value="No" <?php if($result[3]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[3]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks1" value="<?php echo $result[4]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 2<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="four">
				        	<option value="No"  <?php if($result[5]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[5]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="five">
				        	<option value="No" <?php if($result[6]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[6]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="six">
				        	<option value="No" <?php if($result[7]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[7]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks2" value="<?php echo $result[8]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 3<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="seven">
				        	<option value="No"  <?php if($result[9]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[9]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="eight">
				        	<option value="No" <?php if($result[10]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[10]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="nine">
				        	<option value="No" <?php if($result[11]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[11]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks3" value="<?php echo $result[12]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 4<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="ten">
				        	<option value="No"  <?php if($result[13]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[13]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="eleven">
				        	<option value="No" <?php if($result[14]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[14]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="twelve">
				        	<option value="No" <?php if($result[15]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[15]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks4" value="<?php echo $result[16]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 5<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="thirteen">
				        	<option value="No"  <?php if($result[17]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[17]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="fourteen">
				        	<option value="No" <?php if($result[18]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[18]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="fifteen">
				        	<option value="No" <?php if($result[19]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[19]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks5" value="<?php echo $result[20]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 6<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="sixteen">
				        	<option value="No"  <?php if($result[21]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[21]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="seventeen">
				        	<option value="No" <?php if($result[22]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[22]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="eighteen">
				        	<option value="No" <?php if($result[23]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[23]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks6" value="<?php echo $result[24]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 7<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="nineteen">
				        	<option value="No"  <?php if($result[25]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[25]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="twenty">
				        	<option value="No" <?php if($result[26]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[26]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="twenty_one">
				        	<option value="No" <?php if($result[27]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[27]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks7" value="<?php echo $result[28]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 8<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="twenty_two">
				        	<option value="No"  <?php if($result[29]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[29]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="twenty_three">
				        	<option value="No" <?php if($result[30]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[30]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="twenty_four">
				        	<option value="No" <?php if($result[31]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[31]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks8" value="<?php echo $result[32]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 9<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="twenty_five">
				        	<option value="No"  <?php if($result[33]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[33]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="twenty_six">
				        	<option value="No" <?php if($result[34]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[34]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="twenty_seven">
				        	<option value="No" <?php if($result[35]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[35]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks9" value="<?php echo $result[36]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Experiment 10<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="twenty_eight">
				        	<option value="No"  <?php if($result[37]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[37]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="twenty_nine">
				        	<option value="No" <?php if($result[38]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[38]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="thirty">
				        	<option value="No" <?php if($result[39]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[39]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks10" value="<?php echo $result[40]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Assignment 1<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="thirty_one">
				        	<option value="No"  <?php if($result[41]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[41]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="thirty_two">
				        	<option value="No" <?php if($result[42]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[42]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="thirty_three">
				        	<option value="No" <?php if($result[43]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[43]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks11" value="<?php echo $result[44]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Assignment 2<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="thirty_four">
				        	<option value="No"  <?php if($result[45]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[45]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="thirty_five">
				        	<option value="No" <?php if($result[46]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[46]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="thirty_six">
				        	<option value="No" <?php if($result[47]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[47]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks12" value="<?php echo $result[48]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col" align="center">
					<br><h3 style = "font-family: monospace; font-size: 25px; color: #FDF6F6;">Assignment 3<h3><br>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Completed<h5>
					<div class="select-style">
						<select name="thirty_seven">
				        	<option value="No"  <?php if($result[49]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[49]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Submitted<h5>
					<div class="select-style">
						<select name="thirty_eight">
				        	<option value="No" <?php if($result[50]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[50]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Received<h5>
					<div class="select-style">
						<select name="thirty_nine">
				        	<option value="No" <?php if($result[51]=='No'){ ?> selected="selected" <?php }?>>NO</option>
				        	<option value="Yes" <?php if($result[51]=='Yes'){ ?> selected="selected" <?php }?>>YES</option>
				        </select>
				    </div>
				</div>
				<div class="col-sm-3" align="center"><h5 style = "font-family: monospace; font-size: 19px;color: #FDF6F6;">Marks<h5>
					<div class="select-styler">
						<input type="number" name="marks13" value="<?php echo $result[52]?>" style="font-family: monospace; font-size: 19px; height: 42px; width: 90px; border-radius: 3px; border: 1px solid #ccc; background-color: #343A40; color: #FDF6F6;" min="0" max="100">
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 text-center">
			<br><button type="submit" class="btn btn-outline-dark" style = "font-family: monospace; font-size: 22px; color: #FDF6F6;">Submit!</button><br>
		</div>
		<div class = "col-12" align = "center">
			<br><h2><a href = "index.php?email=<?php echo $mail;?>" style = "font-family: monospace; font-size: 25px; text-decoration: none; color: orange;"><-- DashBoard!</a><h2>
		</div>
	</form>
</body>
</html>