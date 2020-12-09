<?php
$con=mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection. Try again!" ;
}

mysqli_select_db($con,'venjantut');

$sname = $_POST['sname'];
$email = $_POST['email'];
$class = $_POST['class'];
$query = $_POST['query'];

$store_data= "insert into student_info_classroom_batches (name, email, class, query)
values ('$sname', '$email', '$class', '$query')";

mysqli_query($con, $store_data);

header('location:index.php');          

?>