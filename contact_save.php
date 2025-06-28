<?php
include("conn.php");
$status="pending";
$date=date("Y/m/d");
$q="INSERT INTO `contact_info`(`Farmer_name`, `Farmer_location`, `Farmer_email`, `Farmer_number`, `Farmer_msg`, `Status`, `Date`) VALUES ('".$_POST['name']."','".$_POST['location']."','".$_POST['email']."','".$_POST['number']."','".$_POST['msg']."','".$status."','".$date."')";
$fire=mysqli_query($conn,$q);
if($fire){
	echo "<script>alert('Successfully send your Contact Details');</script>";
	echo "<script>window.location.href='contactus.php'</script>";
}
?>