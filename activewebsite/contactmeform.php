<?php

if(isset($_POST['submit'])) {
    $name= $_POST['name'];    
    $subject= $_POST['subject'];    
    $mailFrom= $_POST['mail'];
    $message= $_POST['message'];
//need to change gmail address, internal gmail processing blocks php related forms for some reason
    $mailTo = "rebecca.l.baia@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.".\n\n" .$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contactus.php?mailsend");
}

//need to figure out how to adjust email for gmail
//recieved guidance from https://www.youtube.com/watch?v=4q0gYjAVonI&feature=emb_logo