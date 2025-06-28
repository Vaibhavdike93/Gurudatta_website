<?php

include("conn.php");
$status="pending";
$date=date("Y/m/d");
$q="INSERT INTO `drone_book`(`appointment_name`, `appointment_contact`, `appointment_area`, `appointment_crop`, `appointment_add`, `status`, `date`) VALUES ('".$_POST['name']."','".$_POST['number']."','".$_POST['workarea']."','".$_POST['workType']."','".$_POST['Address']."','".$status."','".$date."')";
$fire=mysqli_query($conn,$q);
if($fire){
	echo "<script>alert('Successfully send your Drone Appointment');</script>";
	echo "<script>window.location.href='book.php'</script>";
}
?>