<?php
include('config.php')
?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `users` WHERE `id`='$id'";
$result = mysqli_query($conn, $sql);

$row = $result->fetch_array();
$username = $row['username'];
$email = $row['email'];
$gender = $row['gender'];
$city = $row['city'];
?>

<?php
if(isset($_POST['update'])){
	$username = $_POST['name'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];

	$sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender', city='$city' WHERE id='$id'";
	if(!mysqli_query($conn, $sql)){
		echo "Error ". mysqli_error($conn);
	}
	else{
		echo "Data updated successfully....";
		header("Location:desc.php");
	}
}
else{
	echo "please enter the details";
}

?>


<!DOCTYPE html>
<head>
	<title>update details</title>
</head>
<html>
  <body>
    <form method="POST" action="edit.php?id=<?php echo $id ?>">
        Name <input type="text" name="name" value ="<?php echo"$username" ?>" required ><br>
        E-mail <input type="email" name="email" value ="<?php echo"$email" ?>" required ><br>
        Gender:
        Male <input type="radio" value="male" <?php if($gender=="male"){echo "checked";}?> name="gender"> 
        Female <input type="radio" value="female" <?php if($gender=="female"){echo "checked";}?> name="gender"><br>
        Select City <select name="city">
	        <option value="Dehradun" <?php if($city=="Dehradun"){echo "selected";}?>>Dehradun</option>
	        <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>Delhi</option>
	        <option value="Jaipur" <?php if($city=="Jaipur"){echo "selected";}?>>Jaipur</option>
	        <option value="Nanital" <?php if($city=="Nanital"){echo "selected";}?>>Nanital</option>
	        <option value="Mussoorie" <?php if($city=="Mussoorie"){echo "selected";}?>>Mussoorie</option>
	        <option value="Lucknow" <?php if($city=="Lucknow"){echo "selected";}?>>Lucknow</option>
	    </select><br>
        <input type="submit" value="update" name="update"><br>
    </form>
  </body>
</html>