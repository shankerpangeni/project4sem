<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"signup");
	$query = "update registration set email='$_POST[email]',
	upassword='$_POST[password]',
	username='$_POST[username]',
	department='$_POST[department]',
	semester='$_POST[semester]',
	phone='$_POST[phone]'
	 where roll = $_POST[roll]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Details edited successfully.");
	window.location.href = "admindashboard.php";
</script>
