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
    <title>Events</title>
    <link rel="stylesheet" href="css/Events.css" />
    <link rel="stylesheet" href="css/departments.css" />
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

.profile {
  max-width: 60%;
  height: 80%;
  margin-top: 5px;

  
  width: 07rem; 
  display: flex;
  justify-content: center;
  padding-bottom: 10px;
  align-items: center;
}

.logo {
  max-width: 70%;
  height: 90%;
  padding-top: 10px;
  
  width: 07rem; 
  display: flex;
  justify-content: center;
  padding-bottom: 10px;
  align-items: center;
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




    <div class="slider-container">
      <div class="swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="pubg-register.php"
              ><img src="Images/pubgmobile.jpg" width="100%" height="100%"
            /></a>
          </div>
          <div class="swiper-slide">
            <a href=""
              ><img src="Images/fifa23.jpg" width="100%" height="100%"
            /></a>
          </div>
          <div class="swiper-slide">
            <a href=""><img src="Images/Cricket.jpg" width="100%" height="100%" /></a>
          </div>
          <div class="swiper-slide">
            <a href=""
              ><img src="Images/football.jpeg" width="100%" height="100%"
            /></a>
          </div>
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="slider.js"></script>

    <div class="events-header">
      <center><span>Our Events</span></center>
    </div>

    <div class="events-type">
      <center><span>Ongoing Sports</span></center>
    </div>



    <div class="sub-header">
      <div class="features">
        <div class="feature-header">
          <span class="span-feature-header">Cricket</span>
        </div>
        <div class="img-property">
          <img src="Images/Cricket.jpg" alt="fifa-imagae" class="events-img" />
        </div>
        <div class="img-description">
          <center>
            <span
              >if you are intrested in participate in football in ongoing
              tournament then you can register below</span
            >
          </center>
        </div>
        <div class="participate-button">
          <a href="cricket-register.php"><button name="register" class="register">Register</button></a>
        </div>
      </div>

      <div class="features">
        <div class="feature-header">
          <span class="span-feature-header">Badminton</span>
        </div>
        <div class="img-property">
          <img src="Images/badminton.jpg" alt="fifa-imagae" class="events-img" />
        </div>
        <div class="img-description">
          <center>
            <span
              >if you are intrested in participate in Badminton in ongoing
              tournament then you can register below</span
            >
          </center>
        </div>
        <div class="participate-button">
          <button name="register" class="register">Register</button>
        </div>
      </div>

      <div class="features">
        <div class="feature-header">
          <span class="span-feature-header">Football</span>
        </div>
        <div class="img-property">
          <img src="Images/football.jpeg" alt="fifa-imagae" class="events-img" />
        </div>
        <div class="img-description">
          <center>
            <span
              >if you are intrested in participate in football in ongoing
              tournament then you can register below</span
            >
          </center>
        </div>
        <div class="participate-button">
          <button name="register" class="register">Register</button>
        </div>
      </div>
    </div>



    <div class="events-type">
      <center><span>Ongoing E-Sports</span></center>
    </div>

    <div class="sub-header">
      <div class="features">
        <div class="feature-header">
          <span class="span-feature-header">PUBG-MOBILE</span>
        </div>
        <div class="img-property">
          <img src="Images/pubgmobile.jpg" alt="fifa-imagae" class="events-img" />
        </div>
        <div class="img-description">
          <center>
            <span
              >if you are intrested in participate in PUBG-mobile in ongoing
              tournament then you can register below</span
            >
          </center>
        </div>
        <div class="participate-button">
        <a href="pubg-register.php"><button name="register" class="register">Register</button></a>
        </div>
      </div>

      <div class="features">
        <div class="feature-header">
          <span class="span-feature-header">Valorant</span>
        </div>
        <div class="img-property">
          <img src="Images/valorant.webp" alt="fifa-imagae" class="events-img" />
        </div>
        <div class="img-description">
          <center>
            <span
              >if you are intrested in participate in Valorant in ongoing
              tournament then you can register below</span
            >
          </center>
        </div>
        <div class="participate-button">
          <a href="valorant-register.html"><button name="register" class="register">Register</button></a>
        </div>
      </div>

      <div class="features">
        <div class="feature-header">
          <span class="span-feature-header">Fifa23</span>
        </div>
        <div class="img-property">
          <img src="Images/fifa23.jpg" alt="fifa-imagae" class="events-img" />
        </div>
        <div class="img-description">
          <center>
            <span
              >if you are intrested in participate in Fifa23 in ongoing
              tournament then you can register below</span
            >
          </center>
        </div>
        <div class="participate-button">
          <button name="register" class="register">Register</button>
        </div>
      </div>
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
