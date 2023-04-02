<?php
ini_set('display_errors', 1);

$cFirstName = $_POST['cFirstName'];
$cLastName = $_POST['cLastName'];
$cPhone = $_POST['cPhone'];
$cEmail = $_POST['cEmail'];
$cUsername = $_POST['cUsername'];
$cPassword = $_POST['cPassword'];
$cConPassword = $_POST['cConPassword'];

$uppercase = preg_match('@[A-Z]@', $cPassword);
$lowercase = preg_match('@[a-z]@', $cPassword);
$number    = preg_match('@[0-9]@', $cPassword);
$specialChars = preg_match('@[^\w]@', $cPassword);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($cPassword) < 8) {
	header("Location: ../index.php?password=failed");
}


$hostname = "us-cdbr-east-06.cleardb.net";
$username = "bc9584bcd61cfa";
$password = "2eff0d16";
$db = "heroku_66e277c8cfa9bb9";

$conn = new mysqli($hostname, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$usernameSQL = "SELECT username FROM users WHERE username = $username";
$result = mysqli_query($conn, $sql);

if($result->num_rows != 0){
	header("Location: ../index.php?username=failed");
}

if($cPassword == $cConPassword){

$sql = "INSERT INTO Users(username,firstName,lastName,phoneNum,email,password) 
VALUES('$cUsername','$cFirstName','$cLastName','$cPhone','$cEmail',PASSWORD('$cPassword'))";

} else {
	header("Location: ../index.php?confirm=failed");
}

if ($conn->query($sql) === TRUE) {
	if($conn->affected_rows==0){
		echo '<script>alert("We had trouble creating your account. Please try again.");
		window.location.href="../index.php";
		</script>';
	 } else{
		 echo '<script>alert("Account created successfully.");
		window.location.href="../index.php";
		</script>';
	 }
 } else {
 	echo '<script>alert("Could not connect to database. Please try again.");
	 window.location.href="../index.php";
	 </script>';
 }

$conn->close();


?>