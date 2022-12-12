<?php 

    $host = "localhost";
    $dbname = "balance_tracker_db";
    $dbuser = "root";
    $dbpass = "";

    function getConnection(){
        global $host;
        global $dbname;
        global $dbpass;
        global $dbuser;
        $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
        return $conn;
    }
?>


