<?php
    
$name = $_REQUEST['name'];
$tel = $_REQUEST['telephone'];
$email = $_REQUEST['email'];
$company = $_REQUEST['company'];
$comments = $_REQUEST['message'];
$type = $_REQUEST['type'];

$spam= preg_match('/href/', $comments);
$spamb = preg_match('/url/', $comments);
$spamc = $spam+ $spamb;

if ($spamc == 0){
$headers = "From: donotreply@komossolutions.com\n";
$headers .= "Content-Type: text/plain; charset=iso-8859-1\n"; // sets the mime type
$recipient = "hello@komossolutions.com";
$subject = "Komos Contact Form"; // subject of the email

$msg = "Contact Type: " .$type. "\n Name: ".$name. "\n Telephone Number: ".$tel. "\n Email: ".$email."\n Company: ".$company."\n Comments: ".$comments."\n\n Spam: ".$spamc."\n Powered By Advanta Internet\n";

mail($recipient, $subject, $msg, $headers);
}


//Once the data is entered, redirect the user to give them visual confirmation
  echo "<script>document.location.href='thankyou.html'</script>";

