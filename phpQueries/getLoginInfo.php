<?php
ini_set('display_errors', 1);

$getUsername = $_POST['getUsername'];
$getPassword = $_POST['getPassword'];

$hostname = "us-cdbr-east-06.cleardb.net";
$username = "bc9584bcd61cfa";
$password = "2eff0d16";
$db = "heroku_66e277c8cfa9bb9";

$conn = new mysqli($hostname, $username, $password, $db);

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}

$sql = "SELECT 1
        FROM Users
        WHERE username = '$getUsername'
        AND password = PASSWORD('$getPassword')";

if ($conn->query($SQL) === TRUE){
    if($conn->affected_rows==0){
		echo '<script>alert("Username or password not found. Please try again.");
		window.location.href="../loginRegister.html";
		</script>';
	 } else{
		 echo '<script>
		        window.location.href="../index.html";
		</script>';
	 }
 } else {
 	echo '<script>alert("Could not connect to database. Please try again.");
	 window.location.href="../loginRegister.html";
	 </script>';
 }

 $conn->close();
?>