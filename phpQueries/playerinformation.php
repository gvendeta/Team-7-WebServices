<?php
$playerfirstname = $_POST['playerfirstname'];
$playerlastname = $_POST['playerlastname'];
$playerdisplayname = $_POST['playerdisplayname'];
$gender = $_POST['gender'];
$agerange = $_POST['agerange'];
$skillLevel = $_POST['skillLevel'];
$agepreference1 = $_POST['agepreference1'];
$agepreference2 = $_POST['agepreference2'];
$agepreference3 = $_POST['agepreference3'];
$agepreference4 = $_POST['agepreference4'];
$agepreference5 = $_POST['agepreference5'];
$playstyle = $_POST['playstyle'];
$teamformationstyle = $_POST['teamformationstyle'];

include '../session.php';
include '../db.php';

$sql = "INSERT INTO preferences(usersID, agepreference1, agepreference2, agepreference3, agepreference4, agepreference5,playstyle,teamformationstyle, skillLevel) 
VALUES('".$_SESSION['usersID']."','$agepreference1','$agepreference2','$agepreference3','$agepreference4','$agepreference5','$playstyle','$teamformationstyle,'$skillLevel')";

	if(mysqli_query($conn,$sql)){
		echo '<script>alert("Insert Successful");
		</script>';
	 } else{
		// header("Location: ../index.php?'$url'");

	 }
?>
