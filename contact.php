<?php
$field_name = $_POST['your_name'];
$field_email = $_POST['your_email'];
$field_subject = $_POST['your_subject'];
$field_message = $_POST['cf_message'];

$mail_to = 'alagappanr@live.com';
$subject = 'Message from a site visitor '.$field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location.href='http://alagappan.co.in';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Sorry for the trouble. Please try again later.');
		window.location.href='http://alagappan.co.in';
	</script>
<?php
}
?>
