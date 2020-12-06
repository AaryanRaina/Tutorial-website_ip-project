<!DOCTYPE html>
<html lang="en">
<head>
	<title>Application-SST</title>
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
				  <a href="notes.php">Notes</a>
				  <a href="referencebook.php">Reference Books</a>
				  <a href="Qpaper.php">Sample Ques. Papers</a>
				</div>
			  </div> 
			<a href="course.php">Courses</a>
			<a href="contact.php">Contact</a>
			<a href="Gallery.php">Gallery</a>
			<a href="login.php">Login</a>
			<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
		  </div>
		</nav><br>
</header>



<html> 
	<head> 
		<script> 
			function register() { 
				var name = 
					document.forms["RegForm"]["Name"];
					
				var option=
				document.forms["RegForm"]["gender"];
			var occupation=
				document.forms["RegForm"]["occupation"];				

				var email = 
					document.forms["RegForm"]["EMail"]; 
					
					var resume = 
					document.forms["RegForm"]["resume"]; 
					
				var len = document.querySelectorAll('.checkbox input[type="checkbox"]:checked').length					
				var len2 = document.querySelectorAll('.checkbox2 input[type="checkbox"]:checked').length					


				var phone = 
					document.forms["RegForm"]["Telephone"]; 
				
				var address = 
					document.forms["RegForm"]["Address"]; 

				if (name.value == "") { 
					window.alert("Please enter your name"); 
					name.focus(); 
					return false; 
				} 

				if (!(option[0].checked || option[1].checked || option[2].checked)) {
					window.alert("Please Select Your Gender");
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
				
				if (len <= 0) {
					window.alert("Please check at least one option"); 

				  }	
				
				if (len2 <= 0) {
					window.alert("Please check at least one option for your suitable timings"); 

				  }					  
				if (!(occupation[0].checked || occupation[1].checked || occupation[2].checked || occupation[3].checked || occupation[4].checked)) {
					window.alert("Please Select Your Occupation");
					return false;
				}								
				 
				
				if (phone.value == "") { 
					window.alert( 
					"Please enter your Phone  number"); 
					phone.focus(); 
					return false; 
				} 

				if (resume.value == "") { 
					window.alert( 
					"Please enter your Resume link"); 
					resume.focus(); 
					return false; 
				} 

		
				

				return true; 
			} 
		</script> 


	</head> 

	<body> 
	<div id="formstyle">
		<h1 style="text-align: center;">Application For Teaching Social Science</h1> 
		<form id="rform" name="RegForm" action="applysst_form.php"
			onsubmit="return register()" method="post"> 
			<p>Name: <input type="text"
							size="65" name="Name" /></p> 
			<br /> 		

			<p id= "Gender"> Gender: <br>
			<input type="radio" name="gender" value="male"> Male<br>
			<input type="radio" name="gender" value="female"> Female<br>
			<input type="radio" name="gender" value="other"> Others </p>
			<br /> 
			
			<p>Address: <input type="text"
							size="65" name="Address" /> 
		</p> 
			
			<br>
			
			<p>E-mail Address: <input type="email"
							size="65" name="EMail" /></p> 
			<br /> 
			
			
			<div style="width:300px">
			<p>Highest Qualification:</p>
			  <select required name="hqual">
				<option value="">Choose...</option>
				<option value="B.A"> B.A </option>
				<option value="M.A"> M.A </option>
				<option value="B.E"> B.E </option>
				<option value="M.E"> M.E </option>
				<option value="B.Tech"> B.Tech </option>
				<option value="M.Tech"> M.Tech </option>
				<option value="B.Sc"> B.Sc </option>
				<option value="M.Sc"> M.Sc </option>
				<option value="BBA"> BBA </option>
				<option value="MBA"> MBA </option>
				<option value="BCA"> BCA </option>
				<option value="MCA"> MCA </option>
				<option value="P.hd"> P.hd </option>
				<option value="M.Phil"> M.Phil </option>
				<option value="B.Arch"> B.Arch </option>
				<option value="MBBS"> MBBS </option>
				<option value="MD"> MD </option>
				<option value="BDS"> BDS </option>
				<option value="MDS"> MDS </option>
				<option value="BPT"> BPT </option>
				<option value="B.Pharm"> B.Pharm </option>
				<option value="M.Pharm"> M.Pharm </option>
				<option value="B.Com"> B.Com </option>
				<option value="M.Com"> M.Com </option>
				<option value="C.A"> C.A </option>
				<option value="ICWA"> ICWA </option>
				<option value="B.Cs"> B.Cs </option>
				<option value="12th"> 12th </option>
				<option value="11th"> 11th </option>
				<option value="LLB"> LLB </option>
			  </select>
			</div>
				<br>		
			<p>Years of experience in Teaching</p>	
			
		<div style="width:300px">			
			<select required name="tExp">
				<option value="">Choose...</option>
				<option value="Less than a year"> Less than a year </option>
				<option value="Less Two years"> Less Two years </option>
				<option value="Less Four years"> Less Four years </option>
				<option value="More than 5 years"> More than 5 years </option>
							
			</select>		
		</div>
		<br>
		<div class="checkbox">
		<p>Types of Boards you can handle</p>
			<p >J & K Board
			  <input type="checkbox" name="boards" value="J & K Board">
			</p>

			<p >CBSE Board
			  <input type="checkbox" name="boards" value="CBSE Board">
		</p>

		</div>
		<br>
		<div class="checkbox2">
			
			<p>Available Timings</p>
							     
			<p >8-9 AM                             
			  <input type="checkbox" name="timings" value="8-9 AM" >
			</p>		                            
			<p >10-11 AM                            
			  <input type="checkbox" name="timings" value="10-11 AM" >
			</p>                                    
												    
			<p >11-12 AM                            
			  <input type="checkbox" name="timings" value="11-12 AM" >
		</p>                                        
			<p >12-1 AM                             
			  <input type="checkbox" name="timings" value="12-1 AM" >
			</p>                                     
												     
			<p >1-2 AM                               
			  <input type="checkbox" name="timings" value="1-2 AM " >
		</p>                                        
			<p >2-3 AM                              
			  <input type="checkbox" name="timings" value="2-3 AM " >
			</p>                                    
												    
			<p >3-4 AM                              
			  <input type="checkbox" name="timings" value="3-4 AM" >
			</p>		                             
			<p >4-5 AM                               
			  <input type="checkbox" name="timings" value="4-5 AM " >
			</p>                                     
												     
			<p >5-6 AM                               
			  <input type="checkbox" name="timings" value="5-6 AM" >
		</p>                                         
			<p >6-7 AM                               
			  <input type="checkbox" name="timings" value="6-7 AM" >
			</p>                                     
												     
			<p >7-8 AM                               
			  <input type="checkbox" name="timings" value="7-8 AM " >
		</p>		                                 
												     
			<p >8-9 AM                               
			  <input type="checkbox" name="timings" value="8-9 AM" >
			</p>                                     
												     
			<p >Full Time                            
			  <input type="checkbox" name="timings" value="Full Time " >
		</p>				
		</div>
			
		<br>
			
			<p id= "Gender"> Current Occupation: <br>
			<input type="radio" name="occupation" value="Freelancer"> Freelancer<br>
			<input type="radio" name="occupation" value="College Student"> College Student<br>
			<input type="radio" name="occupation" value="Full-Time Teacher"> Full-Time Teacher <br>
			<input type="radio" name="occupation" value="Not Working"> Not Working<br>
			<input type="radio" name="occupation" value="Other"> Other<br>
			</p>
			<br />			
			
			
			
			
			<p>Phone No: <input type="text"
						size="65" name="Telephone" /></p> 
			
			<br>
			
			<p>Upload your Resume in your Google Drive and drop its active link below:  <input type="text" name="resume" >
			</p>
			
			<br>
			<p>How did you come to know about Venjan Tutorials: <textarea cols="55"
							name="Comment"> </textarea></p> 
			<p id="fbuttons"> 
				<input id="rsubmit" type="submit"
					value="Submit" name="Submit" /> 
				<input id="rreset" type="reset"
					value="Reset" name="Reset" /> 
			</p> 
		</form>
		<script>
			function myFunction() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
			x.className += " responsive";
		  } else {
			x.className = "topnav";
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



</div>		
	</body> 
</html> 


</body>

</html>