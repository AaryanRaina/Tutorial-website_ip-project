<?php
session_start();
//include('login_process.php');
if(isset($_SESSION['z'])){
	$z=$_SESSION["z"];
}
else{
	$z="";
}
//$z=$_SESSION["z"];
$y=$_SESSION["y"];
$n=$_SESSION["n"];
$ut=$_SESSION["ut"];
$c=$_SESSION["c"];
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
				<a href="index.php" class="active">Home</a>
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
						<?php
						if ($z=="success" and $n=="yes"){
							//$login = logout_process.php;
							if ($ut=="2"){
							echo '<a href="Notesafterpaidt.php">Notes(paid)T</a>';
							}
							else if($ut=="1"){
								if($c=="9"){
									echo '<a href="Notesafterpaid9.php">Notes(paid)9</a>';
								}
								else if($c=="10"){
									echo '<a href="Notesafterpaid10.php">Notes(paid)10</a>';
								}
								else{
									echo '<a href="notes.php">Notes</a>';
								}
							}
							else if($ut=="3"){
								echo '<a href="Notesafterpaidt.php">Notes(paid)A</a>';
							}
						}
						else if($z=="success" and $n!="yes"){
							echo '<a href="notes.php">Notes</a>';
						}
						else{
							echo '<a href="login.php">Notes</a>';
						}
						?>
						<a href="referencebook.php">Reference Books</a>
						<a href="Qpaper.php">Sample Ques. Papers</a>
					</div>
				</div>
				<?php
				 if ($z=="success"){
					echo '<a href="courseafterlogin.php">Courses</a>';
				 }
				 else{
					echo '<a href="course.php">Courses</a>';
				 }
				?>
				<!--<a href="course.php">Courses</a>-->
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
					echo '<a href="tprofile.php">Teacher</a>';
				}
				else if ($y=="1"){
					echo '<a href="profile.php">Student</a>';
				}
				else if ($y=="3"){
					echo '<a href="aprofile.php">Admin</a>';
				}
				else{
					echo '';
				}
				?>
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
		</nav><br>
	</header>