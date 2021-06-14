<?php
include_once('config.php');
if(!isset($_SESSION['username'])) {echo "Please log in";exit();}

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM users WHERE id=$id");
header("Location:details.php");
?>