<!DOCTYPE html>
<html>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="./">BLOG!</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
	<ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
	 	<a class="nav-link" href="super_user.php">Home<span class="sr-only">(current)</span></a>
	  </li>
	  
	  <li class="nav-item" style = "float: right">
		<a class="nav-link" href="./signup.php">Sign Up</a>
	  </li>
	  
		<?php
			if(isset($_SESSION["control"])){
		?>
			<li class="nav-item active">
				<a class="nav-link" href="data_process/signout.php">Sign Out</a>
			</li>
		<?php
			}
		?> 
	</ul>
	<form class="form-inline my-2 my-lg-0">
		<div class = "text-white mr-sm-2">
			<h5> 
			
				<?php
				if(isset($_SESSION["control"])){
					print "Hello " . $_SESSION["control"]["Full_Name"];
					 }
				?> 
			</h5>
		</div>
	  
	</form>
  </div>

</nav>
</html>