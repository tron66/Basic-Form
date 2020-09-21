<?php
// NOTE: GET gets information from the url//
    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $gender = $_GET['gender'];
    $message = $_GET['message'];
    $email = $_GET['email'];

    $mailmessage = 'You have got this message from'.$firstname.''.$lastname.'\r\n'.$email.'said the following: \n'.$message;

    $to = 'james@gmail.com';
    $subject = 'My website contact form';
    $header = 'From: '.$email;

    echo $to;
    echo $subject;
    echo $mailmessage;
    echo $header;


    //mail($to,$subject,$mailmessage,$header);
    //header('Location:index.html');

    //echo $firstname;
    //echo $lastname;
    //echo $gender;
    //echo $message;


?>
