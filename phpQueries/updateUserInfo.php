<?php 

$cfirstName = $_POST['firstname'];
$clastName = $_POST['lastname'];
$cemail = $_POST['inputEmail'];
$caddress = $_POST['inputAddress'];
$cstate = $_POST['inputState'];
$czip = $_POST['inputZip'];
$cphoneNum = $_POST['inputphonenum'];

include '../db.php';
include '../session.php';

$sql = "UPDATE Users
        SET firstName = '$cfirstName',
        lastname = '$clastName',
        email = '$cemail',
        streetAddress = '$caddress',
        stateID = (SELECT stateID FROM state WHERE state ='$cstate'),
        zip = '$czip',
        phoneNum = '$cphoneNum'
        WHERE usersID = '".$_SESSION['usersID']."'";

$result = mysqli_query($conn, $sql);

header("Location: ../settings.php");

?>