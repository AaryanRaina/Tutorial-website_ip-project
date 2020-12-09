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
//echo $user_e;
?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Teacher's Profile</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="Venjan Tutorials, Jammu">
 <meta name="author" content="Venjan Kumar Raina">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="javascript/js.js"></script>

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
      <th scope="col">Assigned Class</th>
      <th scope="col">Email-id</th>
	  <th scope="col">Phone Number</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Class"><?php echo $user_c ?></td>
      <td data-label="Email-id"><?php echo $user_e ?></td>  
	  <td data-label="Phone No."><?php echo $user_p ?></td>

	  
 </tr>
  </tbody>
</table>
<br>

<a href="addnotes.php"><input  class="pbtn" type="button" style="width:200px;" value="Add Subject Notes"></a>
                                                      
<a href="addvideos.php"><input class="pbtn" type="button" style="width:200px;" value="Add Subject Videos"></a>

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
	document.title="Teacher's Profile";
</script>
</body>
</html>