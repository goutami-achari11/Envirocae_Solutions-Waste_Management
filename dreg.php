<?php
session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$dname=test_input($_POST['dname']);
$Address=test_input($_POST['Address']);
$phone=test_input($_POST['phone']);
$email=test_input($_POST['email']);
$wimg=$_FILES['wimg']['name'];
$truckno=test_input($_POST['truckno']);
$passwrd=test_input($_POST['passwrd']);


$mysqli = connectdb();
$check="select * from worker where phone='$phone'";
$result=$mysqli->query($check);
if ($result ->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{
		echo '<script type/javascript">alert("user already exist"); window.location="dreg.html"; </script>';
	}
}
else{
	$mysqli = connectdb();
$query = "INSERT INTO worker(dname,Address,phone,email,wimg,truckno,passwrd) VALUES(?,?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('sssssss',$dname,$Address,$phone,$email,$wimg,$truckno,$passwrd);
	if($statement->execute())
				{
					move_uploaded_file($_FILES["wimg"]["tmp_name"],"workers/".$_FILES["wimg"]["name"]);
					echo'<script type="text/javascript">alert("Your registration is Successfull"); </script>';
					header("Location:dlogin.html");
				}
				else
				{
					echo'<script type="text/javascript">alert("Pleace try again!"); </script>';
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