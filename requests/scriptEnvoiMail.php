<?php
    
    $to = "amineoubaya1921@gmail.com";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: donotreply@fmt.com" . "\r\n" .
    "CC: somebodyelse@example.com";
    
    mail($to,$subject,$txt,$headers);

?>