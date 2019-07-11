<?php
use data_process\User;
session_start();
require_once "../includes/db_connect.php";

require_once "../includes/constant.php";

require_once "User.php";

// Sign Up Process
if (isset($_POST["sign_up"])) {

    $FullName = mysqli_real_escape_string($DbConn, $_POST["FULLNAME"]);
    $Email = mysqli_real_escape_string($DbConn, $_POST["EMAIL"]);
    $Phone = mysqli_real_escape_string($DbConn, $_POST["NUMBER"]);
    $Address = mysqli_real_escape_string($DbConn, $_POST["ADDRESS"]);
    $Username = mysqli_real_escape_string($DbConn, $_POST["USERNAME"]);
    $Pass = mysqli_real_escape_string($DbConn, $_POST["PASSWORD"]);
    $ConfPass = mysqli_real_escape_string($DbConn, $_POST["CONFPASS"]);
    $UserType = mysqli_real_escape_string($DbConn, $_POST["usertype"]);
    $Profile = mysqli_real_escape_string($DbConn, $_POST["Profile_Image"]);

    $hash_pass = password_hash($ConfPass, PASSWORD_DEFAULT);

    $user_insert = "INSERT INTO users(Full_Name,Email,Phone_Number, Address, Username, User_Password, UserType, AccessTime, Profile_Image) VALUES ('$FullName', '$Email', '$Phone','$Address', '$Username','$hash_pass', '$UserType', UNIX_TIMESTAMP(), '$Profile')";

    if ($DbConn->query($user_insert) === TRUE) {
        header("Location: ../");
        exit();
        print "Record stored successfully";
    } else {
        print "Failed: " . $DbConn->error;
    }

}

// Sign In Process
if (isset($_POST["sign_in"])) {

    $username_entered = mysqli_real_escape_string($DbConn, $_POST["USERNAME"]);
    $password_entered = mysqli_real_escape_string($DbConn, $_POST["PASSWORD"]);

    $spot_username = "SELECT * FROM users WHERE Username = '$username_entered' LIMIT 1";
    $user_res = $DbConn->query($spot_username);
    if ($user_res->num_rows > 0) {


        $_SESSION["control"] = $user_res->fetch_assoc();

        $password_stored = $_SESSION["control"]["User_Password"];
        
        if (password_verify($password_entered, $password_stored)) {

            if ($_SESSION["control"]["UserType"] == ADMIN_USER) {
                header("Location: ../admin.php");
            } else if ($_SESSION["control"]["UserType"] == SUPER_USER) {
                header("Location: ../super_user.php");
            } else if ($_SESSION["control"]["UserType"] == AUTHOR_USER) {
                header("Location: ../author.php");
            }
            exit();

        } else {
            echo "else block 1";
            header("Location: ../");
            exit();

        }
    } else {
        echo "else block 2";
        header("Location: ../");
        exit();
    }

}


// Delete User
if (isset($POST["DELETE"])) {
	print ("Uko hapa");
	$UserId = mysqli_real_escape_string($DbConn, $_POST['DELETE']);

	$delete_user = "DELETE FROM users WHERE UserId = '$UserId' LIMIT 1";
if ($DbConn->query($delete_user) === TRUE) {
        echo ("<SCRIPT LANGUAGE='JavaScript'>
			 
             window.alert('Succesfully Deleted')
             window.location.href='manage_users.php';
			 
             </SCRIPT>");
			
		} else {
			
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
	         window.alert('Unsuccessful')
             window.location.href='manage_users.php';
			 
             </SCRIPT>");
			 
		}

}
?>