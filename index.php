
<html>
<head>
	<?php include('inc/head.php'); ?>
</head>

<body>
	<div class="hero-banner">
		<?php include('inc/header.php'); ?>
		<section id="hero" class="d-flex justify-content-center align-items-center">
			<div class="container position-relative aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
				<div class="text-center">
					<h1>RESERVE. PLAY. REPEAT</h1>
					<p>Book Your Slot at Your Desired Venue.</p>
				</div>
			</div>
		</section>
	</div>
	<section class="middle-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center section-title">Amenities</h2>
				</div>
			</div>
			<div class="row mt-5 g-5">
				<div class="col-lg-6 mt-0">
					<div class="box-shadow">
						<div class="row">
							<div class="col-lg-6 p-0">
								<div class="left-content">
									<img src="assets/images/badminton.jpg" class="img-fluid">
									<div class="count-users">
										<a href="#"><i class="fa fa-users"></i>&nbsp;<span>12</span></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 p-0">
								<div class="right-content">
									<div class="heading-sports">
										<h4><a href="#">Badminton</a></h4>
									</div>
									<a href="#" class="btn btn-bg">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-0">
					<div class="box-shadow">
						<div class="row">
							<div class="col-lg-6 p-0">
								<div class="left-content">
									<img src="assets/images/table-tennis.jpg" class="img-fluid">
									<div class="count-users">
										<a href="#"><i class="fa fa-users"></i>&nbsp;<span>4</span></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 p-0">
								<div class="right-content">
									<div class="heading-sports">
										<h4><a href="#">Table Tennis</a></h4>
									</div>
									<a href="#" class="btn btn-bg">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row g-5 mt-2">
				<div class="col-lg-6">
					<div class="box-shadow">
						<div class="row">
							<div class="col-lg-6 p-0">
								<div class="left-content">
									<img src="assets/images/cricket.jpg" class="img-fluid">
									<div class="count-users">
										<a href="#"><i class="fa fa-users"></i>&nbsp;<span>40</span></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 p-0">
								<div class="right-content">
									<div class="heading-sports">
										<h4><a href="#">Cricket</a></h4>
									</div>
									<a href="#" class="btn btn-bg">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="box-shadow">
						<div class="row">
							<div class="col-lg-6 p-0">
								<div class="left-content">
									<img src="assets/images/lawn-tennis.jpg" class="img-fluid">
									<div class="count-users">
										<a href="#"><i class="fa fa-users"></i>&nbsp;<span>10</span></a>
									</div>
								</div>
							</div>
							<div class="col-lg-6 p-0">
								<div class="right-content">
									<div class="heading-sports">
										<h4><a href="#">Lawn Tennis</a></h4>
									</div>
									<a href="#" class="btn btn-bg">View Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bottom-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="form-section">
						<h2 class="section-title">Ask Your Queries</h2>
						<form class="query-form">
							<div class="row">
								<div class="col-6">
									<label for="name" class="form-label"></label>
									<input type="text" class="form-control" id="" placeholder="Name" required>
								</div>
								<div class="col-6">
									<div class="mb-3">
									  <label for="email" class="form-label"></label>
									  <input type="email" class="form-control" id="" placeholder="Email" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
									  <label for="Message" class="form-label"></label>
									  <textarea class="form-control" id="" rows="3" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="submit-button">
								<input type="submit" class="btn btn-submit btn-sm" name="submit" value="Send">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include('inc/footer.php'); ?>
	</body>
</html>