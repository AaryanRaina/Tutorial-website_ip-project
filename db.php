<?php

require_once("constants.php");

$connection  = mysqli_connect(SERVER, USER, PASSWORD, DB);
if (!$connection) {
    die("We are  Not connected" . DB);
}
else
{
	echo "connected";
}
