<?php
include_once('config.php');

if(isset($_POST['submit'])){
	// echo $_POST['username'];
	$_SESSION['username'] = $_POST['username'];
	// echo $_SESSION['username'];
	header("Location:details.php");
}
?>

<html>

<body>
	<form action="login.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username" placeholder="Enter Username" required autocomplete="on"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td><input type="Password" name="Password" id="Password" placeholder="Enter Password" autocomplete></td>
			</tr>
		</table>
		<input type="submit" value="login" name="submit">
	</form>

</body>

</html>