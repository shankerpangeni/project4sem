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
    <title>Library</title>
    <link rel="stylesheet" href="css/library.css">
    <link rel="stylesheet" href="css/Home.css">
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel="stylesheet" href="css/departments.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    </head>
<body style="background-image: url(Images/back.jpg);background-size: cover;">
    
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
        <h1>Library</h1>
        <p>Since its establishment in 2001, NCIT has been providing global 21st-century school and college education in Nepal.</p>
    
    
        <div class="slider-container">

            <div class="swiper">
                
                <div class="swiper-wrapper">
                  
                  <div class="swiper-slide"><a href=""><img src="Images/liba.webp" width="50%"height="560rem"><img src="Images/liba.jpeg" width="50%" height="560rem"></a></div>
                  <div class="swiper-slide"><a href=""><img src="Images/s1.jpeg" width="50%" height="560rem"><img src="Images/libar.webp" width="50%" height="560rem"></a></div>
                  <div class="swiper-slide"><a href=""><img src="Images/library.jpg" width="50%" height="560rem"><img src="Images/hello.jpeg" width="50%" height="560rem"></a></div>
                  
                </div>
                <div class="swiper-pagination"></div>
              
               
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> 
                <script src="home.js"></script>
              
        
              
                
              </div>
        </div>
  
    </div>

       

     
      <div class="background" style="background-image: url(Images/bookss.jpg);">
        <div class="section-body">
            <div class="vertical-nav ">
                <ul>
                    <div class="h4"h4>Choose your faculty</h4></div>
                    <li><a href="#BEIT">BE-IT</a></li>
                    <li><a href="#BECIVIL">BE-CIVIL</a></li>
                    <li><a href="#BECOMPUTER">BE-Computer</a></li>
                
                </ul>
            </div>
           </div>
      </div>
        
       
        
           

            
    <div class="gallery-main" >
        <div class="BEIT" id="BEIT">
            <h2>BE-IT<br></br></h2>

            <div class="gallery">
                <div class="image-holder">
                    <a href="#">
                        <img src="Images/physics.jpg" alt="img-1">
                    </a>
                    <div class="desc">
                       
                        <button>Borrow</button>
                    </div>
                </div>

                <div class="image-holder">
                    <a href="#">
                        <img src="Images/oop.jpg" alt="img-1">
                    </a>
                    <div class="desc">
                        
                        <button>Borrow</button>
                    </div>
                </div>

                <div class="image-holder">
                    <a href="#">
                        <img src="Images/java.jpeg" alt="img-1">
                    </a>
                    <div class="desc">
                     
                        
                        <button>Borrow</button>
                    </div>
                </div>

                <div class="image-holder">
                    <a href="#">
                        <img src="Images/dbms.jpeg" alt="img-1">
                    </a>
                    <div class="desc">
                       
                        <button>Borrow</button>
                    </div>
                    </div>
            </div>
        </div>
    
                    <div class="BECIVIL" id="BECIVIL">
                        <h2>BE-CIVIL<br></br></h2>
            
                        <div class="gallery">
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/physics.jpg" alt="img-1">
                                </a>
                                <div class="desc">
                                    
                                    <button>Borrow</button>
                                </div>
                            </div>
            
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/oop.jpg" alt="img-1">
                                </a>
                                <div class="desc">
                                    
                                    <button>Borrow</button>
                                </div>
                            </div>
            
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/java.jpeg" alt="img-1">
                                </a>
                                <div class="desc">
                                   
                                    <button>Borrow</button>
                                </div>
                            </div>
            
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/dbms.jpeg" alt="img-1">
                                </a>
                                <div class="desc">
                                    
                                    <button>Borrow</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="gallery-main" >
                    <div class="BECOMPUTER" id="BECOMPUTER">
                        <h2>BE-COMPUTER<br></br></h2>
            
                        <div class="gallery">
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/physics.jpg" alt="img-1">
                                </a>
                                <div class="desc">
                                    
                                    <button>Borrow</button>
                                </div>
                            </div>
            
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/oop.jpg" alt="img-1">
                                </a>
                                <div class="desc">
                                    
                                    <button>Borrow</button>
                                </div>
                            </div>
            
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/java.jpeg" alt="img-1">
                                </a>
                                <div class="desc">
                                    
                                    <button> Borrow</button>
                                </div>
                            </div>
            
                            <div class="image-holder">
                                <a href="#">
                                    <img src="Images/dbms.jpeg" alt="img-1">
                                </a>
                                <div class="desc">
                                    
                                    <button>Borrow</button>
                                </div>
                                </div>
                        </div>
                    </div>         
                </div>
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