<?php

require_once("db.php");
require_once("functions.php");

session_start();
$username="";
$password="";
if (isset($_POST['login'])) {
    //echo "User_Email: " . 
    $username = $_POST['username'];
    //echo "User_Password: " . 
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
}
//$username = mysqli_real_escape_string($connection, $username);
//$password = mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM register where email = '$username'";

$select_user_details = mysqli_query($connection, $query);

checkQueryResult($select_user_details);

//echo gettype($select_user_details);
if (mysqli_num_rows($select_user_details) < 1) {?>
    <script>alert('invalid login');window.location.href = "login.php";</script>
    <!--//die("Invalid Password!");
    //header("Location: login.php?q=error");-->
    <?php
}
else{
    $user_password = '';
$user_email = '';

if ($row = mysqli_fetch_assoc($select_user_details)) {
    $user_password = $row['password'];
    $user_id = $row['id'];
    $user_email = $row['email'];
    $user_type = $row['user_type'];
    $user_notes = $row['payement'];
    $user_class = $row['class'];

    //echo $user_password . " " . $user_id . " " . $user_email . " " .$user_type;
} else {
    $user_password = "";
}
if ($user_email && $user_password) {
    if ($password == $user_password) {
        $_SESSION['id'] = $user_id;
        if ($user_type==2) {
            header("Location: tprofile.php?q=success");
            $z=success;
            $_SESSION["z"]=$z;
            $_SESSION["y"]="2";
            $_SESSION["n"]="yes";
            $_SESSION["ut"]=$user_type;
            $_SESSION["c"]=$user_class;

        }
        else if ($user_type==1) {
            header("Location: profile.php?q=success");
            $z=success;
            $_SESSION["z"]=$z;
            $_SESSION["y"]="1";
            $_SESSION["c"]=$user_class;
            $_SESSION["ut"]=$user_type;
            if($user_notes=="yes"){
                $_SESSION["n"]="yes";  
            }
            else{
                $_SESSION["n"]="no"; 
            }
        }
        else if ($user_type==3){
            header("Location: aprofile.php?q=success");
            $z=success;
            $_SESSION["z"]=$z;
            $_SESSION["y"]="3";
            $_SESSION["c"]=$user_class;
            $_SESSION["ut"]=$user_type;
            $_SESSION["n"]="yes";
        }
        //header("Location: Success.php?q=success");
        echo "<h1>Logged In Successfully </h1>";
        $con = mysqli_connect('localhost','root');

        if($con){
            echo "Connection successfull";
        }else{
            echo "No connection";
        }

        mysqli_select_db($con, 'venjantut');

        $sql = "insert into login(email, password)
                values('$user_email','$user_password')";
        mysqli_query($con, $sql);
    } else {?>
        <script>alert('invalid login');window.location.href = "login.php";</script>
        <!--//die("Invalid Password!");
        //echo 'alert("review your answer");';
        //echo 'window.location= "index.php";';
        //echo 'hemkesh';
        //header("Location: login.php?q=success");-->
        <?php
    }
}
//header("Location: login.php?q=success");
}


?>