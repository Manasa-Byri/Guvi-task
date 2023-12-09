<?php
session_start();

$user = $_POST['user'];
$pwd = $_POST['pwd'];
$fn = $_POST['fn'];
$mn = $_POST['mn'];
$ad = $_POST['ad'];
$pn = $_POST['pn'];
$an = $_POST['ar'];
include "con.php";
$query = "select * from login where uname='$user'";

$table=mysqli_query($con,$query);

if(mysqli_num_rows($table)>0)
{
	header("location:register_err.html");
}
else
{
	$q1="insert into login values('$user','$pwd')";
	mysqli_query($con,$q1);
	
	$q2="insert into USERDETAILS values('$user','$mn','$fn','$an','$pn','$ad');";
	mysqli_query($con,$q2);
	$_SESSION['username']=$user;
	header("location:use.php");
	
}


?>

