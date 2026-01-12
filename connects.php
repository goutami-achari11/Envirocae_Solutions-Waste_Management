<?php
function connectdb()
{
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="wastte";
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
if($conn->connect_error){die("Connection Failed ".$mysqli->connect_error);}
return $conn;
}
?>
 