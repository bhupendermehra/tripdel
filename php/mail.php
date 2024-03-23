<?php

if(isset($_GET["submit"]))
{
    echo $a = $_GET["name"];
    echo $b = $_GET["mob"];
    echo $c = $_GET["where"];
    echo $d = $_GET["howmany"];
    echo $e = $_GET["arrivals"];
    echo $f = $_GET["leaving"];
    echo $g = $_GET["email"];


    $to = "devchhabra9363@gmail.com";
    $subject = "Travel Booking Query";
    $txt = "Name ".$a."\r\n"."Mobile Number".$b."\r\n"."Where to".$c."\r\n"."How many ".$d."\r\n"."Arrival Date ".$e."\r\n". "Leaving Date ".$f."\r\n"."Email ".$g;
    $headers = "From: ".$g ;

    mail($to,$subject,$txt,$headers);

}



?>