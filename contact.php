<?php

    $name = $_POST['user'];
    $std = $_POST['std'];
    $number = $_POST['number'];
    $branch = $_POST['branch'];

    $to = "";
    $subject = "IIT Pulse Form";
    $message = "Name: $name.\n".
                    "Class : $std.\n".
                        "Phone : $number\n".
                            "Branch : $branch.\n";
                            
    $headers = 'From: contact@iitpulse.com' . "\r\n";

    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;


    if(mail($to, $subject, $message, $headers)){
        echo "Successfully Submitted";

    };  
    
?> 
