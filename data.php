<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}

$bus_number =  $conn->real_escape_string($_POST["Bus_number"]);
$set_number =  $conn->real_escape_string($_POST["set_number"]);
$Name =  $conn->real_escape_string($_POST["name"]);
$checkbox =  $conn->real_escape_string($_POST["Passenger"]);
$age =  $conn->real_escape_string($_POST["age"]);
$gender =  $conn->real_escape_string($_POST["gender"]);
$from =  $conn->real_escape_string($_POST["ticket1"]);
$to =  $conn->real_escape_string($_POST["ticket2"]);
$d_o_j =  $conn->real_escape_string($_POST["d_o_j"]);
$d_o_r =  $conn->real_escape_string($_POST["d_o_r"]);

$sql1 = "INSERT INTO passenger(bus_number,set_number,name,passenger,age,gender,from_,to_,d_o_r,d_o_j)VALUES('".$bus_number."','".$set_number."','".$Name."','".$checkbox."','".$age."','".$gender."','".$from."','".$to."','".$d_o_r."','".$d_o_j."')";

if($conn->query($sql1))
{
	echo "new record created successfully";
}else
{
	echo "Error".$sql1."<br>".$conn->error;
}

$conn->close();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Passenger Details</title>
	<style type="text/css">
		body{text-align: center;}
	</style>

</head>
<body>
	<div id = "Passenger">
	<h1>KBT INDIA Pvt Ltd</h1>
	<center>
	<table border="3" >
	<tr>
	<td><?php $bus_number = $_POST["Bus_number"];echo "Bus_Number : ".$bus_number.'</br>';?></td>
	</tr>
	<tr>
	<td><?php $set_number = $_POST["set_number"];echo "Set_Number : ".$set_number.'</br>'; ?></td>
	</tr>
	<tr>
	<td><?php $Name = $_POST["name"];echo " Name : ".$Name.'</br>'; ?></td>
	</tr>
	<tr>
	<td><?php $checkbox = $_POST["Passenger"];echo "Passenger : ".$checkbox.'</br>';?></td>
	</tr>
	<tr>
	<td><?php $age = $_POST["age"];echo "Age : ".$age.'</br>';?></td>
	</tr>
	<tr>
	<td><?php $gender = $_POST["gender"];echo "Gender : ".$gender.'</br>';?></td>
	</tr>
	<tr>
	<td><?php $from = $_POST["ticket1"];echo "From : ".$from.'</br>';?></td>
	</tr>
	<tr>
	<td><?php $to = $_POST["ticket2"];echo "To : ".$to.'</br>';?></td>
	</tr>
	<tr>
	<td><?php $d_o_j = $_POST["d_o_j"];echo "Date of Journey : ".$d_o_j.'</br>';?></td>
	</tr>
	<tr>
	<td><?php $d_o_r = $_POST["d_o_r"];echo "Date of Return : ".$d_o_r.'</br>';?></td>
	</tr>
</table><br>
</center>
 <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
<script type="text/javascript">
	function printDiv() {
         window.frames["print_frame"].document.body.innerHTML = document.getElementById("Passenger").innerHTML;
         window.frames["print_frame"].window.focus();
         window.frames["print_frame"].window.print();
       }
</script>
	<form method="get" action="welcome.php">
		<button type="submit">Back</button>
	</form><br>
	<button class="Button Button--outline" onclick="printDiv()">Print</button>
</body>
</html>