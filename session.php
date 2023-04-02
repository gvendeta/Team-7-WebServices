<?php
    session_start();

    if(!isset($_SESSION['usersID'])){
        header("Location: ../index.php");
    }
?>