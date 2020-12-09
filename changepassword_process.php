<?php

if (isset($_POST['Submit'])) {

    $email = $_POST['EMail'];
    $newpass = $_POST['Password'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "venjantut";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "UPDATE register SET password = '$newpass' WHERE email = '$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Record changed successfully";
        header("Location: profile_setting.php");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        
    $conn->close();
}
    

?>


    