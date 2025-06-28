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
            <h1>Updated Stock List</h1>
            <table class="table-bordered" cellpadding="10px" border="1" width="100%">
                <tr>
                    <th>Sr.no</th>
                    <th>Details</th>
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
           <?php
           $q="SELECT * FROM `stock_details`";
           $fire=mysqli_query($conn,$q);
           $i=1;
           while($row=mysqli_fetch_assoc($fire)){
           ?>
                <tr>
                    <th><?=$i++;?></th>
                    <th><?=$row['Details'];?></th>
                    <th><?=$row['Weight'];?></th>
                    <th><?=$row['Price'];?></th>
                    <th><?=$row['Stock'];?></th>
                    <th><?=$row['date'];?></th>
                    <th>
                    <a href="delete_stock.php?id=<?=$row['id'];?>"><button class="btn btn-primary">Delete</button></a>
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