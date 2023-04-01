<?php
session_start();


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

$sql = "SELECT usersID, username, password
        FROM Users
        WHERE username = '$getUsername'
        AND password = PASSWORD('$getPassword')";

$result = mysqli_query($conn, $sql);

    if($result->num_rows == 0){
		header("Location: ../index.php?login=failed");

	 } else{
		$row = mysqli_fetch_array($result);
		$_SESSION['usersID'] = $row['usersID'];
		
		 header("Location: ../home/home.html");
	 } 
     

?>