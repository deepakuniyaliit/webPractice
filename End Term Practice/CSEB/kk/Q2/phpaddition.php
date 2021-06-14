<?php
	if(isset($_POST['submit'])){
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
?>
		<p>The sum is  <?php echo $num1+$num2 ?></p>
<?php
	}
	else{
		echo "please enter the details";
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>addition</title>
</head>
<body>
	<form method="post" action="phpaddition.php">
		<input type="number" name="num1" required>
		<input type="number" name="num2" required>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>