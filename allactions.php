<?php
session_start(); 
include 'connects.php';

//remove user
if(isset($_GET['phone']))
{
	$phone=test_input($_GET['phone']);
	$mysqli=connectdb();
	$query = "delete from register where phone=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$phone);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewuser.php");
}
//remove worker
if(isset($_GET['email']))
{
	$email=test_input($_GET['email']);
	$mysqli=connectdb();
	$query = "delete from worker where email=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('s',$email);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewworker.php");
}

//deleting cases
if(isset($_GET['fid']))
{
	$fid=test_input($_GET['fid']);
	$mysqli=connectdb();
	$query = "delete from contact where fid=?";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('i',$fid);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:viewfeedback.php");
}
//approve
if(isset($_GET['wid']))
{
	$wid=test_input($_GET['wid']);
	$mysqli=connectdb();
	
	$query = "update add_waste set  status='Approved' where wid='".$wid."'";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:appwaste.php");
}

//deny
if(isset($_GET['deny']))
{
	$deny=test_input($_GET['deny']);
	$mysqli=connectdb();

	$query = "update add_waste set status='Dynied' where wid='".$deny."'";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	//$statement->bind_param('i',$deny);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:denywaste.php");
}


//payment
if(isset($_GET['id']))
{
	$id=test_input($_GET['id']);
	$mysqli=connectdb();
	$query = "UPDATE dbin SET payment='Done', receipt='receipt' WHERE id='".$id."'";


	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	echo'<script type="text/javascript">alert("Error... try agian!"); </script>';
	header("location:viewbins.php");
}
//bin approve
if(isset($_GET['aid']))
{
	$aid=test_input($_GET['aid']);
	$mysqli=connectdb();
	
	$query = "update dbin set  status='Provided' where bid='".$aid."'";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:appbin.php");
}


if(isset($_GET['did']))
{
	$did=test_input($_GET['did']);
	$mysqli=connectdb();

	$query = "update dbin set status='Dynied' where bid='".$did."'";
	$statement = $mysqli->prepare($query);
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	//$statement->bind_param('i',$deny);
	if(!$statement->execute()){
		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
	}
	header("location:denybin.php");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>