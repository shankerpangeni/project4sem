<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the roll number from the form
    $rollNumber = $_POST['roll'];

    // Validate the roll number
    if (!is_numeric($rollNumber) || $rollNumber <= 0) {
        echo "<script>
        alert('Invalid Roll Number!!');
      window.location.href = 'admindashboard.php';
    </script>";
     exit(0);
    
        }
        elseif(!preg_match('/^[A-Za-z\s]+$/',$_POST['username'])){
            echo "<script>
            alert('!!');
          window.location.href = 'admindashboard.php';
        </script>";
         exit(0);
    }

    elseif(!preg_match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $_POST['email'])){
        echo "<script>
        alert('Email format should be matched!!');
      window.location.href = 'admindashboard.php';
    </script>";
     exit(0);
    }

    elseif(!preg_match('/^[1-8]$/', $_POST['semester'])){
        echo "<script>
        alert('Semester should be between 1 and 8');
      window.location.href = 'admindashboard.php';
    </script>";
     exit(0);

    }
    


    else {
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "signup");
        
        // Check if the roll number exists in the database
        $query = "SELECT * FROM registration WHERE roll = $rollNumber";
        $query_run = mysqli_query($connection, $query);

        if (mysqli_num_rows($query_run) > 0) {
            // The roll number exists, delete the record
			echo "<script>
			alert('Roll number already exists!!');
		  window.location.href = 'admindashboard.php';
		</script>";
		 exit(0);
        } else {
            // The roll number doesn't exist
			
		 $query = "insert into registration values('$_POST[email]','$_POST[password]','$_POST[username]','$_POST[roll]','$_POST[department]','$_POST[semester]','$_POST[phone]')";
			$query_run = mysqli_query($connection,$query);
            echo "<script>
			alert('Record Added Successfully!!');
		  window.location.href = 'admindashboard.php';
		</script>";
		 exit(0);
        }
    }
}
?>

