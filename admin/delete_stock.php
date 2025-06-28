<?php
include("conn.php");
$id=$_REQUEST['id'];
$q="DELETE FROM `stock_details` WHERE id='".$id."'";
$fire=mysqli_query($conn,$q);
if ($fire) {
   echo "<script>alert('Successfully Delete Stock');</script>";
    echo "<script>window.location.href='updated_Stock_Details.php'</script>";
}
?>