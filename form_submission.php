<?php
$name = $_POST['name'];
$visitor_mail = $_POST['mail'];
$message = $_POST['comment'];

$email_from = $visitor_mail;

$email_subject = "COMMENTS";

$email_body = "User Name:"$name\n;
               "User Email:"$visitor_mail\n;
                "User Message:"$message\n;
               
 
 $to = "kelvinmutinda347@gmail.com";
 $headers = "From:"$email_from\r\n;
 $headers = "Reply to"$visitor_mail\r\n;
 mail($to,$email_subject,$email_body,$headers);
 header("Location:contact.html")
?>
