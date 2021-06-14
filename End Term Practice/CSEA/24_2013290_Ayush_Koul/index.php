<?php
include_once('config.php');
?>

<?php
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];

	$res_u = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
	$res_e = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
	if (mysqli_num_rows($res_u) > 0) {
		echo "Sorry... username already taken";
	}
	if (mysqli_num_rows($res_e) > 0) {
		echo "Sorry... email already taken";
	} 
	else {
		$sql = "INSERT INTO `users` (`username`, `email`, `phone`, `gender`, `city`) VALUES ('$username', '$email', '$phone', '$gender', '$city')";
		if(mysqli_query($conn, $sql))
		{
			header("Location:details.php");
			// echo "Inserted Data";
		}
		else
			echo "Insertion Failed";
	}
} else {
	echo "Please click submit button to submit the data..";
}
?>

<html>

<head>
	<title>Add Entry</title>
	<style>
		table,
		td,
		th {
			border-collapse: collapse;
			border: solid black 2px;
			padding: 10px;
		}
	</style>
</head>

<body>
	<form action="index.php" method="post" onsubmit="return onSubmit()" autocomplete="on">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username" placeholder="Enter Username" required autocomplete="on"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" id="email" placeholder="Enter Email" autocomplete="on"></td>
			</tr>

			<tr>
				<td>Phone</td>
				<td><input type="tel" name="phone" id="phone" placeholder="Enter Phone no." pattern="1[0-9]{9}" minlength="10" maxlength="10" autocomplete="on"></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td>
					<!-- <label for="male">Male</label><br> -->
					<input type="radio" id="male" name="gender" value="male">Male<br>

					<!-- <label for="female">Female</label><br> -->
					<input type="radio" id="female" name="gender" value="female">Female<br>

					<input type="radio" id="other" name="gender" value="other">Other<br>
					<!-- <label for="other">Other</label> -->
				</td>

			</tr>

			<tr>
				<td>City</td>
				<td>
					<select name="city" id="city">
						<option value="Dehradun">Dehradun</option>
						<option value="Pune">Pune</option>
						<option value="Delhi">Delhi</option>
						<option value="Mumbai">Mumbai</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>Interests</td>
				<td>
					<input type="checkbox" id="Games" name="Interests" value="Games">Games <br>

					<input type="checkbox" id="Books" name="Interests" value="Books">Books <br>

					<input type="checkbox" id="Travelling" name="Interests" value="Travelling">Travelling <br>
				</td>
			</tr>
		</table>
		<br>
		<input type="submit" value="submit" name="submit">
	</form>
	<script>
		function onSubmit() {
			return true;
		}
	</script>
</body>

</html>