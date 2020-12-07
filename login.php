<?php
$con = mysqli_connect('localhost','root');

if($con){
	//echo "Connection successfull";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'venjantut');

$result=mysqli_query($con,"select * from login");

$row=mysqli_fetch_array($result);
$user_e = $row['email'];
//echo $user_e;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Venjan Tutorials</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="College, Pokhara, IT College, Lions Marga, college in pokhara, nepalIT">
	<meta name="author" content="Bishworaj Poudel">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="javascript/js.js"></script>
	<script src="javascript/login.js"></script>

</head>

<body class="body">
	<?php
		require_once('nav.php');
	?>
	<!--<a href="profile.php" style="font-family:'Courier New';font-size:20px;" >//echo $user_e </a>-->
	<div class="container">
		<div class="main">

			<h3>Please fill out the following fields to login:</h3>
			<hr />

			<form id="form_id" method="post" name="myform" action="login_process.php">
				<strong>Email :</strong></br>
				<input type="text" name="username" id="username" /></br>

				<strong>Password :</strong></br>
				<input type="password" name="password" id="password" /></br>

				<!-- <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"> -->
				<!-- <label for="vehicle1"> Remember me</label><br> -->
				<br>

				<a href="https://www.w3schools.com/">Forgot Password?</a>
				<br>
				<br>

				<input type="submit" name="login" value="Login" id="submit" />
			</form>
			<br>
			<span><b class="note">Note : </b>If not registered yet, Register here.<br /><b class="valid"></span>

			<input type="submit" value="Register" id="submit" onclick="location.href='register.php'"/>
		</div>



		<div class="fugo">
			<img src="images/4957136.jpg" style="width:520px;height:600px" /></img>
		</div>
	</div>

	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>


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
	<script type="text/javascript">
		document.title = "Login";
	</script>
</body>

</html>