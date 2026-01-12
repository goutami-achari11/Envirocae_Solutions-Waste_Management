<?php
session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';
$qa=test_input($_POST['qa']);
$pin=test_input($_POST['pin']);
$cdate= date("d/m/Y");
//mysql_connect("localhost", "root","");
$conn = connectdb();

$sql="Select * from addbin ";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
			
				while($row=$result->fetch_assoc())
				{
				$_SESSION['DBID']=$row['dbid'];		
				$_SESSION['DBNAME']=$row['dbname'];	
				$_SESSION['DBPRICE']=$row['dbprice'];		
				}
				
	}



$query = "INSERT INTO dbin(bid,uname,email,dbname,dbprice,phone,qa,address,pin,cdate) VALUES(?,?,?,?,?,?,?,?,?,?)";
				$statement = $conn->prepare($query);
				//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
				$statement->bind_param('ssssssssss',$_SESSION['DBID'],$_SESSION['NAME'],$_SESSION['EMAIL'],$_SESSION['DBNAME'],$_SESSION['DBPRICE'],$_SESSION['PHONE'],$qa,$_SESSION['ADDRESS'],$pin,$cdate);

if($statement->execute())
{
	echo '<script type="text/javascript">alert("Request submitted"); window.location="service.html"; </script>';
}
else
{
   echo '<script type="text/javascript">alert("Pleace try again"); </script>';
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





