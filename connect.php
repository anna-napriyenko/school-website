<?php
    $username = 'root';
    $userpassword ='';
    $dbname = 'undergrad_students';
    $servername = 'localhost';

    $conn = mysql_connect($servername, $username, $userpassword, $dbname);
    if(!$conn){
        die("Connection failed: " . mysql_connect_error());
    }
    echo "Connected successfully";
?>