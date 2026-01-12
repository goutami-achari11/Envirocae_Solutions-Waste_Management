<?php
session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
//$name=test_input($_POST['name']);
//$email=test_input($_POST['email']);
//$phone=test_input($_POST['phone']);
$cage=test_input($_POST['cage']);
$address=test_input($_POST['address']);
$imgs=$_FILES['imgs']['name'];
$cdate= date("d/m/Y");


//mysql_connect("localhost", "root","");
$conn = connectdb();
$sql="Select * from register where email= '".$_SESSION['EMAIL']."'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				
				$query = "INSERT INTO add_waste(name,email,phone,cage,address,imgs,cdate) VALUES(?,?,?,?,?,?,?)";
				$statement = $conn->prepare($query);
				//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
				$statement->bind_param('sssssss',$_SESSION['NAME'],$_SESSION['EMAIL'],$_SESSION['PHONE'],$cage,$address,$imgs,$cdate);
				
				if($statement->execute())
				{
					move_uploaded_file($_FILES["imgs"]["tmp_name"],"uploads/".$_FILES["imgs"]["name"]);
					echo'<script type="text/javascript">alert("Waste added successfully"); </script>';
					header("Location:userdb.php");
				}
				else
				{
					echo'<script type="text/javascript">alert("Error... in uploading image!"); </script>';
				}
				}
				
	}		
	/* else
	{
		//header("Location:login.html");
		echo'<script type="text/javascript">alert("Incorrect Email id ");window.history.back(); </script>';
	
	} */
$statement->close();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
