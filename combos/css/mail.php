<?php
 $message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

    if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

        
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userNumber = $_POST['phonenumber'];
    $usermsg = $_POST['message'];
    $to = 'ashureddymendu@gmail.com';
    $body ="";
    $body .= "Name: ".$userName. "\r\n";
    $body .= "Email: ".$userEmail. "\r\n";
    $body .= "Nnumber: ".$userNumber. "\r\n";
    $body .= "Message: ".$usermsg. "\r\n";
    
    
    mail($to,$userNumber,$body);
    $message_sent = true;
    }


}



?>