<?php
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailTo = "caiofmen@gmail.com"
$headers = "From: ".$visitor_email;
$txt = "You have recived an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact.html?mailsend");
}
?>