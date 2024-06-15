<html>
	<head>
	  <?php include('inc/head.php'); ?>

	</head>
	<body >
		<div class="top-banner table-tennis-page">
			<?php include('inc/header.php'); ?>
		</div>
		<section class="banner-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 p-0">
						<div class="heading-box">
							<h2>Table Tennis</h2>
							<br>
							<a href="#" class="btn btn-black">Book Venue</a>
						</div>
					</div>
					<div class="col-lg-2 border-right">
						<div class="booking">
							<h5>Available Hours</h5>
							<p>6 AM to 11:59 PM
							Weekdays and Weekends</p>
						</div>
					</div>
					<div class="col-lg-2 border-right">
						<div class="booking">
							<h5>Capacity</h5>
							<p>2 or 4 people per
							 slot per table</p>
						</div>
					</div>
					<div class="col-lg-2 border-right">
						<div class="booking">
							<h5>Location</h5>
							<p>206, B Wing, Gurugram</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="title-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Gallery</h2>
					</div>
				</div>
			</div>
		</section>
		<section class="sliding-banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4">
						<div class="heading-banner">
							<h2>Wing A</h2>
						</div>
						<div class="owl-carousel">
						  <div> <img src="assets/images/table-tennis1.png"> </div>
						  <div> <img src="assets/images/table-tennis2.png"> </div>
						  <div> <img src="assets/images/table-tennis3.png"> </div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="heading-banner">
							<h2>Wing B</h2>
						</div>
						<div class="owl-carousel">
						  <div> <img src="assets/images/table-tennis4.png"> </div>
						  <div> <img src="assets/images/table-tennis5.png"> </div>
						  <div> <img src="assets/images/table-tennis6.png"> </div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="heading-banner">
							<h2>Wing C</h2>
						</div>
						<div class="owl-carousel">
						  <div> <img src="assets/images/table-tennis7.png"> </div>
						  <div> <img src="assets/images/table-tennis8.png"> </div>
						  <div> <img src="assets/images/table-tennis9.png"> </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="title-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Description</h2>
					</div>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="title-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h2>Terms & Conditions</h2>
					</div>
				</div>
			</div>
		</section>
		<section class="description">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p>Tennis Court slots are available between 6 AM to 11:59 PM on both Weekdays and Weekends.</p>
						<p>At max, a User can book the slot for only 2 hours in a week.</p>
					</div>
				</div>
			</div>
		</section>
		<?php include('inc/footer.php'); ?>
	</body>
	<script src="js/jquery-3.7.1.min.js"></script>
	<script src="assets/owlcarousel/owl.carousel.min.js"></script>
	<script type="text/javascript">
// 		$(document).ready(function(){
//   $(".owl-carousel").owlCarousel();
// });
		$(document).ready(function () {
    (function ($) {
        $('.owl-carousel').owlCarousel({
            items: 1,
            pagination: true,
            nav: false,
            autoplay:true,
            autoPlay: 3000,
            loop:true
        });
    })(jQuery);
});
	</script>
</html>