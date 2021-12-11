<?php
    if (isset($_POST['signup'])) {
        $userName = $_POST['uname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $connection = mysqli_connect("localhost", "root", "", "project");
        if (!$connection) {
            echo '<script> 
                alert("database not connected");
                window.location.href = "./account.php";
            </script>';
        }

        $insert_query = "INSERT INTO userData (`userName`,`Email`,`Password`) VALUES ('$userName','$email','$password')";
        if (mysqli_query($connection, $insert_query)) {
            echo '<script>alert("Signup Success")</script>';
            echo '<script>window.location.href="./zircon-home.php"</script>';
            // $('#RegForm').removeAttr('disabled');
        } else {
            echo '<script>alert("Signup Failed")</script>';
            echo '<script>window.location.href="./account.php"</script>';
        }
    }
?>