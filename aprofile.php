<?php
$con = mysqli_connect('localhost','root');

if($con){
	//echo "Connection successfull";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'venjantut');

$result=mysqli_query($con,"SELECT * from register where email in (select email from login)");

$row=mysqli_fetch_array($result);
$user_e = $row['email'];
$user_n = $row['username'];
$user_c = $row['class'];
$user_p = $row['phoneno'];
$user_a = $row['address'];
//echo $user_e;
//echo '<script type="text/javascript">'
//window.onload = function () { alert("Welcome at c-sharpcorner.com."); }
?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Admin's Profile</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Venjan Tutorials, Jammu">
 <meta name="author" content="Venjan Kumar Raina">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="javascript/js.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>$('#rsubmit').click( function() { 
	  alert('User Entry Registered Successfully'); 
	  });
</script>-->

<script> 
			function register() { 
				var name = 
					document.forms["RegForm"]["Name"]; 
				var email = 
					document.forms["RegForm"]["EMail"]; 
				var phone = 
					document.forms["RegForm"]["Telephone"]; 
				
				var password = 
					document.forms["RegForm"]["Password"]; 
					
				var cpassword = 
					document.forms["RegForm"]["CPassword"]; 
				
				var address = 
					document.forms["RegForm"]["Address"]; 
				var Class = 
					document.forms["RegForm"]["class"]; 					
				var school = 
					document.forms["RegForm"]["school"]; 					

				if (name.value == "") { 
					window.alert("Please enter your name."); 
					name.focus(); 
					return false; 
				} 

				if (address.value == "") { 
					window.alert("Please enter your address."); 
					address.focus(); 
					return false; 
				} 

				if (email.value == "") { 
					window.alert( 
					"Please enter a valid e-mail address."); 
					email.focus(); 
					return false; 
				} 
				
				if (password.value == "") { 
					window.alert("Please enter your password"); 
					password.focus(); 
					return false; 
				} 
				
				if (cpassword.value == "") { 
					window.alert("Please confirm your password"); 
					password.focus(); 
					return false; 
				}				

				if (phone.value == "") { 
					window.alert( 
					"Please enter your telephone number."); 
					phone.focus(); 
					return false; 
				} 
				
				if (Class.value == "") { 
					window.alert( 
					"Please enter your Class name"); 
					Class.focus(); 
					return false; 
				} 				

				if (school.value == "") { 
					window.alert( 
					"Please enter your school's name"); 
					school.focus(); 
					return false; 
				} 

				if (password.value != cpassword.value) { 
				   alert("Your password and confirmation password do not match. Try again!");
				   cpassword.focus();
				   return false; 
				} 

				return true; 
			} 
		</script> 

</head>
<body class="body">
<?php
		require_once('nav.php');
	?>
<h1><i>WELCOME</i></h1>

<table>
  <caption><?php echo $user_n ?></caption>
  <thead>
    <tr>
        <th scope="col">Email-id</th>
		<th scope="col">Phone Number</th>
		<th scope="col">Address</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <td data-label="Email-id"><?php echo $user_e ?></td>  
	<td data-label="Phone No."><?php echo $user_p ?></td>
    <td data-label="Address"><?php echo $user_a ?></td>

	  
 </tr>
  </tbody>
</table>
<br>
<br>
<br>
	<div id="formstyle">
		<h1 style="text-align: center;">Add Teachers/Admins</h1> 
		<form id="rform" name="RegForm" action="register_process_admin.php"
			onsubmit="return register()" method="post"> 
			<p>Name: <input type="text"
							size="65" name="Name" /></p> 
			<br /> 
			<p>Address: <input type="text"
							size="65" name="Address" /> 
		</p> 
			<br /> 
			<p>E-mail Address: <input type="email"
							size="65" name="EMail" /></p> 
			<br /> 
			<p>Password: <input type="text"
						size="65" name="Password" /></p>
			<br>
			<p>Confirm Password: <input type="text"
						size="65" name="CPassword" /></p> 
						
			<br /> 
			<p>Phone No: <input type="text"
						size="65" name="Telephone" /></p> 

			<br /> 
			<p>Class: <input type="text"
						size="65" name="class" /></p> 

			<br /> 
			<p>School: <input type="text"
						size="65" name="school" /></p> 						
			
			<br /> 			
			<p> Select User's Type:

			<select name="user_type"  required >
			  <option value="" disabled selected>Choose...</option>
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			</select>
			</p>
			
			<p> Payment:

			<select name="payement"  required >
			  <option value="" disabled selected>Choose...</option>
			  <option value="yes">yes</option>
			  <option value="no">no</option>
			</select>
			</p>
						
			
			<br>
			
			
			<p id="fbuttons"> 
				<input onclick = "alert('user entry registered')" id="rsubmit" type="submit"
					value="Submit" name="Submit" /> 
				<input id="rreset" type="reset"
					value="Reset" name="Reset" /> 
			</p> 
		</form>
	
	
	</div>


<br>
<br>


<script>
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
  
</script>

<div id="fix"></div>




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
	document.title="Admin's Profile";
</script>
</body>
</html>