<?php
//session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$name=test_input($_POST['name']);
$email=test_input($_POST['email']);
$phone=test_input($_POST['phone']);
$type=test_input($_POST['type']);
$address=test_input($_POST['address']);
$cdate= date("d/m/Y");


//mysql_connect("localhost", "root","");
$mysqli = connectdb();
$query = "INSERT INTO service(name,email,phone,type,address,cdate) VALUES(?,?,?,?,?,?)";
$statement = $mysqli->prepare($query);
//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
$statement->bind_param('ssssss',$name,$email,$phone,$type,$address,$cdate);



if($statement->execute())
{
	echo '<script type="text/javascript">alert("Your Message sent to Admin successfully!"); window.location="index.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Error... in posting feedback try again!"); </script>';
}
$statement->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
