<!DOCTYPE html>
<html lang="en">
<head>
	<title>Videos</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Venjan Tutorials, Jammu">
 <meta name="author" content="Venjan Kumar Raina">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#topic{
		margin-top:60px;!important
}
#heading{
	text-align:center;
	margin-top:100px;
}
</style>
<script src="javascript/js.js"></script>



</head>
<body class="body">

<?php
		require_once('nav.php');
?>

<h1 id="heading">SUBJECT VIDEOS</h1>

<!-- <article class="middleContent">
	<footer>
		<p class="post-info">Lecture 1 : Trignometry</p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/Q00SzWIJT1Y?controls=0"></iframe>
		  </div>
	</footer>
	<content>
		

	</content>
</article>

<article class="middleContent">
	<footer>
		<p class="post-info">Lecture 2 : Quadratic equations</p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/Q00SzWIJT1Y?controls=0"></iframe>
		  </div>
	</footer>
	<content>
		

	</content>
</article>

<article class="middleContent">
	<footer>
		<p class="post-info">Lecture 3 : Area related to Circles</p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/geikvqnRDf4?controls=0"></iframe>
		  </div>
	</footer>
	<content>
		

	</content>
</article>

<article class="middleContent">
	<footer>
		<p class="post-info">Lecture 4 : Conical Sections</p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/Q00SzWIJT1Y?controls=0"></iframe>
		  </div>
	</footer>
	<content>
		

	</content>
</article>

<article class="middleContent">
	<footer>
		<p class="post-info">Lecture 5 : Number Systems</p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/LQvlOLfmgb4?controls=0"></iframe>
		  </div>
	</footer>
	<content>
		

	</content>
</article>

<article class="middleContent">
	<footer>
		<p class="post-info">Lecture 6 : Polynomials</p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/Q00SzWIJT1Y?controls=0"></iframe>
		  </div>
	</footer>
	<content>
		

	</content>
</article>

<article class="middleContent">
	<footer>
		<p class="post-info">Lecture 7 : Algebraic Expressions</p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/atEA3NbrZ7c?controls=0"></iframe>
		  </div>
	</footer>
	<content>
		

	</content>
</article> -->
<article class="middleContent">
<?php
	$conn = new mysqli("localhost","root",);
	mysqli_select_db($conn,'venjantut');
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
			$stmt = $conn->prepare('SELECT * FROM addvideos');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):

?>

	<footer>
	<br>
		<p class="post-info" id="topic"><?= $row['topic'] ?></p>
		<div class="container_You">
			<iframe class="responsive-iframe" src="<?= $row['video'] ?>"></iframe>
		  </div>
		  
	</footer>
	<content>
		

	</content>
  <?php endwhile; ?>

</article>















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
<script type="text/javascript">
	document.title="Videos";
</script>
</body>
</html>