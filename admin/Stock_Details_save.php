<?php
include("conn.php");
$date=date("Y/m/d");

$q="INSERT INTO `stock_details`(`Details`, `Weight`, `Price`, `Stock`, `date`) VALUES ('".$_POST['Details']."','".$_POST['Weight']."','".$_POST['Price']."','".$_POST['Stock']."','".$date."')";
$fire=mysqli_query($conn,$q);
if($fire){
    echo "<script>alert('Successfully Update');</script>";
    echo "<script>window.location.href='Stock_Details.php'</script>";
}
?>
