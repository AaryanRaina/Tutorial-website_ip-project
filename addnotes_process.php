<?php

if (isset($_POST['Submit'])) {

    $class = $_POST['class'];
    $subject = $_POST['subject'];
    $link = $_POST['link'];
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
    $sql = "UPDATE notes SET link = '$link' WHERE class = '$class' and subject = '$subject'";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: tprofile.php?n=success");
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
    $conn->close();
}
    

?>


    