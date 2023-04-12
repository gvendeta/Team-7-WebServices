<?php
$skillLevel = isset($_POST['skillLevel']) ? $_POST['skillLevel'] : 0;
$agepreference1 = isset($_POST['agepreference1']) ? $_POST['agepreference1'] : 0;
$agepreference2 = isset($_POST['agepreference2']) ? $_POST['agepreference2'] : 0;
$agepreference3 = isset($_POST['agepreference3']) ? $_POST['agepreference3'] : 0;
$agepreference4 = isset($_POST['agepreference4']) ? $_POST['agepreference4'] : 0;
$agepreference5 = isset($_POST['agepreference5']) ? $_POST['agepreference5'] : 0;
$playstyle = $_POST['playstyle'];
$teamformationstyle = $_POST['teamformationstyle'];

include '../db.php';
include '../session.php';

$checkPref = "SELECT usersID FROM Preferences WHERE usersID = '".$_SESSION['usersID']."'";

$result = mysqli_query($conn, $checkPref);

    if($result->num_rows == 0){
		$sql = "INSERT INTO Preferences(usersID, agePreference1, agePreference2, agePreference3, agePreference4, agePreference5,playstyle,teamformationstyle, skillLevel) 
		VALUES('".$_SESSION['usersID']."','$agepreference1','$agepreference2','$agepreference3','$agepreference4','$agepreference5','$playstyle','$teamformationstyle','$skillLevel')";

	 } else{
		$sql = "UPDATE Preferences
				SET agePreference1 = '$agepreference1',
					agePreference2 = '$agepreference2',
					agePreference3 = '$agepreference3',
					agePreference4 = '$agepreference4',
					agePreference5 = '$agepreference5',
					playStyle = '$playstyle',
					teamFormationStyle = '$teamformationstyle',
					skillLevel = '$skillLevel'
				WHERE usersID = '".$_SESSION['usersID']."'";
	 } 


if ($conn->query($sql) === TRUE) {
	echo '<script>alert("Preferences Saved Successfully");
		window.location.href="../preferences.php";
		</script>';
  } else {
	echo '<script>alert("Had issues saving preferences. Please try again later.");
		window.location.href="../preferences.php";
		</script>';
  }
?>
