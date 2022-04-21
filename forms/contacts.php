<?php
// get data from form

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "contactgovinddhall@gmail.com"
$subject = "Mail from Website"
$txt = "Name =".$name . "\r\n Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message =" .$message;
$headers ="From: noreply@globalwebmate.com" . "\r\n" .
"CC : govinddhall@yopmail.com";
if($email!= NULL) {
    mail($to, $subject, $txt,$headers);
}
// redirect
header("Location: index.html")
?>