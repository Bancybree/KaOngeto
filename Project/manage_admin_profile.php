<?php
	session_start();
    	
	require_once "includes/session_control.php";
	require_once "includes/db_connect.php";

	include "templates/header.php";
	include "templates/nav.php";
?>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Update Details</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
		<form method="POST" action="data_process/processes.php" autocomplete="off" accept-charset="UTF-8">
            <div class="col-md-12">
                <h2>Edit Your Information</h2>
				<div class="row">
                    <div class="col-12">
				<div class="form-group">
				
				 <img src="<?php echo $_SESSION["control"]["Profile_Image"];?> " class="img-fluid" alt="Photo"/>
				</div>
                        
                    </div>
                </div>
                
                   
                    <div class="form-group">
                        <label for="Username">Username</label>

                        <input name="Username" placeholder="Enter your " class="form-control form-control-md" type="text"
                               id="Username" disabled
                               value="<?php print $_SESSION["control"]["Username"]; ?>"/>

                        <input name="UserId" type="hidden" id="userId"
                               value="<?php print $_SESSION["control"]["UserId"]; ?>" readonly/>
                    </div>

                    <div class="form-group">
                        <label for="Full_Name">Full Name</label>
                        <input placeholder="Enter your Article Title" class="form-control form-control-md" name="FULLNAME"
                               type="text" id="Full_Name"
                               value="<?php print $_SESSION["control"]["Full_Name"]; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="Email"> Email </label>
                        <input placeholder="Enter your Article Title" class="form-control form-control-md" name="EMAIL"
                               type="text" id="Email" value="<?php print $_SESSION["control"]["Email"]; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="Phone_Number">Phone Number </label>
                        <input placeholder="Upload Article Photo" class="form-control form-control-md" name="NUMBER"
                               type="text" id="Phone_Number"
                               value="<?php print $_SESSION["control"]["Phone_Number"]; ?>"/>
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input placeholder="Your Address" class="form-control form-control-md" name="ADDRESS"
                               type="text" id="Address" value="<?php print $_SESSION["control"]["Address"]; ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="user_photo">Profile Photo</label>
						<input placeholder="Upload Profile Photo" class="form-control form-control-md" name="Profile_Image" type="file" id="profile_image" />  
                    </div>
                
            </div>
            <div class="col-md-12">
			
                <div class="text-center">
                    <h3>Edit your Password</h3>
                </div>
                <div class="form-group">
                    <label for="image"> Enter New Password</label>
                    <input placeholder="Enter New Password" class="form-control form-control-md" name="NEW_PASS"
                           type="password" id=""/>
						   </div>
				<div class="form-group">
					<input placeholder="Confirm New Password" class="form-control form-control-md" name="CONFPASS"
                           type="password" id=""/>
						   
						    </div>
				<div class="form-group">
						   
						   <input class="btn btn-primary" type="submit" name="UpdateSU" value="Update Details">
                </div>
            </div>
			    </div>
		</form>
    </div> 
<?php
include "templates/footer.php";
?>