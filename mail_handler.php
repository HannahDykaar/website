<?php 
if(isset($_POST['submit'])){
    $to = "dykaar@astro.utoronto.ca"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Message From Website";
    $subject2 = "Copy of Message Sent to Hannah Dykaar";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "You sent the following message to Hannah Dykaar: " . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
     $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);

	header('Location: sent.html');
     exit;

        }
?>
