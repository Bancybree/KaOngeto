<?php
session_start();
include "includes/constant.php";

if (!(isset($_SESSION["control"]["UserType"]) && $_SESSION["control"]["UserType"] == ADMIN_USER)) {
    header("Location: ../Project/");
    exit();
}
require_once "includes/session_control.php";
require_once "includes/db_connect.php";

include "templates/header.php";
include "templates/adminnav.php";
?>
<div>
<div class="jumbotron">
	<div class="container">
		<h1 class="display-3">Admin Control Panel</h1>
	</div>
</div>

<div class="container">
<div>
<h1> Author List </h1>
</div>
<div class="container">
<a class = "button" href = "add_user.php" >Add A New Author </a></br>
</div>
<div class="container">
<table>
	<thead>
		<tr>
			<th>Full Name</th>
			<th>Email</th>
			<th>Phone_Number</th>
			<th>Username</th>
			<th>UserType</th>
			<th>Address</th>
			
		</tr>
	</thead>
	<tbody>

		<?php

			 $all_authors = 'SELECT * FROM `users` WHERE `UserType`= "Author" ORDER BY `UserId`';
			 
			 $result = $DbConn->query($all_authors);
			 
			 if($result->num_rows > 0) {
				 
				while($row = $result->fetch_assoc()) {
					print "
					<tr>
						<td>$row[Full_Name]</td>
						<td>$row[Email]</td>
						<td>$row[Phone_Number]</td>
						<td>$row[Username]</td>
						<td>$row[UserType]</td>
						<td>$row[Address]</td>
												
						<td>
							
							<form method='POST' action='DelUser.php'>
								<button type='submit' name='delete' value='$row[UserId]'>Delete</button>
								
							</form>	
							
						</td>	
							
						<td>
							<form method='POST' action='UpdateUser.php'>
								<button type='submit' name='updateuser' value='$row[UserId]'>Update</button>
								
							</form>	
							
							
							
						</td>
					</tr>
					";
				}
			 }

							
		?>
	</tbody>
</table>
</div>



	  </div>
	  </div>
<?php
include "templates/footer.php";
?>