<?php
if (isset($_POST['send'])) {
	$to = 's-eliu@lwsd.org'; // My email address
	$subject = 'Feedback from my site';
	$message .= 'Name: ' .$POST['name'] . "\r\n\r\n";
	$message .= 'Comments: ' . $POST['comments'];
	$success = mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE HTML>
<body>
<?php if (isset($success) && $success) { ?>
<h1>Thank you</h1>
Your message has been sent.
<?php} else { ?> 
<h1>Oops!</h1>
Sorry, there was a problem sending your message
<?php } ?>
</body>
</html>