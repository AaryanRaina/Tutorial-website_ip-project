<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Venjan Tutorials, jammu, J&K">
 <meta name="author" content="Venjan Tutorials">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="javascript/js.js"></script>
<script src="javascript/validatename.js"></script>

</head>
<body class="body">
    <?php
		require_once('nav.php');
	?>



<html> 
	<head> 
		<script> 
			function register() { 

				var email = 
					document.forms["RegForm"]["EMail"]; 



				if (email.value == "") { 
					window.alert( 
					"Please enter a valid e-mail address."); 
					email.focus(); 
					return false; 
				} 
				


				return true; 
			} 
		</script> 


	</head> 

	<body> 
	<div id="formstyle">
		<h1 style="text-align: center;">FORGOT PASSWORD</h1> 
		<form id="rform" name="RegForm" action="register_process.php"
			onsubmit="return register()" method="post"> 
			
			<br /> 
			<p>E-mail Address: <input  id="mail" type="email"
							size="65" name="EMail" /></p> 
			 <br /> 

			<p id="fbuttons"> 
				<input id="rsubmit" type="submit"
					value="Submit" name="Submit" /> 
				<input id="rreset" type="reset"
					value="Reset" name="Reset" /> 
			</p> 
			
			<br>
			<br>
				<footer>
					<p class="post-info">Your password will be mailed to you</p>

				</footer>			
		</form>
	
	
</div>
<script>
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
</script>		
	</body> 
</html> 
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