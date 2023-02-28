<?php

    $email= $_POST['emailaddress'];
    $message= $_POST['message'];
    $to = "eca.skills@ensam-casa.ma";
    $subject =$_POST['Subject'];
    $txt ="Name = ". "\r\n  Email = " . $email . "\r\n Message =" . $message;
    $headers = "From: eca.skills@ensam-casa@ma" . "\r\n" ."CC: eca.skills@ensam-casa.ma";
    if($email!=NULL)
    {
        mail($to,$subject,$txt,$headers);
    }
?>