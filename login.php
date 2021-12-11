<?php
    error_reporting(0);
    if(isset($_POST['login'])){
        $userName = $_POST['uname'];
        $pass = $_POST['pass'];
    }
    
    $connection = mysqli_connect('localhost',"root",'', "project");
    if(!$connection){
        echo"error";
    }
    
    $fetch_query = "SELECT * FROM `userData` WHERE `userName`='$userName' AND `Password` = '$pass'";
    $data = mysqli_query($connection,$fetch_query);
    session_start();
    if(isset($_SESSION['userName'])){
        echo '<script>alert("Login Success")</script>';
        echo '<script>window.location.href="./zircon-home.php"</script>';
        // $("#RegForm").removeAttr('disabled');
    }
    else{
        if(mysqli_num_rows($data)>0){
        $_SESSION['userName'] = $userName;
        header("location:./login.php");
    
        }
        else{
            echo '<script>alert("User Not Found")</script>';
            echo '<script>window.location.href="./account.php"</script>';
        }
    }

    
?>