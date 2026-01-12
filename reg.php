<?php
session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$name=test_input($_POST['name']);
$lname=test_input($_POST['lname']);
$address=test_input($_POST['address']);
$pincode=test_input($_POST['pincode']);
$state=test_input($_POST['state']);
$phone=test_input($_POST['phone']);
$email=test_input($_POST['email']);
$pass=test_input($_POST['pass']);

$cdate= date("d/m/Y");
//mysql_connect("localhost", "root","");

$mysqli = connectdb();
$check="select * from register where phone='$phone'";
$result=$mysqli->query($check);
if ($result ->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo '<script type/javascript">alert("user already exist"); window.location="reg.html"; </script>';
	}
}
else{
	$mysqli = connectdb();
$query = "INSERT INTO register(name,lname,address,pincode,state,phone,email,pass,cdate) VALUES(?,?,?,?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssssssss',$name,$lname,$address,$pincode,$state,$phone,$email,$pass,$cdate);

if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your registration is Successfull"); window.location="login.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Pleace try again"); </script>';
}
$statement->close();
}
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>