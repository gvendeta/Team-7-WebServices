<?php 
include '../session.php';
?>

<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="./home.css" rel="stylesheet">
        <style type="text/css">
            body{
        color: #c00adc;
        background-color: #f4f6f9;
    }
</style>
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
<h2 class="h3 mb-4 page-title">Welcome Home, Gamer!</h2>
<div class="my-4">
<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#" role="tab" aria-controls="home" aria-selected="false">User List</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="./preferences.php">Preferences</a>
</li>

<li class="nav-item">
    <a class="nav-link active" href="./settings.php">Settings</a>
</li>

<li class="nav-item">
    <a class="nav-link active" href="./conversation.php">Messanger</a>
</li>
<div class="col-md-6">
    <div class="card card4" style="width: 8rem;">

            <a href="#" class="btn btn-primary w-100" onclick="logout()">Logout</a>

    </div>
</div>

</ul>
<!--end of Navigation bar-->

    <div class="row m-4">
        <div class="col-md-13">
            <div id="carouselExampleControls" class="carousel slide w-600-px" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.insidesport.in/wp-content/uploads/2022/12/gaming-virtual-blue-adobestock.jpg"
                            height="750" width="750" class="d-block w-100" alt="Night view">
                    </div>
                    <div class="carousel-item">
                        <img src="https://r1.ilikewallpaper.net/iphone-12-pro-wallpapers/download-103431/neon-abyss_640.jpg"
                            height="750" width="750" class="d-block w-100" alt="Morning view">
                    </div>
                    <div class="carousel-item">
                        <img src="data:image/jpeg;base64,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"                            class="d-block w-100" height="750" width="750" alt="day time">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>

</body>

</html>