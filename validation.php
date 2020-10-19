<?php 
session_start();

$con= mysqli_connect('localhost','id9426226_root','admin');
mysqli_select_db($con,'id9426226_myfirst');
$name= $_POST['user'];
$pass= $_POST['password'];

$q= "select * from signin where name='$name' && password='$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if($num==1)
{
	$_SESSION['username']= $name;
	$_SESSION["Points"] =  $row["Points"];
	header("location:index2.php");
}
else
{
	header("location:index.php");
}

?>