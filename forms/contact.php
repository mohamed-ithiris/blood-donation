<?php
$to_email = "e3sdev@gmail.com";
$subject =  $_POST['subject'];
$body = 'Name:'.$_POST['name'].'
'.$_POST['message'];
$headers = "From:".$_POST['email'];

$rplysub="Regarding form submission";
$rplybody="Your message has been sent.Thankyou for filling out our form.Our team will contact you soon";
$rplyfrom="from:ithriya5@gmail.com";

if (mail($to_email, $subject, $body, $headers) && mail($_POST['email'],$rplysub,$rplybody,$rplyfrom)) {
  ?><script type="text/javascript">alert("Form submitted successfully");location.href="../user.php";</script><?php
} else {
  ?><script type="text/javascript">alert("Invalid Mail Id");location.href="../contact.php";</script><?php
}
?>