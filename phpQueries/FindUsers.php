<!DOCTYPE html>
<html lang="en">
<style>
    body {
     font-family: Arial, sans-serif;
   }

   h1 {
     text-align: center;
   }
   .users {
        display: flex;
        flex-wrap: nowrap;
      }
   .ulList {
     list-style: none;
     margin: 0;
     padding: 0;
     display: flex;
     flex-wrap: wrap;
     justify-content: space-around;
     list-style-type: none;
   }

   .liResults {
     background-color: #f2f2f2;
     border-radius: 10px;
     box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
     margin: 10px;
     padding: 20px;
     text-align: center;
     width: 300px;
     list-style-type: none;
   }

   span {
     display: block;
     font-size: 24px;
     font-weight: bold;
     margin-bottom: 10px;
   }

   .user-pic {
     border-radius: 50%;
     height: 150px;
     margin-bottom: 10px;
     object-fit: cover;
     width: 150px;
   }

   ul.hobbies {
     text-align: left;
     margin-top: 10px;
   }

   ul.hobbies li {
     margin-bottom: 5px;
   }

   .user-age {
     font-size: 18px;
     font-style: italic;
     margin-top: 5px;
   }
 </style>
<head>
  <meta charset="UTF-8">
  <title>Find Users Results</title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
 <!--Navigation bar-->
 <body class="navbarbody">
 <div id="nav-placeholder"></div>
</body>

<script>
$(function(){
  $("#nav-placeholder").load("../nav.php");
});
</script>
<!--end of Navigation bar-->
<body>
  <h1>Search Results</h1>
  <div class='users'>

<?php
$skillLevel = isset($_POST['skillLevel']) ? $_POST['skillLevel'] : 0;
$agepreference1 = isset($_POST['agepreference1']) ? 1 : 0;
$agepreference2 = isset($_POST['agepreference2']) ? 1 : 0;
$agepreference3 = isset($_POST['agepreference3']) ? 1 : 0;
$agepreference4 = isset($_POST['agepreference4']) ? 1 : 0;
$agepreference5 = isset($_POST['agepreference5']) ? 1 : 0;
$playStyle = $_POST['playstyle'];
$teamformationstyle = $_POST['teamformationstyle'];

$dbPath = $_SERVER['DOCUMENT_ROOT'];
$dbPath .= '/db.php';

include $dbPath;

$sesPath = $_SERVER['DOCUMENT_ROOT'];
$sesPath .= '/session.php';
include $sesPath;


$sql = "SELECT *
        FROM Users u
        join Preferences P ON p.usersID = u.usersID
        WHERE (CASE WHEN $agepreference1 THEN age BETWEEN 15 AND 25 END
        OR CASE WHEN $agepreference2 THEN age BETWEEN 26 AND 35 END
        OR CASE WHEN $agepreference3 THEN age BETWEEN 36 AND 45 END
        OR CASE WHEN $agepreference4 THEN age BETWEEN 46 AND 55 END
        OR CASE WHEN $agepreference5 THEN age >= 55 END
        OR CASE WHEN $agepreference1 = 0 AND $agepreference2 = 0 AND $agepreference3 = 0 AND $agepreference4 = 0 AND $agepreference5 = 0 THEN age = age END)
        AND playstyle = '$playStyle'
        AND teamformationstyle = '$teamformationstyle'";


$result = $conn->query($sql);

if(isset($_POST)){
 if($result->num_rows == 0){
  echo header('Location: ../PlayerMatch.php');
 } else {
  while($row = mysqli_fetch_assoc($result)) {
    echo "
            <li class ='liResults'>
              <img class='user-pic' src='https://bootdey.com/img/Content/avatar/avatar7.png' alt='{$row['firstName']} Profile Picture'>
              <span class ='results'>{$row['firstName']} "."{$row['lastName']}</span>
              <p class='user-age'>Age: {$row['Age']}</p>
              <ul class='hobbies ulList'>
            <li class ='liResults'>Skill Level: " . "<b>".$row['skillLevel']."</b></li>
            <li class ='liResults'>Team Formation: " . "<b>".$row['teamformationstyle']."</b></li>
            <li class ='liResults'>Play Style: " . "<b>".$row['playstyle']."</b></li></ul></li>
          
            ";
  }
 }
}


?>
</div>
</body>
</html>