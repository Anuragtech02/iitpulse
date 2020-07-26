<?php

    $name = $_POST['user'];
    $std = $_POST['std'];
    $number = $_POST['number'];
    $branch = $_POST['branch'];

    $to = "apal895@gmail.com";
    $subject = "IIT Pulse Form";
    $message = "Name: $name.\n".
                    "Class : $std.\n".
                        "Phone : $number\n".
                            "Branch : $branch.\n";
                            
    $headers = 'From: contact@iitpulse.com' . "\r\n";

    if(mail($to, $subject, $message, $headers)){
        echo "Successfully Submitted";

    };  
    
?> 
