<?php
$con=mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection. Try again!" ;
}

mysqli_select_db($con,'venjantut');

$class = $_POST['class'];
$subject = $_POST['subject'];
$topic = $_POST['topic'];
$link = $_POST['link'];

$store_data= "insert into addvideos (class, subject,  topic, video)
values ('$class', '$subject', '$topic', '$link')";

mysqli_query($con, $store_data);

header('location:videos.php');          

?>