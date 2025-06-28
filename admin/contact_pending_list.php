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
            <h1>Contact Pending List</h1>
            <table class="table-bordered" cellpadding="10px" border="1" width="100%">
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Msg</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
           <?php
           $q="SELECT * FROM `contact_info` WHERE status='pending'";
           $fire=mysqli_query($conn,$q);
           $i=1;
           while($row=mysqli_fetch_assoc($fire)){
           ?>
                <tr>
                    <th><?=$i++;?></th>
                    <th><?=$row['Farmer_name'];?></th>
                    <th><?=$row['Farmer_location'];?></th>
                    <th><?=$row['Farmer_email'];?></th>
                    <th><?=$row['Farmer_number'];?></th>
                    <th><?=$row['Farmer_msg'];?></th>
                    <th><?=$row['Date'];?></th>
                    <th>
                        <a href="contact_pending_list.php?confirmid=<?=$row['Farmer_id'];?>"><button class="btn btn-success" >Confirm</button></a>
                        <a href="contact_pending_list.php?rejectmid=<?=$row['Farmer_id'];?>"><button class="btn btn-danger" >Reject</button></a>
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
$q="UPDATE `contact_info` SET status='confirm' WHERE Farmer_id='".$confirmid."'";
$fire=mysqli_query($conn,$q);
if ($fire){
   echo "<script>alert('Successfuly Confirm');</script>";
        echo "<script>window.location.href='contact_pending_list.php'; </script>";
}
}

if (isset($_REQUEST['rejectmid'])) {
 $rejectmid=$_REQUEST['rejectmid'];
$q="UPDATE `contact_info` SET status='reject' WHERE Farmer_id='".$rejectmid."'";
$fire=mysqli_query($conn,$q);
if ($fire){
    echo "<script>alert('Successfuly Reject');</script>";
        echo "<script>window.location.href='contact_pending_list.php'; </script>";
}
}
?>