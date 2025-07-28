<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Notices - College Engagement Portal</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/departments.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        *{
  margin:0;
  padding:0;
  font-family: 'Poppins',sans-serif;
  color: green;
  
  
}

body{
  height:1000px;
}



.header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  padding-bottom: 20px;
  height: 2rem;
  margin-top: 10px;
  
  border-bottom: 5px solid green;
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


.navigation-bar {
  
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  
}

.navigation-bar li {
  margin-right: 30px;
  border: 2px solid green;
  font-size: 20px;
  padding: 5px;
  
  font-weight: bold;
  border-radius: 10px;
  transition: border-radius 0.3s ease, box-shadow 0.3s ease;
  
}

.navigation-bar li:hover {
  transform: scale(1.1); /* Increase the size on hover */
  border-radius: 90px; /* Adjust the border-radius on hover */
  box-shadow: 0 4px 10px green; /* Add box shadow on hover */
}

.navigation-bar  :hover
{
color: white;
background-color: green;


}


.container {
  height: 500px; /* adjust as needed */
}

.navigation-bar li a {
  text-decoration: none;
  color: green;
}

@media (max-width: 600px) {
  .logo {
      width: 100px; /* Adjust the width for smaller screens */
  }

  .header{
      flex-direction: column;
      align-items: center;
  }

  .navigation-bar {
      flex-direction: column;
      align-items: center;
  }

  .navigation-bar li {
      margin-right: 0;
      margin-bottom: 10px;
  }
}


        /* Reset default browser styles */
        body, h1, h2, ul, li {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        ul {
            margin-bottom: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        strong {
            font-weight: bold;
        }

        /* Styling for the notice items */
        .notice-item {
            border: 1px solid #ccc;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Styling for links */
        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Responsive styles */
        @media screen and (max-width: 767px) {
            body {
                padding: 10px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }
        }
        

.footer {
 
 margin-top: 10rem;
  padding: 20px;
  text-align: center;
}

.social-icons a {
  display: inline-block;
  margin-right: 10px;
  color: #333;
  font-size: 40px;
  
}

.contact-us {
  margin-top: 20px;
  
}

.contact-us h2 {
  
  margin-bottom: 10px;
}

.contact-us p {
  font-size: 14px;
  margin-bottom: 5px;
}

.footer p {
  font-size: 20px;
  margin: 5px 0;
}

.footer p:last-child {
  margin-bottom: 0;
}

    </style>
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
   <center> <h1>Notices</h1></center>

    <h2>Upcoming Events:</h2>
    <ul>
        <li class="notice-item">
            <strong>Welcome Program:</strong><br>
            Date: 2022-02-02<br>
            Time: 10:00<br>
            Venue: Solti Hotel<br>
             Don't miss out on the most awaited event of the year! Our Welcome program  promises to be a celebration of talent, creativity, and diversity. Get ready to showcase your skills and be a part of an unforgettable experience. <a href="#">Read more</a>
        </li>
        
    </ul>

    <h2>Opportunities:</h2>
    <ul>
        <li class="notice-item">
            <strong>Internship Program:</strong><br>
            Application Deadline: 2023-08-02<br>
            Interested in gaining practical experience in your field of study? Apply for our exclusive internship program with renowned companies to kickstart your career.<a href="#">Read more</a>
        </li>
        
    </ul>

    <h2>Student Clubs and Societies:</h2>
    <ul>
        <li class="notice-item">
            <strong>Debating Competition:</strong><br>
             Join our debating Competition to enhance your public speaking skills and engage in intellectual debates on various topics.<a href="#">Read more</a>
        </li>
        
    </ul>

    <h2>Important Announcements:</h2>
    <ul>
        <li class="notice-item">
            <strong>Holiday Notice:</strong><br>
            Date: 2022-04-05<br>
             The college will remain closed on 2022-04-05 in occasion of Nepal Banda. Plan your study schedule accordingly.<a href="#">Read more</a>
        </li>
        
    </ul>

    <h2>Volunteer Opportunities:</h2>
    <ul>
        <li class="notice-item">
            <strong>National Republic Day:</strong><br>
             2023-04-01<br>
             Join us in giving back to the community by participating in National Republic Day . Let's make a positive impact together!<a href="#">Read more</a>
        </li>
        
    </ul>

    <h2>Reminder:</h2>
    <ul>
        <li class="notice-item">
            <strong>Exam Form submission!!!</strong><br>
             Students who haven't submitted their exam form yet are requested to do so from the administration office by tomorrow.<a href="#">Read more</a>
        </li>
        
    </ul>

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
