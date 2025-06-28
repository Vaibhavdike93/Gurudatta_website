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
            <h1>Drone Appointment Reject List</h1>
            <table class="table-bordered" cellpadding="10px" border="1" width="100%">
                <tr>
                    <th>Sr. No</th>
                    <th>Farmer Name</th>
                    <th>Farmer Mobile</th>
                    <th>Farmer Area</th>
                    <th>Farmer Crop Name</th>
                    <th>Farmer Address</th>
                    <th>Date</th>
                </tr>
           <?php
           $q="SELECT * FROM `drone_book` WHERE status='reject'";
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