<?php
    $sever="localhost";
    $username="root";
    $password="";
    $database= "comment_system";


    $conn = mysqli_connect($sever,$username,$password,$database);

    if(!$conn){
        die("<script> alert('Connection Failed.') </script>");
    }


?>