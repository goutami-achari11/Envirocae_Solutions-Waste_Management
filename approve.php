<?php
session_start();
include 'connects.php';
if(isset($_POST['app']))
										{
											echo '<script type="text/javascript">alert("Your registration is successfull!"); window.location="addwaste.php"; </script>';
										}


if(isset($_POST['den']))
{
	echo '<script type="text/javascript">alert("Your registration is successfull!"); window.location="addwaste.php"; </script>';
}
/* $wid=test_input($_POST['wid']);
$status=test_input($_POST['status']);
//$rpassword=md5($rpassword);

//mysql_connect("localhost", "root","");
$conn=connectdb();

	$sql="Select status from add_waste where wid= '".?."' and pass= '".?."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['UID']=$row['uid'];	
				$_SESSION['RNAME']=$row['rname'];	
				$_SESSION['EMAIL']=$row['email'];
				$_SESSION['PASS']=$row['pass'];	
				}
				header("location: userdb.html");
	}
	else
	{
		//header("Location:login.html");
		echo'<script type="text/javascript">alert("Incorrect Username or Password");window.history.back(); </script>';
	
	}
} */

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>