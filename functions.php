<?php
require_once("db.php");
function checkQueryResult($resultset){
    global $connection;
    if(!$resultset){
        die("QUERY FAILED ".mysqli_error($connection));
    }
}

function getLoggedInEmployeeName($loggedInID){
    global $connection;
    $query = "SELECT * FROM employee WHERE employee_id = $loggedInID";
    $employee_deatils = mysqli_query($connection , $query);
    checkQueryResult($employee_deatils);
    
    if($row = mysqli_fetch_assoc($employee_deatils)){
        return ($row['employee_name']);
    }
}

function insert($tableName, $columns, $values){
    global $connection;
    $query = "INSERT INTO $tableName($columns) VALUES ($values)";
    
    $resultset = mysqli_query($connection, $query);
    checkQueryResult($resultset);
    return $resultset;
}


function deleteRecord($tableName,$primaryKeyColumnName,$primaryKeyValue,$employeeID)
{
    global $connection;
    $query = "update $tableName set deleted = 1, deleted_by = $employeeID, deleted_at = now() where $primaryKeyColumnName = $primaryKeyValue";
    $resultset = mysqli_query($connection , $query);
    checkQueryResult($resultset);
    
}

function redirect($url){
    header("Location: $url");
    exit();
}

?>