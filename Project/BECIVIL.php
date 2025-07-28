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
    <title>BECIVIL</title>
    <link rel="stylesheet" href="css/Events.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/beit.css" />
    <link rel="stylesheet" href="css/departments.css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap"rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
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
  </head>

  <body >
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
              <li> <a href="logout.php"class="logout">Logout </a></li>
          </ul>
      </div>
  </div>

<div class="heading">
    <h1>Bachelor of Civil Engineering</h1>
    <p>Civil engineering: Empowering lives and sculpting our world! </p>

       
</div>
<div class="container">
    <selection class="about">
        <div class="about-image" >
            <img src="Images/civil.webp" width="90%">

        </div>
        <div class="about-content">
           <h2>BE Civil: Professional engineering for planning, designing, constructing, and maintaining natural environment infrastructure.</h2> 
           <p>Engineering knowledge, skills and values among our students and enabling them to compete and contribute in the local and the global arena. This   department aims to inculcate foundation for analytical and experimental skills among the students applicable in various elds of Civil Engineering such as   Transportation Engineering, Structural Engineering, Surveying, Urban Engineering, Water Resource Engineering, Geotechnical Engineering etc. We   assure   all aspiring students to endow with sophisticated knowledge that would pave ways for glittering career in the area of your expertise.</p>
           <a href=""class='read-more'>Enroll</a>
        </div>
    </selection>
   
</div>
<div class="slider-container">

    <div class="swiper">
        
        <div class="swiper-wrapper">
          
          <div class="swiper-slide"><a href=""><img src="Images/civil3.jpg" width="100%" height="100%"></a></div>
          <div class="swiper-slide"><a href=""><img src="Images/civil2.jpg" width="100%" height="100%"></a></div>
          <div class="swiper-slide"><a href=""><img src="Images/slider3.jpg" width="100%" height="100%"></a></div>
          
        </div>
        <div class="swiper-pagination"></div>
      
       
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> 
        <script src="home.js"></script>
      

      
        
      </div>
</div>

<div class="wrapper">
    <h1>HoD Message</h1>
    <div class="team">
      
      <div class="team_member">
        <div class="team_img">
          <img src="Images/T3.jpg" alt="Team_image">
        </div>

        <h3>Shanker Pangeni</h3>
        <p class="role">Head of Department</p>
        <p class="h5">Department of Civil Engineering at COP is endowed with the state-of-the-art laboratories, academically acclaimed teaching faculties and professionally   proven sta s. Along with imparting education and expanding your horizon of expertise through elective courses, seminars, trainings, workshops, eld visits, survey camps etc., we are striving to groom you as a pro cient engineer and a better human being who can contribute to the society, nation and the whole world at large.

            We heartily welcome all aspiring students!</p></div>
        
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