<?php 
include '../session.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="./conversation.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        <div>
            <div class="card p-3 mt-3 card-header">
                <div class="head-label ">
                    <div class="circle">
                        <i class="fa fa-user icon-size" aria-hidden="true"></i>
                    </div>
                    <div>
                        <p class="mb-0 user-label">Username</p>
                    </div>
                </div>
            </div>
            <div class="card p-3 h-500-px chat-container">
                <div class="scroll">
                    <div class="left">
                        <p class="left-label">Hi...</p>
                    </div>
                    <div class="right">
                        <p class="right-label">Hello...</p>
                    </div>
                    <div class="left">
                        <p class="left-label">I found you on suggestions</p>
                    </div>
                    <div class="right">
                        <p class="right-label">oh ok</p>
                    </div>
                    <div class="left">
                        <p class="left-label">Lets play a car racing game</p>
                    </div>
                    <div class="right">
                        <p class="right-label">Ya sure</p>
                    </div>
                    <div class="right">
                        <p class="right-label">This gameing website is good and it gives suggestions of people with same interest in game</p>
                    </div>
                    <div class="left">
                        <p class="left-label">ya this website is so good to play all my interested games here</p>
                    </div>
                    <div class="left">
                        <p class="left-label">let's start the game</p>
                    </div>
                    <div class="right">
                        <p class="left-label">ya sure</p>
                    </div>
                </div>
                <div class="mb-3 message-typer d-flex">
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Type your message">
                    <button class="btn btn-outline-primary send-btn d-flex">
                        <span class="pe-1">Send</span>
                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                    </button>
            </div>
        </div>
        </div>
    </div>
</body>

</html>