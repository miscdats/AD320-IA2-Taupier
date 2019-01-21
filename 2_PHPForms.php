<?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $state = $_GET['state'];
    echo("Name : " . $name . "<br>");
    echo("Email: " . $email . "<br>");
    if (!empty($phone)) {
        echo("Phone: " . $phone . "<br>");
    }
    if(!empty($state)) {
        echo("State: " . $state . "<br>");
    }
 ?>
