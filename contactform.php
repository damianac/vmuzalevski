<?php

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailForm = $_POST['mail'];
$message = $_POST['message'];

$mailto = "vmuzalevski@gmail.com";
$headers = "Form: ".$mailForm;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

mail($mailto, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}