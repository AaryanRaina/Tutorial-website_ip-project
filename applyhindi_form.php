<?php


$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successfull";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'venjantut');

$Name = $_POST['Name'];
$gender =$_POST['gender'];
$Address = $_POST['Address'];
$EMail = $_POST['EMail'];
$hqual = $_POST['hqual'];
$tExp = $_POST['tExp'];
$boards = $_POST['boards'];
$timings = $_POST['timings'];
$occupation = $_POST['occupation'];
$Telephone = $_POST['Telephone'];
$resume = $_POST['resume'];
$Comment = $_POST['Comment'];


$query = " insert into applyhindi_form (name, gender, address, email, highest_qual, teaching_exp, board_type, timings, occupation, phoneno, resume, know)
values ('$Name', '$gender', '$Address', '$EMail', '$hqual', '$tExp', '$boards', '$timings', '$occupation', '$Telephone', '$resume', '$Comment') ";

mysqli_query($con, $query);

header("location:index.php");



?>