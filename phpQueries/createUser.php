<?php
$url;
$cFirstName = $_POST['cFirstName'];
$cLastName = $_POST['cLastName'];
$cPhone = $_POST['cPhone'];
$cEmail = $_POST['cEmail'];
$cUsername = $_POST['cUsername'];
$cPassword = $_POST['cPassword'];
$cConPassword = $_POST['cConPassword'];
$cAge = $_POST['cAge'];

$uppercase = preg_match('@[A-Z]@', $cPassword);
$lowercase = preg_match('@[a-z]@', $cPassword);
$number    = preg_match('@[0-9]@', $cPassword);
$specialChars = preg_match('@[^\w]@', $cPassword);

if($cAge < 15){
	$url ='age=failed';
}

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($cPassword) < 8) {
	$url .='password=failed';
}


include '../db.php';

$usernameSQL = "SELECT username FROM users WHERE username = '$cUsername'";
$result = mysqli_query($conn, $usernameSQL);

if($result->num_rows > 0){
	$url .='username=failed';
}

if($cPassword != $cConPassword){
	$url .='confirm=failed';
}

if(isset($url)){
	header("Location: ../index.php?'$url'");
	die();
} else {
	$url = 'account=pass';
}

$sql = "INSERT INTO Users(username,firstName,lastName,Age,phoneNum,email,password) 
VALUES('$cUsername','$cFirstName','$cLastName','$cAge','$cPhone','$cEmail',PASSWORD('$cPassword'))";

if ($conn->query($sql) === TRUE) {
	if($conn->affected_rows == 0){
		echo '<script>alert("We had trouble creating your account. Please try again.");
		window.location.href="../index.php";
		</script>';
	 } else{
		header("Location: ../index.php?'$url'");

	 }
 } else {
 	echo '<script>alert("Could not connect to database. Please try again.");
	 window.location.href="../index.php";
	 </script>';
 }

?>