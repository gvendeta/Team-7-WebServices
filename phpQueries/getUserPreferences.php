<?php 
error_reporting (E_ALL ^ E_NOTICE);

$skillLevel = 0;
$agepreference1 = 0;
$agepreference2 = 0;
$agepreference3 = 0;
$agepreference4 = 0;
$agepreference5 = 0;
$playstyle = 0;
$teamformationstyle = 0;


include './db.php';
include './session.php';

$sql = "SELECT *
        FROM Preferences
        WHERE usersID = '".$_SESSION['usersID']."'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$skillLevel = $row['skillLevel'];
$agepreference1 = $row['agePreference1'];
$agepreference2 = $row['agePreference2'];
$agepreference3 = $row['agePreference3'];
$agepreference4 = $row['agePreference4'];
$agepreference5 = $row['agePreference5'];
$playstyle = $row['playstyle'];
$teamformationstyle = $row['teamformationstyle'];

$conn->close();
?>