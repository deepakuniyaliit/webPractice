<?php
include('config.php')
?>

<?php
	if(isset($_GET['submit'])){
	$username = $_GET['name'];
    $sql = "SELECT * FROM `users` WHERE `username`='$username'";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows > 0){
?>
        <table>
            <tr>
              <th>Name</th>
              <th>Eamil</th>
              <th>gender</th>
              <th>city</th>
              <th>update</th>
              <th>delete</th>
            </tr>
<?php
                // while($result->fetch_array()){
                    while($row = $result->fetch_assoc()){
?>
                <tr>
                  <th><?php echo $row['username'] ?></th>
                  <th><?php echo $row['email'] ?></th>
                  <th><?php echo $row['gender'] ?></th>
                  <th><?php echo $row['city'] ?></th>
                  <th><a href="edit.php?id=<?php echo $row['id'] ?>">
                    <input type="button" name="" value="edit"></a></th>
                  <th><a href="delete.php?id=<?php echo $row['id'] ?>"><input type="button" name="" value="delete"></a></th>
                </tr>
<?php
    }
?>
        </table>
<?php
    }
    else{
    	echo "No user with this name";
    }
}
else{
    	echo "Enter Name";
    }
?>

<!DOCTYPE html>
<title>user details</title>
    <style type="text/css">
        table,td,th,tr{
            width: 60%;
            text-align: center;
            border: 2px solid black;
            border-collapse: collapse;
            border-spacing: 5px;
            padding: 10px;
            font-family: sans-serif;
        }
        tr:nth-child(even){
            background-color: #dddddd;
        }
    </style>
<html>
  <body>
    <form method="GET" action="userdesc.php">
        Name <input type="text" name="name" required ><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
    </form>
  </body>
</html>