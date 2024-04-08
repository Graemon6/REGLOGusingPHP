<?php


    include "conn.php";
    session_start();

    if (isset($_POST['register'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = mysqli_query($conn, "INSERT INTO users VALUES('0', '$name', '$email', '$password')");



        if($insert == true){
            ?>
            <script>
                alert ("Data is inserted!");
                window.location.href="reg.php";
            </script>
            <?php

        }else{
            ?>
            <script>
                alert ("Data is not inserted!");
                window.location.href="reg.php";
            </script>
            <?php
        }
    }
?>