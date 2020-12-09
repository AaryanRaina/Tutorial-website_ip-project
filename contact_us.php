<?php
$con=mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection. Try again!" ;
}

mysqli_select_db($con,'venjantut');

$email = $_POST['email'];
$message = $_POST['message'];

$store_data= "insert into contact_us (email, message)
values ('$email', '$message')";

mysqli_query($con, $store_data);

header('location:contact.php');          

?>