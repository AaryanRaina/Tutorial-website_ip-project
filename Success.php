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
<html>
  <head>
    <title>Successfully login</title>

	
	<!-- include css file here-->
    <link rel="stylesheet" href="css/style.css"/>
   
   <!---<script type="text/javascript">
	
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-43981329-1']);
	_gaq.push(['_trackPageview']);
	(function () {
	var ga = document.createElement('script');
	ga.type = 'text/javascript';
	ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(ga, s);
	})();
	//]]>
	</script>-->
   
  </head>
<body>
<center>You are successfully logged in as <?php echo $user_e ?></br></br> <a class="buttonR buttonR2" href="index.php">Back</a></center>
</body>
</html>