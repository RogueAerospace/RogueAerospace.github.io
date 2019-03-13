<?php $name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$formcontent="From: $name \n Message: $comments";
$recipient = "cz1529@nyu.edu";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
//echo "Thank You!";
$message = "Sent";
echo "<script type='text/javascript'>alert('$message');</script>";
 window.open("http://google.com");
//echo "<meta http-equiv='refresh' content='0'>";
?>
