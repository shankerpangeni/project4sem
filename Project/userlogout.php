<?php
session_start();
session_destroy();
?>
<script>
alert('You are logged out!!! Please login again!!!');
window.location="login.php";
</script>