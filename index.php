<?php
//$if_login=$_GET['q'];
//echo $if_login;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="Venjan Tutorials">
	<meta name="author" content="Shubhra , Aaryan & Hemkesh">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/js.js"></script>

</head>

<body class="body">
	<?php
		require_once('nav.php');
	?>
	<br>
	<div class="slideshow-container">

		<div class="iambrpslides fade">
			<div class="numbertext">Subjects Offered : Maths</div>
			<img src="./images/a.svg">
		</div>

		<div class="iambrpslides fade">
			<div class="numbertext">Subjects Offered : Science</div>
			<img src="./images/b.svg">
		</div>

		<div class="iambrpslides fade">
			<div class="numbertext">Subjects Offered : English</div>
			<img src="./images/c.png">
		</div>

	</div>


	<div style="text-align:center">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
			var i;
			var slides = document.getElementsByClassName("iambrpslides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			slideIndex++;
			if (slideIndex > slides.length) {
				slideIndex = 1
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
			setTimeout(showSlides, 2500); // This is for corousel Changing image every 2.5 seconds
		}

		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
	<br>

	<script type="text/javascript">
		document.title = "Home";
	</script>


	<script src="scripts/slider.js"></script>
	<div class="mainContent">
		<div class="Content">
			<article class="topContent">
				<header>
					<h3><a href="#" title="My First Post">Let Me Design The Path</a> </h3>
				</header>
				<footer>
					<p class="post-info">This post is written by Venjan Raina</p>
				</footer>
				<content>
					<p>Enroll in this course. You’ll complete a series of rigorous courses, tackle hands-on projects, and earn a Specialization Certificate to share with your professional network and potential employers.


					</p>
				</content>
			</article>

			<article class="bottomContent">
				<header>
					<h3><a href="#" title="Pathway Programme">Testimonials</a> </h3>
				</header>
				<footer>
					<p class="post-info">This post is written by the students of Venjan Tutorials</p>
				</footer>
				<content>
					<p>I just finished my course at Venjan Tuorials. It was absolutely amazing. All the lectures were self explainatory. <br><b>~ Riya Sharma - Student</b><br>
						Venjan sir has always been there to help me out. The doubt solving was just awesome. Thank you sir!. <br><b>~ Sneha Chopra - Student</b><br>
						I belong to a poor family. These free of cost lectures helped me a lot and I scored 87.6% in my 10th class exams. Thanks a lot sir! <br><b>~ Vishay Raina - Student</b><br>
						<b>You can follow the same path these students followed and succed in your life. </b>

					</p>
				</content>
			</article>
			<article class="middleContent">
			<header>
			<h3>Sample Video ~ Venjan Sir </h3>  
			</header>
			<footer>
				<p class="post-info">This video is uploaded by Venjan Sir as a welcome video</p>
				<div class="container_You">
					<iframe class="responsive-iframe" src="https://www.youtube.com/embed/Q00SzWIJT1Y?controls=0"></iframe>
				  </div>
			</footer>
			<content>
				
</p>
			</content>
		</article>
		<article class="bottomContent">
			<header>
			<h3>Registration Form ~ CLASSROOM BATCHES </h3> 
			<p class="post-info">Submit this form :</p> 
			<div class="container-of">
				<form action="student_info_classroom_batches.php" method="post">
				  <label id="of_form" for="fname">Name</label>
				  <input type="text" id="fname" name="sname" placeholder="Your name.." required>
			  
				  <label id="of_form" for="lname">E-Mail</label>
				  <input type="email" id="lname" name="email" style="color:gray;" placeholder="Your e-mail.." required>
			  
				  <label id="of_form" for="country">Class</label>
				  <select id="country" name="class">
					<option value="9th CBSE">9th CBSE</option>
					<option value="9th State Board">9th State Board</option>
					<option value="10th CBSE">10th CBSE</option>
					<option value="10th State Board">10th State Board</option>
				  </select>
			  
				  <label id="of_form" for="subject">Query</label>
				  <textarea id="subject" name="query" placeholder="Write something.." style="height:200px"></textarea>
			  
				  <input type="submit" value="Submit">
			  
				</form>
			  </div>
			</header>
				<footer>
					<p class="post-info">You will be informed by E-Mail.</p>

				</footer>
				<content>

					</p>
				</content>
			</article>
		</div>
	</div>
	<aside class="top-sidebar">
		<article>
			<h3>Join us today!</h3>
			<p>Embark on an exciting learning journey with Venjan Tutorials</p>
			<button class="buttonR buttonR2" onclick="window.location.href='register.php';">Register Now</button>
		</article>
	</aside>

	<aside class="middle-sidebar">
		<article>
			<h3>Free online lectures</h3>
			<p>I have uploaded some online lectures which anbody can access without any charges!</p>
		</article>
	</aside>

	<aside class="buttom-sidebar">
		<article>
			<h3>Classroom Batches</h3>
			<p>I offer classroom Batches for the students living in jammu on a first come first serve basis and that too free of cost.</p>
		</article>
	</aside>
	<aside class="Faculty-sidebar">
		<article>
			<h3>Faculty Support</h3>
			<p>You are welcomed submit your doubts anytime 24 X 7 and I promise to revert back to you within 12 hours.</p>
		</article>
	</aside>
	<aside class="team-sidebar">
		<article>
			<h3>About Team</h3>
			<p>1.Venjan Kumar Raina<br>2.Aaryan Raina<br>3.Shubhra Jena<br>4.Hemkesh Raina</p>
		</article>
	</aside>
	<footer class="mainFooter">

		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="https://www.facebook.com/aaryan.raina.7"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/aaryan_raina/"><i class="fa fa-instagram"></i></a>
				<a href="https://www.linkedin.com/in/hemkesh-raina-90a37a146/?originalSubdomain=in"><i class="fa fa-linkedin"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a href="JobOppurtunities.php"> Job Opportunities</a>
				</p>

				<p id="cpy">Venjan Tutorials&copy; 2020<br><br>I am very passionate about sharing my knowledge to the students for free!</p>
			</div>

		</footer>
	</footer>

</body>

</html>