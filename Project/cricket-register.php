<?php
session_start();
if($_SESSION['check']!="sloggedin"){
	header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cricket||Registration</title>
    <link rel="stylesheet" href="css/pubg-register.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/departments.css" />
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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <style>
         .player-details
       {
           height: 1240px;
           align-items: center;
       }
    </style>
  </head>

  <body>
    <div class="header">
      <div class="left-header">
        <a href="Home.html"
          ><img src="Images/logo.jpg" alt="logo" class="logo"
        /></a>
      </div>
      <div class="right-header">
        <ul class="navigation-bar">
          <li><a href="Home.html">Home</a></li>
          <li><a href="Notices.html">Notices</a></li>
          <li><a href="Events.html">Events</a></li>
          <li><a href="Departments.html">Departments</a></li>
          <li><a href="AboutUs.html">About Us</a></li>
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
      <span class="registration-title"> Registration Of Cricket</span>

      <form action="">
        <div class="captain-details">
          <span class="player-header"> Captain Detail:</span>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Captain Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Captain RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>

            <div class="input-captain">
              <label for="Name">Section</label>
              <input type="text" name="captain-phonenum" required />
            </div>
          </div>
        </div>

        <div class="player-details">
          <span class="player-header"> Players Details:</span>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player1 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player1 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player2 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player2 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player3 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player3 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player4 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player4 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player5 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player5 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player6 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player6 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player7 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player7 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player8 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player8 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player9 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player9 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player10 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player10 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>

          <div class="in-captain-details">
            <div class="input-captain">
              <label for="Name">Player11 Name:</label>
              <input type="text" name="captain-name" required />
            </div>

            <div class="input-captain">
              <label for="Name">Player11 RollNo:</label>
              <input type="text" name="captain-roll" required />
            </div>
          </div>


        
            <input type="submit" value="Register" class="register" >
          




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
