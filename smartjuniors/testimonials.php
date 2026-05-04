<!-- testimonials.php -->

<?php
include("includes/db.php");

$query = "SELECT * FROM testimonials ORDER BY id DESC";
$result = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Smart Juniors - Testimonials</title>

	<link href="http://fonts.googleapis.com/css?family=Arvo:400,700|" rel="stylesheet">
	<link href="fonts/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">

</head>

<body>

<div id="site-content">

	<header class="site-header">

		<div class="primary-header">

			<div class="container">

				<a href="index.php" id="branding">
					<img src="dummy/logo.png" alt="">
				</a>

				<div class="main-navigation">

					<button type="button" class="menu-toggle">
						<i class="fa fa-bars"></i>
					</button>

					<ul class="menu">

						<li class="menu-item"><a href="index.php">Home</a></li>
						<li class="menu-item"><a href="course.php">Programmes</a></li>
						<li class="menu-item"><a href="event.php">Event</a></li>
						<li class="menu-item"><a href="gallery.php">Gallery</a></li>
						<li class="menu-item"><a href="contact.php">Contact</a></li>
						<li class="menu-item"><a href="why.php">Why Smart Juniors</a></li>
						<li class="menu-item current-menu-item">
							<a href="testimonials.php">Testimonials</a>
						</li>

					</ul>

				</div>

			</div>

		</div>

	</header>

	<div class="fullwidth-block">
		<div class="container">

			<h2 class="section-title text-center">
				What our Parents say
			</h2>

		</div>
	</div>

	<div class="tabs">

		<ul class="filter-controls">

			<li>
				<a href="#" data-filter="*" class="selected">
					Show All
				</a>
			</li>

			<li>
				<a href="#" data-filter=".Parents">
					Parents
				</a>
			</li>

			<li>
				<a href="#" data-filter=".kids">
					Kids
				</a>
			</li>

			<li>
				<a href="#" data-filter=".teachers">
					Teachers
				</a>
			</li>

			<li>
				<a href="#" data-filter=".administrator">
					Administrator
				</a>
			</li>

		</ul>

	</div>

	<div class="gallery-grid">

		<?php while($row = mysqli_fetch_assoc($result)){ ?>

			<div class="grid-item <?php echo $row['category']; ?>">

    <a href="uploads/<?php echo $row['video']; ?>" target="_blank">

        <div class="thumb-wrapper">

            <video muted preload="metadata">
                <source src="uploads/<?php echo $row['video']; ?>" type="video/mp4">
            </video>

            <div class="play-icon">
                <i class="fa fa-play-circle"></i>
            </div>

        </div>

    </a>

</div>


		<?php } ?>

	</div>
<br>
<br>
	<footer class="site-footer">

		<div class="container">

			<div class="copy">
				Copyright 2026 ,Smart Juniors. All rights reserved.
			</div>

		</div>

	</footer>

</div>

<script>

document.querySelectorAll(".filter-controls a").forEach(btn=>{

	btn.addEventListener("click",function(e){

		e.preventDefault()

		let filter = this.getAttribute("data-filter")

		document.querySelectorAll(".grid-item").forEach(item=>{

			if(filter=="*"){
				item.style.display="block"
			}
			else{

				if(item.classList.contains(filter.substring(1))){
					item.styledisplay="block"
				}
				else{
					item.style.display="none"
				}

			}

		})

		document.querySelectorAll(".filter-controls a").forEach(b=>b.classList.remove("selected"))

		this.classList.add("selected")

	})

})

</script>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>
</html>
