<?php
session_start();
include 'connects.php';
if(isset($_POST['btnsubmit']))
{
$email=test_input($_POST['email']);
$pass=test_input($_POST['pass']);
//$rpassword=md5($rpassword);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select * from admin where email= '".$email."' and pass= '".$pass."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['AID']=$row['aid'];
				$_SESSION['ANAME']=$row['aname'];
				$_SESSION['EMAIL']=$row['email'];
				$_SESSION['PASS']=$row['pass'];	
				}
				header("location: admindb.php");
	}
	else
	{
		
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
