<?php 
include './phpQueries/getUserPreferences.php';
?>

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
  <form action="./phpQueries/FindUsers.php" method="post">
    <div class="col-md-3 text-center mb-5">
    <div class="form-group">
    <p> Age preference to match players (Can select multiple)</p>
    <input type="checkbox" id="agepreference1" name="agepreference1" <?php echo $agepreference1 ? 'checked="checked"' : '';?>>
    <label for="agepreference1"> 15-25 </label><br>
    <input type="checkbox" id="agepreference2" name="agepreference2" <?php echo $agepreference2 ? 'checked="checked"' : '';?>>
    <label for="agepreference2"> 26-35 </label><br>
    <input type="checkbox" id="agepreference3" name="agepreference3" <?php echo $agepreference3 ? 'checked="checked"' : '';?>>
    <label for="agepreference3"> 36-45 </label><br>
    <input type="checkbox" id="agepreference4" name="agepreference4" <?php echo $agepreference4 ? 'checked="checked"' : '';?>>
    <label for="agepreference4"> 46-55 </label><br>
    <input type="checkbox" id="agepreference5" name="agepreference5" <?php echo $agepreference5 ? 'checked="checked"' : '';?>>
    <label for="agepreference5"> 55+ </label><br><br>
    </div>

    <div class="form-row">
    <p> Play-style</p>
    <ul>
        <li>
        <input type="radio" id="playstyle1" name ="playstyle" value="aggressively">
        <label for="1">I prefer to play aggressively.</label>
        </li>
        <li>
        <input type="radio" id="playstyle2" name ="playstyle" value="defensively">
        <label for="2">I prefer to play defensively.</label>
        </li>
    </ul>
    </div>

    <div class="form-row">
    <p> Team formation style</p>
    <ul>
        <li>
        <input type="radio" id="teamformationstyle1" name ="teamformationstyle" value="team">
        <label for="teamformationstyle1">I prefer to play as a team.</label>
        </li>
        <li>
        <input type="radio" id="teamformationstyle2" name ="teamformationstyle" value="solo">
        <label for="teamformationstyle2">I prefer to play solo.</label>
        </li>
    </ul>
    </div>

  <script>
    $(document).ready(function(){ 
      
      var value = '<?php echo $playstyle; ?>'
       $('input[name=playstyle][value=' + value + ']').prop('checked', true);

       var value2 = '<?php echo $teamformationstyle; ?>'
       $('input[name=teamformationstyle][value=' + value2 + ']').prop('checked', true);

    });

    $(document).on('change','#agepreference1',function(){
      $('#agepreference1').val(this.checked ? 1 : 0);
      console.log($('#agepreference1').val());

});
    $(document).on('change','#agepreference2',function(){
      $('#agepreference2').val(this.checked ? 1 : 0);
});
    $(document).on('change','#agepreference3',function(){
      $('#agepreference3').val(this.checked ? 1 : 0);
});
    $(document).on('change','#agepreference4',function(){
      $('#agepreference4').val(this.checked ? 1 : 0);
});
    $(document).on('change','#agepreference5',function(){
      $('#agepreference5').val(this.checked ? 1 : 0);
});
  </script>
    <br><br>
    <button type="submit" name="submit">Submit</button>
  </form>
  
  <div id="result"></div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
</body>
</html>
