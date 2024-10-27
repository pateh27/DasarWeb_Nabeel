<?php 
    $servername = "Peter/SQLEXPRESS";
    $username = "username";
    $password = "password";
    $dBname = "CRUD";
   
    $connectionInfo = array ( "UID"=>$username, "pwd"=>$password, "Database"=>$dBname);
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else {
        echo "Connected successfully";
    }

?>