<?php
	require_once "includes/db_connect.php";

	include "templates/header.php";
	include "templates/nav.php";
?>
    <main role="main">

    
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Create User</h1>
         
        </div>
      </div>

      <div class="container">
        
        <div class="row">

<div class="col-md-4">
            
			<h2>Sign Up</h2>
<form method = "POST" action = "data_process/processes.php" autocomplete = "off" accept-charset="UTF-8">
    <div class="form-group">
		<label for="fullName">Full Name</label>
		<input placeholder="Enter your Full Name" class="form-control form-control-md" name="fullname" type="text" id="fullName" required autofocus />
	</div>
    <div class="form-group">
		<label for="email">Email Address</label>
		<input placeholder="Enter your Email" class="form-control form-control-md" name="e-mail" type="email" id="email" required />
	</div>
	<div class="form-group">
		<label for="PhoneNumber">Phone Number</label>
		<input placeholder="Enter your phone number" class="form-control form-control-md" name="number" type="text" id="number" required />
	</div>
	<div class="form-group">
		<label for="Address">Address</label>
		<input placeholder="Enter your Address" class="form-control form-control-md" name="address" type="text" id="address" required />
	</div>
    <div class="form-group">
		<label for="username">Username</label>
		<input placeholder="Enter your Username" class="form-control form-control-md" name="username" type="text" id="username" required />
	</div>
    <div class="form-group">
		<label for="password">Password</label>
		<input placeholder="Enter your Password" class="form-control form-control-md" name="Pass" type="password" id="password" required />
	</div>
    <div class="form-group">
		<label for="ConfPass">Confirm Password</label>
		<input placeholder="Confirm your Password" class="form-control form-control-md" name="ConfPass" type="password" id="ConfPass" required />
	</div>
	
	<div class="form-group">
		<label for="userRole">Choose User Type</label>
		
		<select class="form-control form-control-md" name="Usertype"  id="usertype" required />
        <option value = "" >Choose User Type </option>
		<option value = "SU" > Super User </option>
        <option value = "Admin" > Administrator </option>
        <option value = "Author" > Author </option>
        
        </select>
	</div>
	<div class="form-group">
		<label for="user_photo">Profile Photo</label>
		<input placeholder="Upload Profile Photo" class="form-control form-control-md" name="profile_image" type="file" id="profile_image" />
	</div>
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="sign_up"  value="Sign Up">
	</div>
</form>
          </div>
        </div>

        <hr>

      </div>

<?php
	include "templates/footer.php";
?>
