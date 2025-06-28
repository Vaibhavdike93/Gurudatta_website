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
            <h1>Contact Reject List</h1>
            <table class="table-bordered" cellpadding="10px" border="1" width="100%">
                <tr>
                    <th>Sr. No</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Msg</th>
                    <th>Date</th>
                </tr>
           <?php
           $q="SELECT * FROM `contact_info` WHERE status='reject'";
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