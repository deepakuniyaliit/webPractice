<?php
include_once('config.php');

if(!isset($_SESSION['username'])) {echo "Please log in";exit();}
?>

<?php
$id = $_GET['id'];
$res = mysqli_query($conn, "select * from users where id = $id");
$res = mysqli_fetch_array($res); //???????????

$username = $res['username'];
$email = $res['email'];
$phone = $res['phone'];
$gender = $res['gender'];
$city = $res['city'];

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];
	$city = $_POST['city'];


	$res_u = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
	$res_e = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
	// if (mysqli_num_rows($res_u) > 0) {
	// 	echo "Sorry... username already taken";
	// } 
	// else if (mysqli_num_rows($res_e) > 0) {
	// 	echo "Sorry... email already taken";
	// } 
	 {
		$sql = "UPDATE users SET username='$username', email='$email', phone='$phone', gender='$gender', city='$city' WHERE id = $id";
		if (mysqli_query($conn, $sql)) {
			header("Location:details.php");
		}
		echo "Query Error";
	}
} else {
	echo "Please click Update button to update the data..";
}
?>

<html>

<head>
	<title>Update Form</title>

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
	<form method="POST" action="edit.php?id=<?php echo "$id"?>">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username" placeholder="Enter Username" required value="<?php echo $username ?>"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" id="email" placeholder="Enter Email" value="<?php echo $email ?>"></td>
			</tr>

			<tr>
				<td>Phone</td>
				<td><input type="tel" name="phone" id="phone" placeholder="Enter Phone no." pattern="1[0-9]{9}" minlength="10" maxlength="10" value="<?php echo $phone ?>"></td>
			</tr>

			<tr>
				<td>Gender</td>
				<td>
					<!-- <label for="male">Male</label><br> -->
					<input type="radio" id="male" name="gender" value="male" <?php if ($gender == "male") echo "checked"; ?>>Male<br>

					<!-- <label for="female">Female</label><br> -->
					<input type="radio" id="female" name="gender" value="female" <?php if ($gender == "female") echo "checked"; ?>>Female<br>

					<!-- <label for="other">Other</label> -->
					<input type="radio" id="other" name="gender" value="other" <?php if ($gender == "other") echo "checked"; ?>>Other<br>
				</td>

			</tr>

			<tr>
				<td>City</td>
				<td>
					<select name="city" id="city">
						<option value="Dehradun" <?php if ($city == "Dehradun") echo "selected"; ?>>Dehradun</option>
						<option value="Pune" <?php if ($city == "Pune") echo "selected"; ?>>Pune</option>
						<option value="Delhi" <?php if ($city == "Delhi") echo "selected"; ?>>Delhi</option>
						<option value="Mumbai" <?php if ($city == "Mumbai") echo "selected"; ?>>Mumbai</option>
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
		<input type="submit" name="submit" value="Click Here To Update Your Data">
	</form>
</body>

</html>