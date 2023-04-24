<?php 

$cfirstName = $_POST['firstname'];
$clastName = $_POST['lastname'];
$cemail = $_POST['inputEmail'];
$caddress = $_POST['inputAddress'];
$cstate = $_POST['inputState'];
$czip = $_POST['inputZip'];
$cphoneNum = $_POST['inputphonenum'];

$oldPass = isset($_POST['inputPassword4']) ? $_POST['inputPassword4'] : '';
$newPass = isset($_POST['inputPassword5']) ? $_POST['inputPassword5'] : '';
$confirmPass = isset($_POST['inputPassword6']) ? $_POST['inputPassword6'] : '';

$uppercase = preg_match('@[A-Z]@', $newPass);
$lowercase = preg_match('@[a-z]@', $newPass);
$number    = preg_match('@[0-9]@', $newPass);
$specialChars = preg_match('@[^\w]@', $newPass);


include '../db.php';
include '../session.php';

        if($oldPass != '' && $newPass != '' && $confirmPass != ''){
                if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($newPass) < 8) {
                   header("Location: ../settings.php?login=checkfailed");
                   die();

                } else if($newPass != $confirmPass){
                   header("Location: ../settings.php?login=setfailed");
                   die(); 

                } else {
                        $checkPass = "SELECT usersID, username, password
                                        FROM Users
                                        WHERE usersID = '".$_SESSION['usersID']."'
                                        AND password = PASSWORD('$oldPass')";
                
                $passCheck = mysqli_query($conn, $checkPass);
                
                if($passCheck->num_rows == 0){
                    header("Location: ../settings.php?login=failed");
                    die();

                } else {
                        $updatePass = "UPDATE Users
                                SET password = PASSWORD('$newPass')
                                WHERE usersID = '".$_SESSION['usersID']."'";
                        
                        $passUpdate = mysqli_query($conn, $updatePass);
                }
        
                }
        } 

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