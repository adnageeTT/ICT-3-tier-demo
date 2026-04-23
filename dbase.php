<?php
    $server = 'localhost';
        $user = 'root';
        $pass = '';
        $dbase = 'ict_3tier_demo';

    
        $conn = mysqli_connect($server, $user, $pass, $dbase);
        if (!$conn){
        die('Could not connect to database because: ' . mysqli_connect_error());
        }
        else echo "You are successfully connected to $dbase";

?>