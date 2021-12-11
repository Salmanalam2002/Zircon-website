<?php
    session_start();
    if(isset($_SESSION['userName'])){
        session_destroy();
        header("location:./zircon-home.php");
    }else{
        echo "session not created";
    }
?>