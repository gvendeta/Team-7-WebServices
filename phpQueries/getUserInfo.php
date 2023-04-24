<?php 
error_reporting (E_ALL ^ E_NOTICE);

$firstName = "";
$lastName = "";
$email = "";
$address;
$state;
$stateShort;
$zip;
$age;
$phoneNum;

include './db.php';
include './session.php';

$sql = "SELECT users.*, state, stateShort
        FROM Users
        LEFT JOIN State on Users.stateID = State.stateID
        WHERE usersID = '".$_SESSION['usersID']."'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$firstName = $row['firstName'];
$lastName = $row['lastName'];
$age = $row['Age'];
$email = $row['email'];
$state = $row['state'];
$address = $row['streetAddress'];
$stateShort = $row['stateShort'];
$zip = $row['zip'];
$phoneNum = $row['phoneNum'];

$stateSQL = "SELECT state
             FROM state";

$stateResults = mysqli_query($conn, $stateSQL);

$conn->close();
?>