<?php
include("header.php");
include("conn.php");
?>
<body>
	<main>
		<?php
		include("menu.php");
		?>

		<section>
			<div class="container-fluid p-0 overflow-hidden ">
					<div class="row ">
						<div class="col-12 header_image">
							<div class="w-100 text-center">
								<h1 class="text-light" style="font-size: 60px; margin-bottom: 0px; margin-top: 170px;">Products</h1>
								<h6 class="text-center mt-2">
								<a class="text-decoration-none text_2" href="index.html">Home 
									<span><i class="fa-solid fa-angle-right text-light " aria-hidden="true"></i></span> 
									<span class="text-light">Products</span></a></h6>
							</div>
						</div>
					</div>
				</div>
		</section>

		<section class="back_color">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="font_1 mt-5 mb-4">Stock Details</h1>
						<div class="table-responsive">
						<table class="table table-striped table-hover shadow table-bordered ">
						  <thead>
						    <tr class="table-dark">
						      	<th>Sr.no</th>
			                    <th>Details</th>
			                    <th>Weight</th>
			                    <th>Price</th>
			                    <th>Stock</th>
						    </tr>
						  </thead>
						  <tbody>
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
					                </tr>
					           <?php
					            }
					           ?>
						  </tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="back_color">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center mt-5 mb-5">
						<h1 class="font_1">Products</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="back_color">
			<div class="container-fluid p-0 overflow-hidden">
				<div class="row">
					<div class="col-12 mb-3">
						<h1 class="font_2 text-center ">Available Brands</h1>


						<marquee Scrollamount="20" height="150px" >
							<img src="Product-1.jpg" class="marquee_img">
							<img src="Product-2.jpg" class="marquee_img">
							<img src="Product-3.jpg" class="marquee_img">
							<img src="Product-4.jpg" class="marquee_img">
							<img src="Product-5.jpg" class="marquee_img">
							<img src="Product-6.jpg" class="marquee_img">
							<img src="Product-7.jpg" class="marquee_img">
							<img src="Product-8.jpg" class="marquee_img">
							<img src="Product-9.jpg" class="marquee_img">
							<img src="Product-10.jpg" class="marquee_img">
							<img src="Product-11.jpg" class="marquee_img">
							<img src="Product-12.jpg" class="marquee_img">
						</marquee>
					</div>
				</div>
			</div>
		</section>

		<section class="back_color">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="font_2 text-center ">Best Selling Products</h1>
					</div>
				</div>
			</div>
		</section>

		<section class="back_color">
			<div class="container">
				<div class="row">
					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro1.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro2.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro3.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro4.jpg" class="product_size mt-3">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro5.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro6.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro7.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro8.jpg" class="product_size mt-3">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro9.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro10.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro11.jpg" class="product_size mt-3">
						</div>
					</div>

					<div class="col-md-3 mt-3 mb-5">
						<div class="product_class text-center">
							<img src="pro12.jpg" class="product_size mt-3">
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		include("footer.php");
		?>
		
	<script type="text/javascript" src="script.js"></script>

	</main>

</body>
</html>