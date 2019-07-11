<?php
require_once "includes/db_connect.php";

include "templates/header.php";
include "templates/nav.php";

?>
    
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Home Page</h1>
         
        </div>
      </div>

      <div class="container">
        
        <div class="row">
         <div class="col-md-4"> 
            <h2>Sign In</h2>
<form method = "POST" action = "data_process/processes.php" autocomplete = "off" accept-charset="UTF-8" onsubmit="Welcome">
    <div class="form-group">
		<label for="username">Username</label>
		<input placeholder="Enter your Username" class="form-control form-control-md" name="USERNAME" type="text" id="username" required autofocus />
	</div>
    <div class="form-group">
		<label for="password">Password</label>
		<input placeholder="Enter your Password" class="form-control form-control-md" name="PASSWORD" type="password" id="password" required />
	</div>
    <div class="form-group">
		<input class="btn btn-primary" type="submit" name="sign_in"  value="Sign In"></input>
		 
	</div>
</form>
          </div>

          </div>
        </div>

        <hr>


<?php
	include "templates/footer.php";
?>
