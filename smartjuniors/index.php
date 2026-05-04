<?php
include("includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Smart Juniors school</title>
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
						<a href="index.php" class="branding">
							<img src="dummy/logo.png" alt="">
						</a> 
						
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
								<li class="menu-item"><a href="course.php">Programmes</a></li>
								<li class="menu-item"><a href="event.php">Event</a></li>
								<li class="menu-item"><a href="gallery.php">Gallery</a></li>
								<li class="menu-item"><a href="contact.php">Contact</a></li>
								<li class="menu-item"><a href="why.php">Why Smart Juniors</a></li>

								<li class="menu-item"><a href="testimonials.php" class="admin-login">Testimonials</a></li>
							
							</ul> <!-- .menu -->




						</div> <!-- .main-navigation -->

						<div class="mobile-navigation"></div>
					</div> <!-- .container -->
				</div> <!-- .primary-header -->

				<div class="home-slider">
					<div class="container">
						<div class="slider">
							<ul class="slides">
    <li>
        <div class="slide-caption">
            <h2 class="slide-title">Smart Juniors</h2>
            <p>Welcome to our school</p>
        </div>
        <img src="images/slide1.jpg" alt="">
    </li>

    <li>
        <div class="slide-caption">
            <h2 class="slide-title">Fun & Learning</h2>
            <p>Activity based education</p>
        </div>
        <img src="images/slide2.jpg" alt="">
    </li>

    <li>
        <div class="slide-caption">
            <h2 class="slide-title">Creative Kids</h2>
            <p>Building imagination</p>
        </div>
        <img src="images/slide3.jpg" alt="">
    </li>

    <li>
        <div class="slide-caption">
            <h2 class="slide-title">Smart Classes</h2>
            <p>Audio visual learning</p>
        </div>
        <img src="images/slide4.jpg" alt="">
    </li>

    <li>
        <div class="slide-caption">
            <h2 class="slide-title">Happy Vibe</h2>
            <p>Safe and joyful place</p>
        </div>
        <img src="images/slide5.jpg" alt="">
    </li>
</ul>
<!-- .slides -->
						</div> <!-- .slider -->
					</div> <!-- .container -->
				</div> <!-- .home-slider -->
			</header>
		<!-- </div> -->
<center><a href="admin/login.php" class="admin-login">Admin</a></li></center>
		<main class="main-content">
			<div class="fullwidth-block">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<h2 class="section-title"><i class="icon-newspaper"></i> Notices</h2>
							<ul class="posts">

							<?php

							$query = "SELECT * FROM notices ORDER BY n_date DESC LIMIT 3";
							$result = mysqli_query($conn, $query);
							if(mysqli_num_rows($result) > 0){
							while($row = mysqli_fetch_assoc($result)){

							echo "<li class='post'>";

							echo "<h3 class='entry-title'>
							<a href='notice.php?id=".$row['id']."'>".$row['title']."</a>
							</h3>";

							echo "<span class='date'>
							<i class='icon-calendar'></i> ".$row['n_date']."
							</span>";

							echo "<span class='author'>
							<i class='icon-user'></i> Admin
							</span>";

							echo "</li>";

							}
							}else{ echo "<li>No notices available</li>"; }
							?>

							</ul>
							<p class="text-center">
								<button onclick="openPopup()" class="button">
									See more
								</button>
							</p>

						<!--	<p class="text-center">
								<a href="#" class="more button secondary">See older News</a>
							</p>
						-->
						</div>
						<div class="col-md-4">
							<h2 class="section-title"><i class="icon-calendar-lg"></i> Upcoming Events</h2>
							<ul class="posts">
								<?php

								$today = date("Y-m-d");

								$query = "SELECT * FROM events WHERE e_date >= '$today' ORDER BY e_date ASC LIMIT 3";
								$result = mysqli_query($conn, $query);

								if(mysqli_num_rows($result) > 0){

									while($row = mysqli_fetch_assoc($result)) {

										echo "<li class='post'>";
										echo "<h3 class='entry-title'>
										<a href='event.php?id=".$row['id']."'>".$row['title']."</a>
										</h3>";

										echo "<span class='date'>
										<i class='icon-calendar'></i> ".$row['e_date']."
										</span>";

										echo "<span class='location'>
										<i class='icon-map-marker'></i> ".$row['location']."
										</span>";

										echo "</li>";

									}

								}else{

									echo "<li>No upcoming events</li>";

								}

								?>
							</ul>
							<p class="text-center">
								<a href="event.php" class="button">See more events</a>
							</p>

							<!--<p class="text-center">
								<a href="#" class="more button secondary">See more event</a>
							</p>  -->
						</div>
						<div class="col-md-4">
							<h2 class="section-title"><i class="icon-book"></i> Courses</h2>
							<ul class="posts">
								<li class="post">
									<h3 class="entry-title"><a href="#" onclick="openCoursePopup('Playgroup')">Play group</a></h3>
									<span class="date"><i class="icon-calendar"></i> Admission is going on</span>
									<span class="time"><i class="icon-clock"></i>09:00am-2:00pm</span>
								<!--	<span class="price"><i class="icon-coins"></i>5555.00</span> -->
								</li>
								<li class="post">
									<h3 class="entry-title"><a href="#" onclick="openCoursePopup('Nursery')">Nursery</a>
</h3>
									<span class="date"><i class="icon-calendar"></i>  Admission is going on</span>
									<span class="time"><i class="icon-clock"></i>09:00am-2:00pm</span>
							<!--		<span class="price"><i class="icon-coins"></i>6555.00</span>  -->
								</li>
								<li class="post">
									<h3 class="entry-title">
										<a href="#" onclick="openCoursePopup('LKG')">LKG</a>
									</h3>

									<span class="date"><i class="icon-calendar"></i> Admission is going on</span>
									<span class="time"><i class="icon-clock"></i>09:00am-2:00pm</span>
						<!--			<span class="price"><i class="icon-coins"></i>7555.00</span>  -->
								</li>
								<li class="post">
									<h3 class="entry-title"><a href="#" onclick="openCoursePopup('UKG')">UKG</a></h3>
									<span class="date"><i class="icon-calendar"></i> Admission is going on</span>
									<span class="time"><i class="icon-clock"></i>09:00am-2:00pm</span>
								<!--	<span class="price"><i class="icon-coins"></i>8555.00</span> -->
								</li>
							</ul>
						<!--	<p class="text-center">
								<a href="course.html" class="more button secondary">See more courses</a>
							</p>  -->
						</div>
					</div> <!-- .row -->
				</div>
			</div> <!-- .fullwidth-block -->

			<div class="fullwidth-block">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="boxed-section request-form">
								<h2 class="section-title text-center">Request information</h2>
								<form action="#">
									<div class="field">
										<label for="email">Email Address:</label>
										<div class="control"><input type="text" id="email" placeholder="smartjuniors.info@gmail.com"></div>
									</div>
									<div class="field">
										<label for="name">Your name:</label>
										<div class="control"><input type="text" id="name" placeholder="Amit"></div>
									</div>
									<div class="field">
										<label for="interest">Area of Interest</label>
										<div class="control">
											<select name="#" id="interest">
												<option value="other">Franchise</option>
												<option value="other">Admission</option>
												<option value="other">Other</option>
												
											</select>
										</div>
									</div>
									<div class="field">
										<label for="program">Program of Interest</label>
										<div class="control">
											<select name="#" id="program">
												<option value="other">PlayGroup</option>
												<option value="other">Nursery</option>
												<option value="other">UKG</option>
												<option value="other">LKG</option>
											</select>
										</div>
									</div>
									<div class="field no-label">
										<div class="control">
											<input type="submit" class="button" value="Submit request">
										</div>
									</div>
								</form>
							</div> <!-- .boxed-section .request-form -->
						</div>
						<div class="col-md-6">
							<div class="boxed-section best-students">
								<h2 class="section-title  text-center">About Smart Juniors</h2>
								<p>Solid foundation & Overall Personality development<br>Activity based learning for Toddlers <br>Audio-Video and Colourfull Classroom 
								<br>Learning with Talking Books<br>Art & Craft workshop <br>Indoor/Outdoor games <br>Affordable Fee structure<br> Spoken english & Motherly care
								<br>Extra classes for weak students <br> Day-care facility available<br> For Free Counselling, Visit us</p>

								<!-- <ul class="best-students-grid">
									<li class="student"><a href="#"><img src="dummy/student-md-1.jpg" alt="student 1"></a></li>
									<li class="student"><a href="#"><img src="dummy/student-md-2.jpg" alt="student 2"></a></li>
									<li class="student"><a href="#"><img src="dummy/student-md-3.jpg" alt="student 3"></a></li>
									<li class="student"><a href="#"><img src="dummy/student-md-4.jpg" alt="student 4"></a></li>
									<li class="student"><a href="#"><img src="dummy/student-md-5.jpg" alt="student 5"></a></li>
									<li class="student"><a href="#" class="more-student">See more</a></li>
								</ul> -->
							</div> <!-- .boxed-section .best-students -->
						</div>
					</div>  <!-- .row -->
				</div> <!-- .container -->
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
		</div>


		<div id="noticePopup" class="popup">

			<div class="popup-content">
				<span class="close-btn" onclick="closePopup()">&times;</span>

				<h2>All Notices</h2>

				<div class="notice-list">

					<?php
					$query = "SELECT * FROM notices ORDER BY n_date DESC";
					$result = mysqli_query($conn, $query);

					while($row = mysqli_fetch_assoc($result)){

						echo "<div class='notice-item'>";
						echo "<h3>".$row['title']."</h3>";
						echo "<p>".$row['n_date']."</p>";
						echo "<p>".$row['content']."</p>";
						echo "</div>";
					}
					?>

				</div>
			</div>

		</div>

		<div id="coursePopup" class="popup">
			<div class="popup-content">
				<span class="close-btn" onclick="closeCoursePopup()">&times;</span>
				
				<h2 id="courseTitle"></h2>
				<p id="courseContent"></p>
				
			</div>
		</div>

				<!-- POPUP -->
<div id="franchisePopup" class="popup">
    <div class="popup-content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        
        <h2>Franchise Enquiry/Or Call @ 9162672174</h2>

        <form>
            <input type="text" placeholder="Your Name" required><br>
            <input type="text" placeholder="Mobile Number" required><br>
            <input type="email" placeholder="Email" required><br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
<script>
	
function openCoursePopup(course){
    document.getElementById("coursePopup").style.display = "block";

    // Dynamic content
    let title = document.getElementById("courseTitle");
    let content = document.getElementById("courseContent");

    if(course == "Playgroup"){
		title.innerText = "Playgroup";

		content.innerHTML = `
		<p><b>Age:</b> 1.5 to 2.5 years (Time: 3 hours, 5 days in a week)</p>

		<p>This is a child’s first exposure to school, so we make them feel comfortable. The entire program is based on learning with fun, keeping their interest alive and developing curiosity.</p>

		<p><b>Posture & Discipline:</b> Helps toddlers develop routine, discipline and sitting habits during their first time away from home.</p>

		<p><b>Bathroom Etiquettes:</b> Basic toilet training and hygiene habits are taught.</p>

		<p><b>Learning Activities:</b> Learning through fun-based activities.</p>

		<p><b>Smart Classes:</b> Audio-visual learning methods are used.</p>

		<p><b>Talking Pen & Books:</b> Helps in developing early speaking and pronunciation skills.</p>

		<p><b>Motor Skills:</b> Activities designed to improve hand movement and coordination.</p>

		<p><b>Healthy Food Habits:</b> Awareness about healthy vs junk food and encouragement to eat healthy.</p>

		<p><b>Sharing & Caring:</b> Taught through role play and activities.</p>

		<p><b>Story Time:</b> Improves imagination, vocabulary and communication skills.</p>
		`;
	}

    else if(course == "Nursery"){
		title.innerText = "Nursery";

		content.innerHTML = `
		<p><b>Age:</b> 2.5 to 3.5 years (Time: 3.5 hours, 5 days in a week)</p>

		<p><b>English Alphabet:</b> Letter recognition A to Z (upper & lower case), proper writing in four-line copy with focus on handwriting. Picture recognition with names.</p>

		<p><b>Number Skills (1-100):</b> Object counting, number tracing with interactive games. Oral and written practice.</p>

		<p><b>Story Telling (Rhymes & Stories):</b> Talking and singing rhymes and stories.</p>

		<p><b>Social Skills:</b> Self-help skills (opening bags, using water bottle, table manners), interpersonal behaviour, hygiene and safety, value etiquettes.</p>

		<p><b>Creative Skills (Art):</b> Colouring and craft activities to enhance creativity and imagination.</p>

		<p><b>Akshar Parichay (Hindi):</b> Varna Mala, sound recognition, identification, board work and dictation. Practice of swar and vyanjan with activities.</p>

		<p><b>GK & GS:</b> Things around us, transport etiquettes and general knowledge (oral).</p>
		`;
	}

    else if(course == "LKG"){
		title.innerText = "LKG";

		content.innerHTML = `
		<p><b>Age:</b> 3.5 - 4.5 years (Time: 3.5 hours, 5 days in a week)</p>

		<p>In LKG we expose kids to our well researched multi development program to build a strong foundation in early childhood education.</p>

		<p><b>Verbal Communication:</b> Three letter words with short vowel sounds and age appropriate concepts.</p>

		<p><b>Writing Skills (Capital & Small Letters):</b> Extensive practice of capital and small letters. Writing on two and three lines with focus on handwriting.</p>

		<p><b>Number Skills (1-100):</b> Writing and counting, skip counting, backward counting and number names.</p>

		<p><b>Creative Skills (Art):</b> Colouring and creative craft activities to improve imagination.</p>

		<p><b>Words & Vocabulary:</b> Vocabulary building with riddles and reasoning games in English.</p>

		<p><b>Language Skills (Shabd Gyan):</b> Introduction to 2, 3 and 4 letter words and simple sentences with reading practice.</p>

		<p><b>Writing Skills (Shabd Rachna):</b> Practice of words and sentences with fun activities.</p>

		<p><b>Moral Values:</b> Rhymes and stories in Hindi and English with role play.</p>

		<p><b>Social Skills:</b> Save earth, save water, save electricity. Avoid wastage.</p>

		<p><b>GK & GS:</b> Things around us, transport etiquettes and general knowledge (oral and written).</p>

		<p><b>Good Manners:</b> At school, home and in public places.</p>
		`;
	}

    else if(course == "UKG"){
		title.innerText = "UKG";

		content.innerHTML = `
		<p><b>AGE:</b> 4.5 to 5.5 Years (Time: 4 hours, 5 days in a week)</p>

		<p>In UKG we expose kids to our well researched multi development program.</p>

		<p><b>Language comprehension:</b> Short and long vowel sounds, interactive activities and thematic concepts.</p>

		<p><b>Writing skills:</b> Sentence building, composition, basic grammar and dictation.</p>

		<p><b>Verbal communication:</b> Vocabulary building with riddles and reasoning games.</p>

		<p><b>Reading & Speaking:</b> Rhymes and stories in Hindi and English.</p>

		<p><b>Art & Craft:</b> Creative activities to improve imagination.</p>

		<p><b>Maths:</b> Number values, place values and basic operations.</p>

		<p><b>Number skills:</b> Practice from 1 to 1000.</p>

		<p><b>Hindi:</b> Swar, Matra, Vyanjan recognition and sentence formation.</p>

		<p><b>GK & GS:</b> General knowledge and surroundings.</p>

		<p><b>Good Manners:</b> At school, home and public places.</p>

		<p><b>Activities:</b> Storytelling, role play and competitions.</p>
		`;
	}

}

function closeCoursePopup(){
    document.getElementById("coursePopup").style.display = "none";
}

// Close when clicking outside
window.onclick = function(event){
    let popup = document.getElementById("coursePopup");
    if(event.target == popup){
        popup.style.display = "none";
    }
}


function openPopup(){
    document.getElementById("noticePopup").style.display = "block";
}

function closePopup(){
    document.getElementById("noticePopup").style.display = "none";
}

// close when clicking outside
window.onclick = function(event){
    let popup = document.getElementById("noticePopup");
    if(event.target == popup){
        popup.style.display = "none";
    }
}
</script>
<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
<script>
window.onload = function() {
    document.getElementById("franchisePopup").style.display = "block";
};

function closePopup() {
    document.getElementById("franchisePopup").style.display = "none";
}
</script>


	</body>

</html>                    