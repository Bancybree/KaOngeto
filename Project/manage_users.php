<?php
session_start();
include "includes/constant.php";

require_once "includes/session_control.php";
require_once "includes/db_connect.php";

include "templates/header.php";
include "templates/nav.php";
?>
<div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Super User Control Panel</h1>
            </div>
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
					<th>AccessTime</th>
				</tr>
			</thead>
			<tbody>
	
                <?php

                     $all_users = 'SELECT * FROM `users` WHERE `UserId`!= "'.$_SESSION["control"]["UserId"].'" ORDER BY `UserId`';
					 
	                 $result = $DbConn->query($all_users);
					 
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
								<td>$row[AccessTime]</td>
								
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
		
		<br><a class = "button" href = "AddUser.php" >Add User </a></br>
		
		
	          </div>
			  </div>
<?php
include "templates/footer.php";
?>