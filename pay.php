
<?php
session_start(); 
if(isset($_POST['btnsubmit']))
{
include 'connects.php';

$receipt=$_FILES['receipt']['name'];




$conn = connectdb();
$sql = "update dbin set receipt='$receipt' where id='".$id."'";

	$result=$conn->query($sql);
	
if($statement->execute())
				{
					move_uploaded_file($_FILES["receipt"]["tmp_name"],"receipt/".$_FILES["receipt"]["name"]);
					echo "<script>alert('Payment Successfully! Thank you....');</script>";
					header("Location:viewbins.php");
				}
				else
				{
					echo'<script type="text/javascript">alert("Error... try agian!"); </script>';
				}


}

?>
