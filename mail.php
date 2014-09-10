<?php 
$to = 'samoylov.andryushka@mail.ru';

$subject = 'Website Change Reqest';

$headers = "From: " . strip_tags('andrey@roscenrtdpo.ru') . "\r\n";
$headers .= "Reply-To: ". strip_tags('andrey@grapheme.ru') . "\r\n";
$headers .= "CC: admin@grapheme.ru\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<h1>Hello, World!</h1>';
$message .= '</body></html>';

//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Mail sent" : "Mail failed";
?>