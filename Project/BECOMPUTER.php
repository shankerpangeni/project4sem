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
    <title>BECOMPUTER</title>
    <link rel="stylesheet" href="css/Events.css" />
    <link rel="stylesheet" href="css/departments.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/beit.css" />
    
    
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
    <h1>Bachelor of Computer Engineering</h1>
    <p>Computer engineering: Unleashing the digital revolution to empower the world</p>

       
</div>
<div class="container">
    <selection class="about">
        <div class="about-image" >
            <img src="Images/comp1.jpeg" width="90%">

        </div>
        <div class="about-content">
           <h2>Computer Engineering integrates several elds of computer science and electronics engineering required to develop computer hardware and software.</h2> 
           <p>Computer Engineering provides students with a foundation in the core computer technologies. The programme covers the theoretical and practical aspects of both hardware and software. Professionally, it instills the knowledge of making computing platforms more effective, embedding computing devices in machines & systems, and developing faster, smaller, and  more efficient computers. It also deals with further advancements globally in digital technology, computer  networking, and computer systems.</p>
           <a href=""class='read-more'>Enroll</a>
        </div>
    </selection>
   
</div>
<div class="slider-container">

    <div class="swiper">
        
        <div class="swiper-wrapper">
          
          <div class="swiper-slide"><a href=""><img src="Images/comp2.jpg" width="100%" height="100%"></a></div>
          <div class="swiper-slide"><a href=""><img src="Images/comp3.jpg" width="100%" height="100%"></a></div>
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
          <img src="Images/T1.jpg" alt="Team_image">
        </div>

        <h3>Bimarsha Uprety</h3>
        <p class="role">Head of Department</p>
        <p class="h5">Computer Engineering Department at COP provides a sophisticated learning atmosphere enriched with academically acclaimed teaching professionals and supportive administration. Throughout engineering study, the department involves the students into various trainings, seminars, and workshops with a view to fostering their knowledge, skills and expertise. The Department prepares students to pursue their career in the promising elds like computer hardware and software design, embedded systems, computer networks and security, system integration and electronic design automation.

            I welcome all aspiring students at the Department of Computer Engineering and wish you glittering careers ahead!</p></div>
        
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