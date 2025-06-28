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
								<h1 class="text-light" style="font-size: 60px; margin-bottom: 0px; margin-top: 170px;">Contact Us</h1>
								<h6 class="text-center mt-2">
								<a class="text-decoration-none text_2" href="index.html">Home 
									<span><i class="fa-solid fa-angle-right text-light " aria-hidden="true"></i></span> 
									<span class="text-light">Contact Us</span></a></h6>
							</div>
						</div>
					</div>
				</div>
		</section>

		<section class="back_color">
			<div class="container">
				<div class="row">
					<div class="col-md-4  mt-5 mb-5">
						<div class="contact_col text-center">
							<i class="fa-solid fa-phone"></i>
							<h2 class="mt-4">+91 90119 26254</h2>
						</div>
					</div>
					<div class="col-md-4 mt-5 mb-5">
						<div class="contact_col text-center">
							<i class="fa-solid fa-map-location-dot"></i>
							<h4 class="mt-4">Shreeramnagar, Jainpur,Tal.Newasa, Dist.Ahilyanagar-413725</h4>
						</div>
					</div>
					<div class="col-md-4 mt-5 mb-5">
						<div class="contact_col text-center">
							<i class="fa-solid fa-envelope"></i>
							<h6 class="mt-4">rushisanap20019623336958@gmail.com</h6>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="back_color">
			<div class="container ">
				<div class="row">
					<div class="col-md-4 mt-3 mb-5">
						<p class="font_2 mt-4 ms-2 fs-4">Contact now</p>
						<h1 class="font_1"	>Get in Touch with Us</h1>
						<p class="fs-3 mt-4">We are committed to providing our customers with exceptional service while offering our Farmer the best training.</p>
						<a href="#"><i class="fa-brands fa-facebook fs-1 ms-4 font_1 mt-3 "></i></a> 
						<a href="#"><i class="fa-brands fa-square-instagram fs-1 ms-4  font_1 mt-3"></i></a> 
					</div>

					<div class="col-md-8 mt-3 mb-5 ">
						<form action="contact_save.php" method="post" enctype="multipart/form-data">
						<div class="row mt-3">
							<div class="col-md-6 form-group mt-3" >
								<input type="text" name="name" placeholder="Enter your name*" class="form-control fs-4">
							</div>
							<div class="col-md-6 form-group mt-3" >
								<input type="text" name="location" placeholder="Enter your location*" class="form-control fs-4">
							</div>
						</div>

						<div class="row">
							<div class="col-md-6 form-group mt-3">
								<input type="email" name="email" placeholder="Email*" class="form-control fs-4">
							</div>
							<div class="col-md-6 form-group mt-3">
								<input type="number" name="number" placeholder="Phone *" class="form-control fs-4">
							</div>
						</div>

						<div class="col-12 mt-3 mb-3">
							<textarea class="textarea form-control fs-4" placeholder="Write Message *" rows="6" name="msg"></textarea>
						</div>

						<div class="col-12 mt-4 mb-3 ">
							<a href="#"><button class="button_1 ms-2 ">Send Message</button></a>	
						</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="back_color">
			<div class="container">
				<div class="row">
					<div class="col-12 mt-3 mb-5">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7515.344009165365!2d74.86536!3d19.6413155!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdc87001ffb180d%3A0x5a4408a5ce2d68fd!2sGurudatta%20Krushi%20Seva%20Kendra%20Jainpur!5e0!3m2!1sen!2sin!4v1737351140789!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	
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