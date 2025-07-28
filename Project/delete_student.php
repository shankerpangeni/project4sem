<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the roll number from the form
    $rollNumber = $_POST['roll'];

    // Validate the roll number
    if (!is_numeric($rollNumber) || $rollNumber <= 0) {
        echo "Invalid roll number.";
    } else {
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection, "signup");
        
        // Check if the roll number exists in the database
        $query = "SELECT * FROM registration WHERE roll = $rollNumber";
        $query_run = mysqli_query($connection, $query);

        if (mysqli_num_rows($query_run) > 0) {
            // The roll number exists, delete the record
            $delete_query = "DELETE FROM registration WHERE roll = $rollNumber";
            $delete_query_run = mysqli_query($connection, $delete_query);
            echo "<script>
			alert('Record Deleted Successfully!!');
		  window.location.href = 'admindashboard.php';
		</script>";
		 exit(0);
        } else {
            // The roll number doesn't exist
			echo "<script>
			alert('Roll number does not exists!!');
		  window.location.href = 'admindashboard.php';
		</script>";
		 exit(0);
        }
    }
}
?>
