<!DOCTYPE html>
<html lang="en">
    <style type="text/css">
    	body{
    color: #010406;
    background-color: #e0e4ea;
}
.avatar-xl img {
    width: 110px;
}
.rounded-circle {
    border-radius: 50% !important;
}
img {
    vertical-align: middle;
    border-style: none;
}
.text-muted {
    color: #aeb0b4 !important;
}
.text-muted {
    font-weight: 300;
}
  </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<head>
  <meta charset="UTF-8">
  <title>Matchmaking Based on a Skillset from 1 through 10</title>
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
  <h1>Matchmaking Players Based on a Skillset</h1>
  <form action = "connect.php" method="post">
    <div class="col-md-3 text-center mb-5">
      <div class="avatar avatar-xl">
      <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="..." class="" />
      </div>
      </div>
      <div class="col">
        <div class="row align-items-center">
        <div class="col-md-7">
        <h4 class="mb-1">MacLovin</h4>
        <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
        </div>
        </div>
        <div class="row mb-4">
        <div class="col-md-7">
        <p class="text-muted">
        Gamer's Bio.
        </p>
        </div>
    <label for="number">Please rank your skillset from a 1 to 10:</label>
    <input type="number" id="number" name="number" min="1" max="10" required><br>
    <label for="username">Please enter username:</label>
    <input type="username" id="username" name="username" min="" max="" required><br>
    <label for="game">Please enter game of choice:</label>
    <input type="game" id="game" name="game" min="" max="" required><br>
    <label for="age">Please enter player age preference:</label>
    <input type="age" id="age" name="age" min="" max="" required>
    <br><br>
    <button type="submit">Submit</button>
  </form>
  
  <div id="result"></div>

  <script>
    const form = document.querySelector('form');
    const resultDiv = document.getElementById('result');
    
    form.addEventListener('submit', function(event) {
      event.preventDefault();
      const number = parseInt(document.getElementById('number').value);
      
      if (number >= 1 && number <= 3) {
        resultDiv.textContent = "You are a good match for: Newb123, Yolo234, XYZ987";
      } else if (number >= 4 && number <= 7) {
        resultDiv.textContent = "You are a decent match for: QWE765, Roady777, Chilling69";
      } else if (number >= 8 && number <= 10) {
        resultDiv.textContent = "You are a great match for: Whodat222, sHiFtY666, Watchdog45";
      } else {
        resultDiv.textContent = "Please enter a valid number between 1 and 10.";
      }
    });
  </script>
</body>
</html>