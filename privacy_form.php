<?php
$con=mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection. Try again!" ;
}

mysqli_select_db($con,'venjantut');

$name = $_POST['name'];
$email = $_POST['email'];
$choose = $_POST['select'];

$store_data= "insert into privacy_form (name, email, choose)
values ('$name', '$email', '$choose')";

mysqli_query($con, $store_data);

header('location:index.php');          

?>