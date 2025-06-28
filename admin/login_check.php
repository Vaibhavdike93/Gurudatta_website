<?php
session_start();
include("conn.php");
$q="SELECT * FROM `user_details`";
$fire=mysqli_query($conn,$q);
$row=mysqli_fetch_assoc($fire);
if ($_POST['email']==$row['user_email'] && $_POST['password']==$row['user_password']){
	$_SESSION['name']=$row['user_name'];
	$_SESSION['id']=$row['user_id'];
	header('location:index.php');
}else{
	header("location:login.php");
}
?>