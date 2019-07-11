<?php
session_start();
include "includes/constant.php";

require_once "includes/session_control.php";
require_once "includes/db_connect.php";

include "templates/header.php";
include "templates/sunav.php";
?>
<div>
<div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Super User Control Panel</h1>
            </div>
        </div>
		
		<div class="container">
		<div>
		<h1> User List </h1>
		</div>
		
		<div class="container">
		<a class = "button" href = "add_user.php" >Add A New User </a></br>
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
									
									<form method='POST' action='data_process/processes.php'>
										
										<input class='btn btn-primary' type='submit' name='DELETE' value='Delete'>
									</form>	
									
								</td>	
									
								<td>
									<form method='POST' action='data_process/update_processes.php'>
									<input class='btn btn-primary' type='submit' name='UPDATEUSER' value='Update' />
										
										
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