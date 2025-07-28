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
    <title>About Us</title>
    <link rel="stylesheet" href="css/Events.css" />
    <link rel="stylesheet" href="css/slider.css" />
    <link rel="stylesheet" href="css/aboutus.css" />
    <link rel="stylesheet" href="css/departments.css" />
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
    <p style="background-image: url('Images/green.jpg');"></p>
   
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
<div class="heading">
    <h1>About Us</h1>
    <p>Since its establishment in 2001, NCIT has been providing global 21st-century school and college education in Nepal.

       
</div>
<div class="container">
    <selection class="about">
        <div class="about-image" >
            <img src="Images/s2.jpeg">

        </div>
        <div class="about-content">
           <h2>NCIT, a pioneer private institution  providing engineering education in  Nepal</h2> 
           <p>The institution is committed to providing quality education  in various engineering disciplines keeping in mind  emerging professional needs. Our highly qualified and  experienced faculty is fully dedicated to their teaching. We  have a state-of-the-art infrastructure to foster academic  excellence. Moreover, we provide vital non-credit inputs  including research & project work, supplementing the  regular courses to meet the diverse learning needs of its  students and improve their employability.</p>
           <a href=""class='read-more'>Read more</a>
        </div>
    </selection>
   
</div>
<div class="slider-container">

    <div class="swiper">
        
        <div class="swiper-wrapper">
          
          <div class="swiper-slide"><a href=""><img src="Images/slider1.jpg" width="100%" height="100%"></a></div>
          <div class="swiper-slide"><a href=""><img src="Images/slider2.jpg" width="100%" height="100%"></a></div>
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
    <h1>Our Team</h1>
    <div class="team">
      <div class="team_member">
        <div class="team_img">
          <img src="Images/T1.jpg" alt="Team_image">
        </div>
        <h3>Bimarsha Uprety</h3>
        <p class="role">201550</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
      </div>
      <div class="team_member">
        <div class="team_img">
          <img src="Images/t2.jpg" alt="Team_image">
        </div>

        <h3>Pradeep Bhatt</h3>
        <p class="role">201540</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p></div>
      <div class="team_member">
        <div class="team_img">
          <img src="Images/T3.jpg" alt="Team_image">
        </div>
        <h3>Sankher Pangeni</h3>
        <p class="role">201549</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quaerat tempora, voluptatum quas facere dolorum aut cumque nihil nulla harum nemo distinctio quam blanditiis dignissimos.</p>
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