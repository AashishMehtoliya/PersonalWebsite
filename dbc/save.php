<?php

include_once 'dbc_conn.php';
// echo "save.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    if(!$conn){
        die('Could not connect: ' . mysql_error());
    }
    $sql = "INSERT INTO `contact_us_form` (`username`, `email`, `message`) VALUES ('$name', '$email', '$message')";
    mysqli_query($conn , $sql);
    header("Location: ../contact.php?datasend=success");

}