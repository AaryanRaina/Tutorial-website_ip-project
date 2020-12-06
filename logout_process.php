<?php

require_once("db.php");

session_start();

session_unset();

session_destroy();
session_start();
$_SESSION["z"] = "failure";
$_SESSION["y"] = "0";

$con = mysqli_connect('localhost','root');

        if($con){
            echo "Connection successfull";
        }else{
            echo "No connection";
        }

        mysqli_select_db($con, 'venjantut');

        $sql = "truncate table login";
        mysqli_query($con, $sql);

header("Location: login.php");

?>