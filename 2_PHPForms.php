<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $state = $_GET['state'];
    echo("Name : " . $name . "<br>");
    echo("Email: " . $email . "<br>");
    if (isset($phone)) {
        echo("Phone: " . $phone . "<br>");
    }
    if(isset($state)) {
        echo("State: " . $state . "<br>");
    }
 ?>
