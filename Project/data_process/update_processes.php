<?php
use data_process\User;
session_start();
require_once "../includes/db_connect.php";

require_once "../includes/constant.php";

require_once "User.php";

// Update User For SU
if (isset($_POST["UPDATEUSER"])) {
	$UserId = mysqli_real_escape_string($dbconn,$_POST["UserId"]);
	$Full_Name = mysqli_real_escape_string($dbconn, $_POST["Full_Name"]);
	$Email = mysqli_real_escape_string($dbconn, $_POST["email"]);
	$Phone_Number = mysqli_real_escape_string($dbconn, $_POST["phone_Number"]);
	$Address = mysqli_real_escape_string($dbconn, $_POST["Address"]);
	
	$update_users = "UPDATE users set Full_Name = '$Full_Name', Email = '$email', Phone_Number = '$phone_Number', Address = '$Address' where UserId = '$UserId'";

	if($dbconn->query($update_users)===TRUE) {
		
		 echo ("<SCRIPT LANGUAGE='JavaScript'>
		 window.alert('Successful Update')
		 window.location.href='manage_users.php';
		 </SCRIPT>");
		
	} else {
		echo $dbconn->error;
	}			
}	

// Update SU Profile
if (isset($_POST["UpdateSU"])) {
	
	
	$FullName = mysqli_real_escape_string($DbConn, $_POST["FULLNAME"]);
    $Email = mysqli_real_escape_string($DbConn, $_POST["EMAIL"]);
    $Phone = mysqli_real_escape_string($DbConn, $_POST["NUMBER"]);
    $Address = mysqli_real_escape_string($DbConn, $_POST["ADDRESS"]);
    
$update_su = "UPDATE users SET Full_Name = '$FullName', Email = '$Email', Phone_Number = '$Phone', Address = '$Address' WHERE users.UserId = ".$_SESSION["control"]["UserId"]." ";
	
	if ($DbConn->query($update_su) === TRUE) {
	print "Record Updated successfully";
		header("Location: ../manage_su_profile.php");
        exit();
      	
    } else {
        print "Failed: " . $DbConn->error;
		
    }
}
	
// Update SU Password
if (isset($_POST["UpdateSUPass"])){ 
		$CurrentPassword = mysqli_real_escape_string($DbConn, $_POST["OLDPASS"]);
		
		$NewPassword = mysqli_real_escape_string($DbConn, $_POST["NEWPASS"]);
		
		$ConfirmPassword = mysqli_real_escape_string($DbConn, $_POST["CONFPASS"]);
				
		$hash_pass = password_hash($ConfirmPassword, PASSWORD_DEFAULT);
		
		$update_pass = "UPDATE users set User_Password = '$hash_pass' where `UserId` = ".$_SESSION["control"]["UserId"]."";
		
		if($DbConn->query($update_pass)===TRUE) {
			
			 echo ("<SCRIPT LANGUAGE='JavaScript'>
			  window.alert('! Password changed Successfully. You will have to login again !')
			 
             window.location.href='signout.php';
			 
             </SCRIPT>");
			
		} else {
			echo $DbConn->error;
		}
		
		}else{
			
			$_SESSION['errors'] = " CurrentPassword is incorrect.";
			
			header("Location: ../manage_su_profille");
			
		}
			
	
	
?>