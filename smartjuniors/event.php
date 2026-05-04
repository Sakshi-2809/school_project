<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Events | Lincoln High School</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600&family=Baloo+2:wght@400;600&family=Luckiest+Guy&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600&family=Baloo+2:wght@400;600&family=Chewy&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600&family=Fredoka:wght@400;500;600&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600&family=Chewy&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600&family=Chewy&family=Fredoka:wght@400;500;600&display=swap" rel="stylesheet">

		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="primary-header">
					<div class="container">
						<a href="index.php" id="branding">
							<img src="dummy/logo.png" alt="">
							<h1 class="site-title"></h1>
						</a> <!-- #branding -->
						
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="index.php">Home</a></li>
								<li class="menu-item"><a href="course.php">Programmes</a></li>
								<li class="menu-item current-menu-item"><a href="event.php">Event</a></li>
								<li class="menu-item"><a href="gallery.php">Gallery</a></li>
								<li class="menu-item"><a href="contact.php">Contact</a></li>
								<li class="menu-item"><a href="why.php">Why Smart Juniors</a></li>

								<li class="menu-item"><a href="testimonials.php" class="admin-login">Testimonials</a></li>

							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->

						<div class="mobile-navigation"></div>
					</div> <!-- .container -->
				</div> <!-- .primary-header -->

				<div class="page-title">
					<div class="container">
						<h2>Our events are perfect</h2>
					</div>
				</div>
			</header>
		</div>

		<main class="main-content">
			<div class="fullwidth-block inner-content">
				<div class="container">
					<div class="fullwidth-content">
						<h2 class="section-title"><i class="icon-calendar-lg"></i> Upcoming events</h2>

<?php

$query = "SELECT * FROM events ORDER BY e_date ASC";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
?>

<div class="accordion">

<div class="accordion-toggle">

<h3><?php echo $row['title']; ?></h3>

<span class="date">
<i class="icon-calendar"></i>
<?php echo $row['e_date']; ?>
</span>

<span class="location">
<i class="icon-map-marker"></i>
<?php echo $row['location']; ?>
</span>

</div>

<div class="accordion-content">

<p>
Event Time : <?php echo $row['e_time']; ?>
</p>

</div>

</div>

<?php
}
?>

					</div>
				</div>
			</div> <!-- .fullwidth-block -->
		</main>

		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Contact us</h3>
							<address>Smart Juniors<br>F-19, P.C. COLONY, KANKARBAGH, PATNA  <br>Pin Code:-800020</address>

							<a href="mailto:smartjuniors.info@gmail.com">smartjuniors.info@gmail.com</a> <br>
							<a href="tel:9162672174">(+91) 9162672174</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Social media</h3>
							<p>Connect us here.</p>
							<div class="social-links circle">
								<a href="https://www.facebook.com/smartschoolkankarbaghpatna?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a>
								<a href="https://www.youtube.com/@manishasuhasini1858"><i class="fa fa-youtube"></i></a>
								<a href="https://x.com/juniors_sm42381"><i class="fa fa-twitter"></i></a>
							
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Featured Students</h3>
							<ul class="student-list">
								<li><a href="#">
										<img src="dummy/img1.jpg" alt="" class="avatar">
										<span class="fn">Saloni kumari</span>
										<span class="average">Playgroup</span>
									</a></li>
								<li><a href="#">
										<img src="dummy/img2.jpg" alt="" class="avatar">
										<span class="fn">Amit kumar</span>
										<span class="average"><br>LKG</span>
									</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3">
						<div class="widget">
							<h3 class="widget-title">Reach us</h3>
							<p></p>
							<div> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.4355496806043!2d85.1532333!3d25.590439399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed588e99b8ae33%3A0xefe1986bddedec4b!2sSmart%20Juniors%2C%20Play%20%26%20Preparatory%20School!5e0!3m2!1sen!2sin!4v1773851713149!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>      </div>
							
						</div>
					</div>
				</div>

				<div class="copy">Copyright 2026 ,Smart Juniors. All rights reserved.</div>
			</div>

		</footer>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>    