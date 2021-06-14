<?php
include('config.php')
?>

<?php

if(isset($_POST['submit'])){
	$username = $_POST['name'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];

	$sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";	
	if(!mysqli_query($conn, $sql)){
		echo "Error1 ". mysqli_error($conn);
	}
	else{
		echo "Data sent successfully....1";
	}
}
else{
	echo "please enter the details";
}

?>

<!DOCTYPE html>
<head>
</head>
<html>
  <body>
    <form method="POST" action="add.php">
        Name <input type="text" name="name" required ><br>
        E-mail <input type="email" name="email" required ><br>
        Gender:
        Male <input type="radio" value="male" name="gender"> 
        Female <input type="radio" value="female" name="gender"><br>
        Select City <select name="city">
	        <option value="Dehradun">Dehradun</option>
	        <option value="Delhi">Delhi</option>
	        <option value="Jaipur">Jaipur</option>
	        <option value="Nanital">Nanital</option>
	        <option value="Mussoorie">Mussoorie</option>
	        <option value="Lucknow">Lucknow</option>
    	</select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
    </form>
  </body>
</html>