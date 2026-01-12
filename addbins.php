<?php
session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$dbname=test_input($_POST['dbname']);
$dbprice=test_input($_POST['dbprice']);
$dimg=$_FILES['dimg']['name'];
$cdate= date("d/m/Y");


//mysql_connect("localhost", "root","");
$conn = connectdb();

				$query = "INSERT INTO addbin(dbname,dbprice,dimg,cdate) VALUES(?,?,?,?)";
				$statement = $conn->prepare($query);
				//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
				$statement->bind_param('ssss',$dbname,$dbprice,$dimg,$cdate);
				
				if($statement->execute())
				{
					move_uploaded_file($_FILES["dimg"]["tmp_name"],"dustbins/".$_FILES["dimg"]["name"]);
					echo'<script type="text/javascript">alert("Dust bin added successfully"); </script>';
					header("Location:addedbin.php");
				}
				else
				{
					echo'<script type="text/javascript">alert("Error... adding bin!"); </script>';
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
