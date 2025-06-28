<?php
include('header.php');
include('menu.php');
include('conn.php');
?>
<div class="main-content">
<div class="page-content">
<div class="container-fluid">
<div class="row">
<div class="col">
<div class="h-100">
    <div class="row">
        <div class="col-12">
            <h1>Drone Appointment Pending List</h1>
            <table class="table-bordered" cellpadding="10px" border="1" width="100%">
                <tr>
                    <th>Sr. No</th>
                    <th>Farmer Name</th>
                    <th>Farmer Mobile</th>
                    <th>Farmer Area</th>
                    <th>Farmer Crop Name</th>
                    <th>Farmer Address</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
           <?php
           $q="SELECT * FROM `drone_book` WHERE status='pending'";
           $fire=mysqli_query($conn,$q);
           $i=1;
           while($row=mysqli_fetch_assoc($fire)){
           ?>
                <tr>
                    <th><?=$i++;?></th>
                    <th><?=$row['appointment_name'];?></th>
                    <th><?=$row['appointment_contact'];?></th>
                    <th><?=$row['appointment_area'];?></th>
                    <th><?=$row['appointment_crop'];?></th>
                    <th><?=$row['appointment_add'];?></th>
                    <th><?=$row['date'];?></th>
                    <th>
                        <a href="Drone_pending_list.php?confirmid=<?=$row['appointment_id'];?>"><button class="btn btn-success" >Confirm</button></a><br>
                        <a href="Drone_pending_list.php?rejectmid=<?=$row['appointment_id'];?>"><button class="btn btn-danger" >Reject</button></a>
                    </th>
                </tr>
           <?php
            }
           ?>
            </table>
        </div>
    </div> <!-- end row-->
</div> <!-- end .h-100-->
</div> <!-- end col -->
</div>
</div>
</div>
<?php
include('footer.php');
?>
<?php
if (isset($_REQUEST['confirmid'])) {
 $confirmid=$_REQUEST['confirmid'];
$q="UPDATE `drone_book` SET status='confirm' WHERE appointment_id='".$confirmid."'";
$fire=mysqli_query($conn,$q);
if ($fire){
   echo "<script>alert('Successfuly Confirm Appointment');</script>";
        echo "<script>window.location.href='Drone_pending_list.php'; </script>";
}
}

if (isset($_REQUEST['rejectmid'])) {
 $rejectmid=$_REQUEST['rejectmid'];
$q="UPDATE `drone_book` SET status='reject' WHERE appointment_id='".$rejectmid."'";
$fire=mysqli_query($conn,$q);
if ($fire){
    echo "<script>alert('Successfuly Reject Appointment');</script>";
        echo "<script>window.location.href='Drone_pending_list.php'; </script>";
}
}
?>