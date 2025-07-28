<?php
    $uname = $email  = $pass = $cpass = $roll =$deparment=$semester=$phone="";
    $Nameerr = $Emailerr = $Phoneerr = $Passworderr = $CPassworderr =$error= $Rollerr=$Depterr=$Semerr="";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        //Name validation
        if (empty($_POST['fullname'])) {
            $Nameerr = "Name cant be empty";
        } else {
            $uname = input_data($_POST['fullname']);
            if (!preg_match('/^[A-Za-z\s]+$/',$uname)) {
                $Nameerr = "name format should be matched";
            }
        }
        //Email validation
        if (empty($_POST['email'])) {
            $Emailerr = "Email cant be empty";
        } else {
            $email = input_data($_POST["email"]);
            if (!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
                $Emailerr =  "email format should be matched";
            }
        }
        if (empty($_POST['password'])) {
            $Passworderr = "Password  cant be empty";
        } else {
            $pass = input_data($_POST['password']);
            if (!preg_match('/^\S*(?=\S{6,})(?=\S*\d)(?=\S*[A-Z])(?=\S*[a-z])(?=\S*[!@#$%^&*? ])\S*$/', $pass)) {
                $Passworderr = "Password format should be matched";
            }
        }
        if (empty($_POST['cpassword'])) {
            $CPassworderr = "confirm Password  cant be empty";
        } else {
            $cpass = input_data($_POST['cpassword']);
           if($cpass!=$pass){
            $CPassworderr="password and confirm password should be match";
           }
        }

        // Validate the roll number field
    if (empty($_POST["roll"])) {
        $Rollerr = "Roll number is required";
    } else {
        $rollNo = input_data($_POST["roll"]);
        
    }


        //department validation
    if (empty($_POST['department'])) {
        $Depterr = "Department can't be empty";
    } 


        //semester validation
    if (empty($_POST['semester'])) {
        $Semerr = "Semester cant be empty";
    } else {
        $semester = input_data($_POST['semester']);
        if (!preg_match('/^[1-8]$/', $semester)) {
            $Semerr = "semester should be betwenn 1-8";
        }
    }





        //phone validation
    if (empty($_POST['phone'])) {
        $Phoneerr = "Name cant be empty";
    } else {
        $phone = input_data($_POST['phone']);
        if (!preg_match('/^\d{10}$/',$phone)) {
            $Phoneerr = "phone number should be 10 digit long";
        }
    }

}

 

    function input_data($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        
?>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/signup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet" />
    <title>SignUp</title>
</head>
<body>

<div class="container" style="height: 1050px;">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <center><span class="login-header">SignUp</span></center>
        <p id="parav" style="margin-left:50px; color:red; font: size 15px;"> <?php echo $error; ?></p>

        <div class="login-input">
            <div class="label">
                <label for="E-mail">E-mail</label>
            </div>

            <div class="input">
                <input type="email" name="email" class="email" value="<?php echo $email; ?>" />
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Emailerr; ?></span>
        </div>

        <div class="login-input">
            <div class="label">
                <label for="Password">Password</label>
            </div>

            <div class="input">
                <input type="password" name="password" class="password" value="<?php echo $pass; ?>" />
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Passworderr; ?></span>
        </div>

        <div class="login-input">
            <div class="label">
                <label for="Password">Confirm Password</label>
            </div>

            <div class="input">
                <input type="password" name="cpassword" class="password">
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $CPassworderr; ?></span>
        </div>

        <div class="login-input">
            <div class="label">
                <label for="Password">College RollNo:</label>
            </div>

            <div class="input">
                <input type="number" name="roll" class="password" value="<?php echo $roll; ?>" />
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Rollerr; ?></span>
        </div>

        <div class="login-input">
            <div class="label">
                <label for="Password">Full Name:</label>
            </div>

            <div class="input">
                <input type="text" name="fullname" class="password" value="<?php echo $uname; ?>" />
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Nameerr; ?></span>
        </div>
        <div class="login-input">
            <div class="label">
                <label for="Password">Department:</label>
            </div>

            <div class="input">
                <input type="text" name="department" class="password" value="<?php echo $deparment; ?>" />
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Depterr; ?></span>
        </div>



        <div class="login-input">
            <div class="label">
                <label for="Password">Semester:</label>
            </div>

            <div class="input">
                <input type="text" name="semester" class="password" value="<?php echo $semester; ?>" />
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Semerr; ?></span>
        </div>



        <div class="login-input">
            <div class="label">
                <label for="Password">Phone no:</label>
            </div>

            <div class="input">
                <input type="number" name="phone" class="password" value="<?php echo $phone; ?>" />
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Phoneerr; ?></span>
        </div>

     

        <div class="login-input">
            <input type="submit" name="submit" value="SignUp" class="login-btn" />
        </div>

        <div class="login-footer">
            <span>Already have an account?<a href="login.php">Login</a></span>
        </div>
        
    </form>
</div>

</body>
</html>

 <?php
include 'database.php';
if (isset($_POST['submit'])) {
    if ($Nameerr == "" && $Emailerr == ""  && $Passworderr == "" && $CPassworderr == "" && $Rollerr=="" && $Depterr == "" && $Semerr == "" && $Phoneerr == "")
    {
    $uname=$_POST['fullname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $roll=$_POST['roll'];
    $department=$_POST['department'];
    $semester=$_POST['semester'];
    $phone=$_POST['phone'];
    

        $emailq="select * from registration where roll ='$roll'";
        $query=mysqli_query($conn,$emailq);
        $emailcount= mysqli_num_rows($query);
        if($emailcount>0){
            echo "<script>";
            echo "document.getElementById('parav').innerHTML='User already Exists !!!Please login !!!'";
            echo "</script>";
        }
        else{
            $sql="insert into registration(email,upassword,username,roll,department,semester,phone) values('$email','$pass','$uname','$roll','$department','$semester','$phone')";
            if (mysqli_query($conn,$sql))
            {
              
                echo "<script>
                alert('you are registered successfully!!');
              window.location.href = 'login.php';
            </script>";
             exit(0);
            }
          
        }
}
}
?>