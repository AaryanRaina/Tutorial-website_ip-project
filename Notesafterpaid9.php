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

$result1=mysqli_query($con,"select link from notes where subject = 'maths' and class = '9'");
$row_maths=mysqli_fetch_array($result1);
$maths_link=$row_maths['link'];
//echo "$maths_link";

$result2=mysqli_query($con,"select link from notes where subject = 'english' and class = '9'");
$row_english=mysqli_fetch_array($result2);
$english_link=$row_english['link'];
//echo "$english_link";

$result3=mysqli_query($con,"select link from notes where subject = 'science' and class = '9'");
$row_science=mysqli_fetch_array($result3);
$science_link=$row_science['link'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Notes After paid 9th class student</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="school">
 <meta name="author" content="VR">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="javascript/js.js"></script>

</head>
<body class="body">
    <?php
		require_once('nav.php');
	?>	
<br>			
<p style="font-size:35px;">WELCOME!</p>
<!--<p style="font-size:18px; color:#C80B41;"></p>
<p style="font-size:18px; color:#C80B41;">Class: XII</p>	
<p style="font-size:18px; color:#C80B41;">School: DAV Public School</p>-->
<p style="font-size:18px; color:#C80B41;">Email: <?php echo $user_e ?></p>			
<br>	

<hr>

<h1 style="text-align:center;">9th Class</h1>
<div class="gallery">
  <?php
  echo '<a target="_blank" href="'.$english_link.'">
    <img src="images/english.png" alt="CCT101" width="370" height="200">
  </a>'
  ?>
  <div class="desc">English</div>
</div>

<div class="gallery">
<?php
  echo '<a target="_blank" href="'.$science_link.'">
    <img src="images/3638977.jpg" alt="Html" width="300" height="200">
  </a>'
  ?>
  <div class="desc">Science</div>
</div>

<div class="gallery">
<?php
  echo '<a target="_blank" href="'.$maths_link.'">
    <img src="images/MATHEMATICS.PNG" alt="Database" width="300" height="200">
  </a>'
  ?>
  <div class="desc">Maths</div>
</div>

<div id="fix"></div>

<script>
	function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
</script>


<hr>


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
	document.title="Notes After Paid 9th class student";
</script>
</body>
</html>