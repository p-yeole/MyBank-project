<?php
    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "pyeole";
        $dbpass = "20032000";
        $db = "mybank";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);//new 
        return $conn;
    }
?>