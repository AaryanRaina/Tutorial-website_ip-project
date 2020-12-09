<!DOCTYPE html>
<html lang="en">
<head>
	<title>contact us</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="College, Pokhara, IT College, Lions Marga, college in pokhara, nepalIT">
 <meta name="author" content="Bishworaj Poudel">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="javascript/js.js"></script>
<script src="javascript/validatename.js"></script>

</head>
<body class="body">
    <?php
		require_once('nav.php');
	?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.8193304645465!2d74.82975398383248!3d32.770528152439965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391e842b8cf477b1%3A0x25e1e23be1347184!2sRoopnagar%20Enclave%20Lane%202%2C%20Jammu%20180013!5e0!3m2!1sen!2sin!4v1606282731280!5m2!1sen!2sin" width="300" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
<h3>Contact Us</h3>
<h4>Venjan Tutorials<br>
165/2 RoopNagar Enclave</h4>
Block-A, Jammu, India
<pre>
Phone : +91 9419371299<br>
Email :  venjanr@gmail.com<br>
Facebook : https://www.facebook.com/aaryan.raina.7<br>
</pre>


<!DOCTYPE html>
<html>
<body>

<br>
<br>

<strong>If you have any queries, please feel free to send us a message:</strong>
<center>
<!-- <input id="numb" class="cform" placeholder="Full Name" type="text"> -->
<form action="contact_us.php" method="post">
	<input id="mail" placeholder="email" type="email" required name="email">
	<textarea id="msg" rows="4" cols="20" required name="message"> Message... </textarea>
	<button id="Submit" type="submit" class="btn-outline-reg" style="cursor: pointer;" value="submit" >Submit</button>
</form>



<p id="demo"></p>
</center>

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
<script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 1000) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>

</body>
</html> 
<script type="text/javascript">
  document.title="Contact";
</script>
<script type="text/javascript" >
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<script>

				document.getElementById("Submit").onclick=function(){
				var email=document.getElementById("mail").value;
				var msg=document.getElementById("msg").value;
					
					if((msg!=="") && (email!=="") ){
					alert('Your queries have been sent. Please wait for the reply');
				}
				}

</script>		


</body>

</html>