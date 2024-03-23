<?php

if(isset($_GET["submit"]))
{
    echo $a = $_GET["name"];
    echo $b = $_GET["email"];
    echo $c = $_GET["number"];
    echo $d = $_GET["subject"];
    echo $e = $_GET["messgae"];


    $to = "devchhabra9363@gmail.com";
    $subject = "Travel contact Query";
    $txt = "Name ".$a."\r\n"."Email".$b."\r\n"."Number".$c."\r\n"."Subject ".$d."\r\n"."Message ".$e;
    $headers = "From: ".$b ;

    mail($to,$subject,$txt,$headers);

}



?>