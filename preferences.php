
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>Settings Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    ul{
        list-style-type: none;
    }
    	body{
    color: #818b94;
    background-color: #f4f6f9;
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
.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + 0.75rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #4d5154;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #eef0f3;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.hide {
    visibility: hidden;
}
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <!--Navigation bar-->
<div id="nav-placeholder">

</div>

<script>
$(function(){
  $("#nav-placeholder").load("../nav.php");
});
</script>

<!--end of Navigation bar-->
<div class="container">
<div class="row justify-content-center">
<div class="col-12 col-lg-10 col-xl-8 mx-auto">

<div class="my-4">
<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link" href="./settings.php">Profile</a>
</li>
<li class="nav-item">
<a class="nav-link active" href="#preference">Preferences</a>
</li>
</ul>
</div>

<form action="./phpQueries/updatePreferences.php" method="post">
    <div class="form-group">
    <h2>Player Behavioral skills and Preferences</h2>
    <label for="skillLevel"> Rate your skill level (between 1 - 10):</label>
    <input type="range" id="skillLevel" name="skillLevel" min="1" max="10" onchange="display_value(this.value)">
    <span id="display_value"></span><br><br>
    </div>
    <div class="form-group">

    <input name="agepreference1" value="0" type="hidden">
    <input name="agepreference2" value="0" type="hidden">
    <input name="agepreference3" value="0" type="hidden">
    <input name="agepreference4" value="0" type="hidden">
    <input name="agepreference5" value="0" type="hidden">

    <p> Age preference to match players (Can select multiple)</p>
    <input type="checkbox" id="1" name="agepreference1" value='0'>
    <label for="1"> 15-25 </label><br>
    <input type="checkbox" id="2" name="agepreference2" value='0'>
    <label for="2"> 26-35 </label><br>
    <input type="checkbox" id="3" name="agepreference3" value='0'>
    <label for="3"> 36-45 </label><br>
    <input type="checkbox" id="4" name="agepreference4" value='0'>
    <label for="4"> 46-55 </label><br>
    <input type="checkbox" id="5" name="agepreference5" value='0'>
    <label for="5"> 55+ </label><br><br>
    </div>
<script>console.log( $('#2').val());</script>
    <script>
    $('#1').on('change', function(){
        $('#1').val(this.checked ? 1 : 0);
    });

    $('#2').on('change', function(){
    $('#2').val(this.checked ? 1 : 0);
    });

    $('#3').on('change', function(){
    $('#3').val(this.checked ? 1 : 0);
    });

    $('#4').on('change', function(){
    $('#4').val(this.checked ? 1 : 0);
    });

    $('#5').on('change', function(){
    $('#5').val(this.checked ? 1 : 0);
    });
</script>

    <div class="form-row">
    <p> Play-style</p>
    <ul>
        <li>
        <input type="radio" id="1" name ="playstyle" value="aggressively">
        <label for="1">I prefer to play aggressively.</label>
        </li>
        <li>
        <input type="radio" id="2" name ="playstyle" value="defensively">
        <label for="2">I prefer to play defensively.</label>
        </li>
    </ul>
    </div>

    <div class="form-row">
    <p> Team formation style</p>
    <ul>
        <li>
        <input type="radio" id="1" name ="teamformationstyle" value="team">
        <label for="1">I prefer to play as a team.</label>
        </li>
        <li>
        <input type="radio" id="2" name ="teamformationstyle" value="solo">
        <label for="2">I prefer to play solo.</label>
        </li>
    </ul>
    </div>
    <hr class="my-4">
    <div>
    <button type="submit"  class="btn btn-primary">Submit</button>
    <button type="reset"  class="btn btn-primary">Reset</button>

    </form>
    </div>

</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
</script>
</body>
</html>