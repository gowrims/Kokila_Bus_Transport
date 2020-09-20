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

// $sql = "CREATE DATABASE myDB";
// if($conn->query($sql) === TRUE)
// {
// 	echo "Database created successfully";
// }else
// {
// 	echo "Error creating database:".$conn->error;
// }

// $sql = "CREATE TABLE passengerr2(bus_number INT(6),set_number INT(3),
// name VARCHAR(20),passenger VARCHAR(8),age INT(3),gender VARCHAR(8),
// from_ VARCHAR(20),to_ VARCHAR(20),d_o_j VARCHAR(12),d_o_r VARCHAR(12))";

// if($conn->query($sql))
// {
// 	echo "Table passenger created successfully";
// }
// else
// {
// 	echo "Error creating table".$conn->error;
// }

$sql1 = "INSERT INTO passenger(bus_number,set_number,name,passenger,age,gender,from_,to_,d_o_r,d_o_j)VALUES(0,0,'GOWR','AULIT',00,'MALE','TRICHY','CHENNAI','10-20-2020','11/20/2000')";
if($conn->query($sql1))
{
	echo "new record created successfully";
}else
{
	echo "Error".$sql1."<br>".$conn->error;
}
$conn->close();

?>