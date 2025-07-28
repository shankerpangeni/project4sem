<?php
session_start();

?>
<?php
$email = $pass = "";
$Emailerr = $Passworderr = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    //Email validation
    if (empty($_POST['email'])) {
        $Emailerr = "Email cant be empty";
    } else {
        $email = input_data($_POST["email"]);
        if (!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
            $Emailerr = "email format should be matched";
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
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/adminlogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <center><span class="login-header"> Admin Login</span></center>

        <div class="login-input">
            <div class="label">
                <label for="E-mail">E-mail</label>
            </div>

            <div class="input">
                <input type="email" name="email" class="email"/>
            </div>
            <span class="error" style="color:red; font-size:10px;"><?php echo $Emailerr; ?></span>
        </div>

        <div class="login-input">
            <div class="label">
                <label for="Password">Password</label>
            </div>

            <div class="input">
                <input type="password" name="password" class="password"/>
            </div>

            <span class="error" style="color:red; font-size:10px;"><?php echo $Passworderr; ?></span>
        </div>

        <div class="login-input">
            <input type="submit" name="submit" value="Login" class="login-btn"/>
        </div>

        <p id="parav" ></p>
       
    </form>
</div>
</body>
</html>
<?php
include 'database.php';
if (isset($_POST['submit'])) {
if ($Emailerr == "" && $Passworderr == "") {
    $Email = $_POST['email'];
    $Pass = $_POST['password'];
    
    

    $emailq = "select * from admin where email ='$Email' and password ='$Pass'";
    $query = mysqli_query($conn,$emailq);
    $emailcount = mysqli_num_rows($query);
    if ($emailcount==1) {
        $array=mysqli_fetch_assoc($query);
       
        $_SESSION['check'] =  "aloggedin";
		
        
        echo "<script>
              window.location.href = 'admindashboard.php';
            </script>";
             exit(0);
    } 
    else {
                echo "<script>";
                echo "document.getElementById('parav').innerHTML='Incorrect credentials !!!<br>Please Login correctly !!!'";
                echo "</script>";
                
         }

    }
    
}

?>