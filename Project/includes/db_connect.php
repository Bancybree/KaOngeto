<?php
   
    require_once "constant.php";
    
    //Connection to the database
	$DbConn = new mysqli(HOSTNAME,HOSTUSER,HOSTPASS,DBNAME);

    //Verify the database Connection
    if($DbConn->connect_error){
        print "Connection Failed: <br /> " . $conn->connect_error;
    }else{
        // print "Connection Successful";
    }

?>