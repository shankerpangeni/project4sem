<?php
session_start();
if($_SESSION['check']!="sloggedin"){
	header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
	<link rel="stylesheet" href="css/departments.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="header">
        <div class="left-header">
            <a href="Home.php"><img src="Images/logo.jpg" alt="logo" class="logo"></a>
            <a href="profile.php"><img src="Images/login.png" alt="profile" class="profile"></a>
        </div>
        <div class="right-header">
            <ul class="navigation-bar">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Notices.php">Notices</a></li>
                <li><a href="Events.php">Events</a></li>
				<li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">Departments</a>
                  <div class="dropdown-content">
                    <a href="BEIT.php">BE-IT</a>
                    <a href="BECOMPUTER.php">BE-COMPUTER</a>
                    <a href="BECIVIL.php">BE-CIVIL</a>
                  </div>
                </li>
                <li><a href="AboutUs.php">About Us</a></li>
                <li> <a href="userlogout.php"class="logout">Logout </a></li>
            </ul>
        </div>
    </div>
    <div id="header"><br>
		<center><span class="welcome">Welcome!!<?php echo  $_SESSION['username']; ?></span>
		</center>
	</div>
		<br><br><br>
		<form action="" method="post">
			<table >
				<tr>
					<td>
						<input class="menu" type="submit" name="my_info" value="My Information">
					</td>
				</tr>
				<tr>
					<td>
						<input class="menu" type="submit" name="registered_event" value="My Registered Event details">
					</td>
				</tr>
				
				
			</table>
		</form>
     <div id="menu" class="mytable">



    
     <?php
     include('database.php');
			if(isset($_POST['my_info']))
			{
			?>
				<center id="tab">
			
				<table class="tabl" border="2" >
					<tr class="tabl">
						<th class="tabl">Email</th>
						<th class="tabl">UserName</th>
						<th class="tabl">Roll</th>
						<th class="tabl">Department</th>
						<th class="tabl">Semester</th>
						<th class="tabl">Phone</th>
						
						
					</tr>
					<?php
                    $user=$_SESSION['email'];
						$query = "Select * from registration where email='$user'";
						$query_run = mysqli_query($conn,$query);
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
         include('database.php');
			if(isset($_POST['registered_event']))
			{
			?>
				<center id="tab">
			
				<table class="tabl" border="2px">
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
                        $user=$_SESSION['roll'];
						$query = "Select * from pubgregister where croll='$user' or p1roll='$user' or p2roll='$user'or p3roll='$user' or p4roll='$user' ";
						$query_run = mysqli_query($conn,$query);
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

