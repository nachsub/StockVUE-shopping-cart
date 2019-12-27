<?php
if($_POST){
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to_email = 'name @ company . com';
    $subject = 'Testing PHP Mail';
    $headers = 'From: noreply @ company . com';
    mail($email,$subject,$message,$headers);
}
?>
