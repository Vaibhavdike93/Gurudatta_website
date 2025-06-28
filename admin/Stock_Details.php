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
            <h1>Stock Details List</h1>
            <form action="Stock_Details_save.php" method="post" enctype="multipart/form-data">
            <table class="table-bordered" cellpadding="10px" border="1" width="100%">
                <tr>
                    <th>Details</th>
                    <th>Weight</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><input type="text" name="Details" placeholder="Product Details*" class="form-control" required></td>
                    <td><input type="text" name="Weight" placeholder="Product Weight*" class="form-control" required></td>
                    <td><input type="text" name="Price" placeholder="Product Price*" class="form-control" required></td>
                    <td><input type="text" name="Stock" placeholder="Product Stock*" class="form-control" required></td>
                    <td>
                       <button class="btn btn-primary">Update</button>
                    </td>
                </tr>

          
            </table>
            </form>
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

