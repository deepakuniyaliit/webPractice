<?php
include_once('config.php');
// session_start();
// echo $_SESSION['username'];
if (!isset($_SESSION['username'])) {
	echo "Please log in";
	exit();
}

$result = mysqli_query($conn, "SELECT * FROM `users`");
?>

<html>

<head>
	<title>User Details</title>
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
	<?php if ($result->num_rows > 0) { ?>
		<table>
			<thead>
				<tr>
					<th>Username</th>
					<th>E-mail</th>
					<th>Phone</th>
					<th>Gender</th>
					<th>City</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = $result->fetch_assoc()) : ?>
					<tr>
						<td><?php echo $row['username'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['phone'] ?></td>
						<td><?php echo $row['gender'] ?></td>
						<td><?php echo $row['city'] ?></td>

						<td>
							<a href="edit.php?id=<?php echo $row['id'] ?>">
								<input type="button" value="Edit">
							</a>
						</td>
						<td>
							<a href="delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete?')">
								<input type="button" value="Delete">
							</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
		<a action="./index.php">
			<button>Add Entry</button>
		</a>
		<br>
		<a href="./logout.php">
			<button>Logout</button>
		</a>

	<?php } else echo "No Results."; ?>

</body>

</html>