<?php
session_start();
$z=$_SESSION["z"];
$y=$_SESSION["y"];
//echo  $_SESSION["z"] ;
?>
<header class="mainheader">
		<img src="images/logo.png">
		<content id="search">
			<form>
				<input type="text" name="search" placeholder="Search anything..." onclick="window.location.href='search.php'">
			</form>
		</content>
		<nav>
			<!--<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="course.php">Course</a></li>
			<li><a href="referencebook.php">Reference Books</a></li>
			<li><a href="notes.php">Notes</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="login.php">Login</a></li>	
		</ul>-->
			<div class="topnav" id="myTopnav">
				<a href="#home" class="active">Home</a>
				<div class="dropdown">
					<button class="dropbtn">About Us
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="privacy policy.php">Privacy Policy</a>
						<a href="Terms&condition.php">Terms and Conditions</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="dropbtn">Study Material
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="notes.php">Notes</a>
						<a href="referencebook.php">Reference Books</a>
						<a href="Qpaper.php">Sample Ques. Papers</a>
					</div>
				</div>
				<a href="course.php">Courses</a>
				<a href="contact.php">Contact</a>
				<a href="Gallery.php">Gallery</a>
				<?php
				if ($z=="success"){
					//$login = logout_process.php;
					echo '<a href="logout_process.php">Logout</a>';
				}
				else{
					echo '<a href="login.php">Login</a>';
				}
				?>
				<?php
				if ($y=="2"){
					//$login = logout_process.php;
					echo '<a href="profile.php">Teacher</a>';
				}
				else if ($y=="1"){
					echo '<a href="profile.php">Student</a>';
				}
				else{
					echo '';
				}
				?>
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
		</nav><br>
	</header>