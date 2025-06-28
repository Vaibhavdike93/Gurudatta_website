<?php
include("header.php");
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
								<h1 class="text-light" style="font-size: 60px; margin-bottom: 0px; margin-top: 170px;">Book Drone</h1>
								<h6 class="text-center mt-2">
								<a class="text-decoration-none text_2" href="mypage.php">Home 
									<span><i class="fa-solid fa-angle-right text-light " aria-hidden="true"></i></span> 
									<span class="text-light">Book Drone</span></a></h6>
							</div>
						</div>
					</div>
				</div>
		</section>

		<section class="back_color">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center mt-5 mb-5">
						<h1 class="font_1">Book Drone Appointment </h1>
					</div>
				</div>
			</div>
		</section>

		<section class="back_color">
		<div class="container">
			<div class="row">
				<div class="col-3 mb-5">
				</div>
				<div class="col-md-6 mb-5">
					<div class="card text-center border-0 shadow-lg rounded box_col">
						<div class="card-header border-0 bg-transparent ">
							<h3 class="font_2 mt-3">Get Appointment now</h3>
						</div>
						<div class="card-body">
						<form action="book_drone_save.php" method="post" enctype="multipart/form-data">
						<input type="text" name="name" placeholder="Your Name *" class="form-control rounded" required>
							<input type="number" name="number" placeholder="Contact number *" class="form-control rounded mt-3" required>

							<select name="workarea" class="form-control rounded mt-3" required>
								<option>Select your Area</option>
								<option>1 Acre</option>
								<option>1.5 Acre</option>
								<option>2 Acre</option>
								<option>2.5 Acre</option>
								<option>3 Acre</option>
								<option>3.5 Acre</option>
								<option>4 Acre</option>
								<option>4.5 Acre</option>
								<option>5 Acre</option>
								<option>5.5 Acre</option>
								<option>6 Acre</option>
								<option>6.5 Acre</option>
								<option>7 Acre</option>
								<option>7.5 Acre</option>
								<option>8 Acre</option>
								<option>8.5 Acre</option>
								<option>9 Acre</option>
								<option>9.5 Acre</option>
								<option>10 Acre</option>
							</select>

							<select name="workType" class="form-control rounded mt-3" required>
								<option>Select your Crop Name</option>
								<option>Jowar</option>
								<option>Bajra</option>
								<option>Wheat</option>
								<option>Groundnut</option>
								<option>Sunflower</option>
								<option>Soybean</option>
								<option>Cotton</option>
								<option>Sugarcane</option>
								<option>Turmeric</option>
								<option>Mango</option>
								<option>Banana</option>
								<option>vegetables</option>
								<option>Tur</option>
								<option>Moong</option>
								<option>Udid</option>
								<option>Sunflower</option>
								<option>All fruits</option>
								<option>Maize</option>
								<option>Harbhara</option>
								<option>Masoor</option>
								<option>Javas</option>
							</select>

							<textarea class="form-control mt-3 mb-3" placeholder="Enter Your Address *" required rows="4" name="Address"></textarea>
						
						</div>
						<div class="card-header bg-transparent border-0">
							<a href="#"><button class="Enquire_btn mb-3">Send Message</button></a>	
						</div>
						</form>
					</div>
				</div>
				<div class="col-3"></div>
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