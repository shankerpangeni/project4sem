<?php
session_start();
if($_SESSION['check']!="sloggedin"){
	header('Location: login.php');
}

?>
<?php
$cname=$croll=$semester=$department=$p1name=$p1roll=$p2name=$p2roll=$p3name=$p4roll=$p4name=$p4roll="";


  
  function input_data($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pubg||Registration</title>
    <link rel="stylesheet" href="css/pubg-register.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/departments.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
      
    <style>
        .player-details{

            height: 580px;
            align-items: center;


        }

        .register-form
        {
            height: 970px;
        }


        

.profile {
  max-width: 60%;
  height: 80%;
  margin-top: 5px;

  
  width: 07rem; 
  display: flex;
  justify-content: center;
  padding-bottom: 10px;
  align-items: center;/* Adjust the width as needed */
}

.logo {
  max-width: 70%;
  height: 90%;
  padding-top: 10px;
  
  width: 07rem; 
  display: flex;
  justify-content: center;
  padding-bottom: 10px;
  align-items: center;/* Adjust the width as needed */
}

.left-header{
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;

}
  
   

    </style>
  </head>

  <body>
    <div class="header">
      <div class="left-header">
        <a href="Home.php"
          ><img src="Images/logo.jpg" alt="logo" class="logo"
        /></a>
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

    <div class="game-description">
      <span class="game-info"
        >This is the ongoing tournament of college which is organized by -------
        commiteee
      </span>
      <p class="game-info2">Please fill up the form Below.</p>
    </div>

    <div class="registration-form">
    
      <span class="registration-title"> Registration Of Pubg-Mobile</span>
      <p id="parav" ></p>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="captain-details">
          <span class="player-header"> Captain Detail:</span>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Captain Name:</label>
              <input type="text" name="cname" value="<?php echo $_SESSION['username']; ?>" required readonly/>
            </div>

            <div class="input-captain">
              <label for="Name">Captain RollNo:</label>
              <input type="text" name="croll"  value="<?php echo $_SESSION['roll']; ?>" required readonly/>
            </div>

            <div class="input-captain">
              <label for="Name"> Semester </label>
              <input type="text" name="semester" required  value="<?php echo $_SESSION['semester']; ?>" readonly/>
            </div>


            <div class="input-captain">
              <label for="Name"> Department</label>
              <input type="text" name="department" required value="<?php echo $_SESSION['department']; ?>" readonly/>
            </div>
          </div>
        </div>

        <div class="player-details">
        
          <span class="player-header"> Players Details:</span>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player1 Name:</label>
              <input type="text" name="p1name" required  value="<?php echo $_SESSION['username']; ?>" readonly/>
            </div>

            <div class="input-captain">
              <label for="Name">Player1 RollNo:</label>
              <input type="text" name="p1roll" required  value="<?php echo $_SESSION['roll']; ?>" readonly/>
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player2 Name:</label>
              <input type="text" name="p2name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player2 RollNo:</label>
              <input type="text" name="p2roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player3 Name:</label>
              <input type="text" name="p3name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player3 RollNo:</label>
              <input type="text" name="p3roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player4 Name:</label>
              <input type="text" name="p4name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player4 RollNo:</label>
              <input type="text" name="p4roll" required />
            </div>
          </div>
            <input type="submit" value="Register" name="submit"class="register" >
          

        </div>
        
      </form>
    </div>


    <div class="footer">
    <div class="social-icons">
      <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
      <a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a>
    </div>
    <div class="contact-us">
      <h1 >Contact Us</h1>
      <p>balkumari, Lalitpur, Nepal</p>
      <p>Phone: 9865741580</p>
      <p>Email: college@gmail.com</p>
    </div>
    <div class="copyright">
      <p>&copy; 2023 College EngagementPortal. All rights reserved.</p>
    </div>
  </div>
  </body>
</html>
<?php
include 'database.php';
if (isset($_POST['submit'])) {
    
    $cname=$_POST['cname'];
    $croll=$_POST['croll'];
    $semester=$_POST['semester'];
    $department=$_POST['department'];
    $p1name=$_POST['p1name'];
    $p1roll=$_POST['p1roll'];
    $p2name=$_POST['p2name'];
    $p2roll=$_POST['p2roll'];
    $p3name=$_POST['p3name'];
    $p3roll=$_POST['p3roll'];
    $p4name=$_POST['p4name'];
    $p4roll=$_POST['p4roll'];
    
    
    

        $emailq="select * from pubgregister where croll ='$croll'";
        $query=mysqli_query($conn,$emailq);
        $emailcount= mysqli_num_rows($query);
        if($emailcount > 0){
          echo "<script>";
          echo "document.getElementById('parav').innerHTML='you are already  registered for this event!!!'";
          echo "</script>";
        }
        else{
            $sql="insert into pubgregister(cname,croll,semester,department,p1name,p1roll,p2name,p2roll,p3name,p3roll,p4name,p4roll) values('$cname','$croll','$semester','$department','$p1name','$p1roll','$p2name','$p2roll','$p3name','$p3roll','$p4name','$p4roll')";
            if (mysqli_query($conn,$sql))
            {
              echo "<script>
              window.location.href = 'Events.php';
            </script>";
             exit(0);
              
            }
          
        }
}

?>
