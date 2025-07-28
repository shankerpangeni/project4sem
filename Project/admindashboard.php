<?php
session_start();
if($_SESSION['check'] !=  "aloggedin"){
	header("Location: adminlogin.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/admindashboard.css">
	<?php
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"signup");
	?>
</head>
<body>
<div class="form">

<a href="logout.php">Log out</a>
	<div id="header"><br>
		<center>College Engagement Portal <br> <br> Admin Dashboard 
		</center>
	</div>
		<br><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						<input class="menu" type="submit" name="search_student" value="Search Student">
					</td>
				</tr>
				<tr>
					<td>
						<input class="menu" type="submit" name="edit_student" value="Edit Student">
					</td>
				</tr>
				<tr>
					<td>
						<input class="menu" type="submit" name="add_new_student" value="Add New Student">
					</td>
				</tr>
				<tr>
					<td>
						<input class="menu" type="submit" name="delete_student" value="Delete Student">
					</td>
				</tr>
				<tr>
					<td>
						<input class="menu" type="submit" name="view_all_records" value="View all records">
					</td>
				</tr>
				<tr>
					<td>
						<input class="menu" type="submit" name="view_pubg_records" value="View pubg records">
					</td>
				</tr>
			</table>
		</form>
		<div id="demo">
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
						<br><br><br>
					<b>Enter Roll No:</b>&nbsp;&nbsp; <input class="entry" type="text" name="roll_no" required>
					<input class="box" type="submit" name="search_by_roll_no_for_search" value="Search">
					</form><br><br>
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from registration where roll = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					$emailcount= mysqli_num_rows($query_run);
					if($emailcount>0){
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table>
							<br><br><br>
							<tr>
								<td>
									<b>Email:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['email']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>UserName:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['username']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Roll:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['roll']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Department:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['department']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Semester:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['semester']?>" disabled>
								</td>
							</tr>
							<tr>
								<td>
									<b>Phone no:</b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['phone']?>" disabled>
								</td>
							</tr>
							
						</table>
						<?php
					}
				}else{ ?>
					
					<script type="text/javascript">
					alert("Roll number not found!!!");
					window.location.href = "admindashboard.php";
					</script><?php
				}

				}
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				<br><br><br>
				<b>Enter Roll No:</b>&nbsp;&nbsp; <input class="entry" type="text" name="roll_no" required>
				<input class="box" type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from registration where roll = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				$emailcount= mysqli_num_rows($query_run);
					if($emailcount>0){
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="admin_edit_student.php" method="post">
					<table>
					<br><br><br>
							<tr>
								<td>
									<b>email:</b>
								</td> 
								<td>
									<input type="text" name="email" value="<?php echo $row['email']?>" >
								</td>
							</tr>

							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="text" name="password" value="<?php echo $row['upassword']?>">
								</td>
							</tr>


							<tr>
								
								<td>
									<b>UserName:</b>
								</td> 
								<td>
									<input type="text" name="username" value="<?php echo $row['username']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Roll:</b>
								</td> 
								<td>
									<input type="text" name="roll" value="<?php echo $row['roll']?>" readonly>
								</td>
							</tr>
							<tr>
								<td>
									<b>Department:</b>
								</td> 
								<td>
									<input type="text" name="department" value="<?php echo $row['department']?>">
								</td>
							</tr>
							
							
							<tr>
								<td>
									<b>Semester:</b>
								</td> 
								<td>
									<input type="text" name="semester" value="<?php echo $row['semester']?>">
								</td>
							</tr>
							<tr>
								<td>
									<b>Phone No.:</b>
								</td> 
								<td>
									<input type="text" name="phone" value="<?php echo $row['phone']?>">
								</td>
							</tr>
							<br>
						<tr>
							<td></td>
							<td>
								<input class="box" type="submit" name="edit" value="Save">
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			}else{?>
				<script type="text/javascript">
					alert("Roll number not found!!!");
					window.location.href = "admindashboard.php";
					</script> <?php
				
			}
			}
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				<br><br><br>
				<b>Enter Roll No:</b>&nbsp;&nbsp; <input class="entry" type="text" name="roll">
				<input class="box" type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>
		<!-- #Code for add new student -->
			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<form action="add_student.php" method="post">
					<table>
					<br><br><br>
					<p id="parav" ></p>
							<tr>
								<td>
									<b>email:</b>
								</td> 
								<td>
									<input type="text" name="email" value="" required>
								</td>
							</tr>

							<tr>
								<td>
									<b>Password:</b>
								</td> 
								<td>
									<input type="text" name="password" value="" required>
								</td>
							</tr>


							<tr>
								
								<td>
									<b>UserName:</b>
								</td> 
								<td>
									<input type="text" name="username" value="" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Roll:</b>
								</td> 
								<td>
									<input type="text" name="roll" value="" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Department:</b>
								</td> 
								<td>
									<input type="text" name="department" value="" required>
								</td>
							</tr>
							
							
							<tr>
								<td>
									<b>Semester:</b>
								</td> 
								<td>
									<input type="text" name="semester" value="" required>
								</td>
							</tr>
							<tr>
								<td>
									<b>Phone No.:</b>
								</td> 
								<td>
									<input type="text" name="phone" value="" required>
								</td>
							</tr>
							<br>
						<tr>
							<td></td>
							<td>
								<input class="box" type="submit" name="add" value="Add" required>
							</td>
						</tr>
					</table>
					</form>
					<?php
				}
			?>
			</div>
			<?php
			if(isset($_POST['view_all_records']))
			{
			?>
				<center id="tab">
			
				<table class="tabl">
					<tr class="tabl">
						<th class="tabl">Email</th>
						<th class="tabl">UserName</th>
						<th class="tabl">Roll</th>
						<th class="tabl">Department</th>
						<th class="tabl">Semester</th>
						<th class="tabl">Phone</th>
						
						
					</tr>
					<?php
						$query = "Select * from registration order by roll ASC";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)) {
						
					?>
					<tr  class="tabl">
						<td class="tabl"><?php echo $row['email'];?></td>
						<td class="tabl"><?php echo $row['username'];?></td>
						<td class="tabl"><?php echo $row['roll'];?></td>
						<td class="tabl"><?php echo $row['department'];?></td>
						<td class="tabl"><?php echo $row['semester'];?></td>
						<td class="tabl"><?php echo $row['phone'];?></td>
						
						
						
					</tr>
				<?php
					}
				?>

				</center>
			<?php
			}
			?>


 			<?php
			if(isset($_POST['view_pubg_records']))
			{
			?>
				<center id="tab">
			
				<table class="tabl">
					<tr class="tabl">
						<th class="tabl">Caption name</th>
						<th class="tabl">Captain Roll</th>
						<th class="tabl">Semester</th>
						<th class="tabl">Department</th>
						<th class="tabl">Player1 name</th>
						<th class="tabl">Player1 Roll</th>
						<th class="tabl">Player2 name</th>
						<th class="tabl">Player2 Roll</th>
						<th class="tabl">Player3 name</th>
						<th class="tabl">Player3 Roll</th>
						<th class="tabl">Player4 name</th>
						<th class="tabl">Player4 Roll</th>
						
						
					</tr>
					<?php
						$query = "Select * from pubgregister ";
						$query_run = mysqli_query($connection,$query);
						while ($row = mysqli_fetch_assoc($query_run)) {
						
					?>
					<tr  class="tabl">
						<td class="tabl"><?php echo $row['cname'];?></td>
						<td class="tabl"><?php echo $row['croll'];?></td>
						<td class="tabl"><?php echo $row['semester'];?></td>
						<td class="tabl"><?php echo $row['department'];?></td>
						<td class="tabl"><?php echo $row['p1name'];?></td>
						<td class="tabl"><?php echo $row['p1roll'];?></td>
						<td class="tabl"><?php echo $row['p2name'];?></td>
						<td class="tabl"><?php echo $row['p2roll'];?></td>
						<td class="tabl"><?php echo $row['p3name'];?></td>
						<td class="tabl"><?php echo $row['p3roll'];?></td>
						<td class="tabl"><?php echo $row['p4name'];?></td>
						<td class="tabl"><?php echo $row['p4roll'];?></td>
						
						
						
					</tr>
				<?php
					}
				?>

				</center>
			<?php
			}
			?>
		</div>

</body>
</html>