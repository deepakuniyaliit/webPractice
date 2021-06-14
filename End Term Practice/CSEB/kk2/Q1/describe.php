<?php
include('configpractice.php')
?>

<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
}
$sql = "INSERT INTO `practice` (`name`, `email`,`contact_number`) VALUES ('$name', '$email','$contact_number')";

    if(!mysqli_query($conn, $sql)){
        echo "Error1 ". mysqli_error($conn);
    }
    else{
        echo "Data sent successfully....1";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>exam</title>
</head>
<body>
    <form method='POST' action="describe.php">
        Name <input type="text" name="name" required=""><br>
        E-mail <input type="email" name="email" required="" ><br>
        Contact-Number <input type="text" name="contact_number" pattern="^\d{10}$" required="" ><br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>