<?php

require_once("db.php");
require_once("functions.php");


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['Submit'])) {

    $name = test_input($_POST['Name']);
    $address = test_input($_POST['Address']);
    $email = test_input($_POST['EMail']);
    $password = test_input($_POST['Password']);
    $telephone = test_input($_POST['Telephone']);
    $queries = test_input($_POST['Comment']);
    $class = test_input($_POST['hello']);
    $school = test_input($_POST['hello2']);





    echo $name . "<br>";
    echo $address . "<br>";
    echo $email . "<br>";
    echo $password . "<br>";
    echo $telephone . "<br>";
    echo $queries . "<br>";




    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
    echo $hashed_password;


    $query = "select * from register where phoneno = $telephone and email = '$email'";
    echo $query;

    $result = mysqli_query($connection, $query);
    checkQueryResult($result);

    if (mysqli_num_rows($result) == 0) {

        $query = "insert into register (username,user_type,address,email,password,phoneno,class,school,queries)VALUES('$name',1,'$address','$email','$password',$telephone,'$class','$school','$queries')";
        echo $query;

        $add_user_result = mysqli_query($connection, $query);

        checkQueryResult($add_user_result);
    } else {

        header("Location: register.php?q=duplicate");
        echo "<h1>Error</h1>";
        exit;
    }

    $user_id = mysqli_insert_id($connection);




    session_start();
    $_SESSION['id'] = $user_id;


    header("Location: login.php?q=success");
    echo "<h1>Added</h1>";
    exit;
}
