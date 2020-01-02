<?php
/**
 * Created by PhpStorm.
 * User: rp wadhwani
 * Date: 2/3/2019
 * Time: 8:14 PM
 */

$subject = "Test";

$message = "<b>U recieved a comment on this post by $name</b>";

$header = "From:pankajwadhwani100@gmail.com\r\n";
$header.="CC:abc@gmail.com\r\n";
$header.="MIME-version: 1.0\r\n";
$header.="Content-Type: text/html\r\n";

if (mail($to,$subject,$message,$header)){
    echo "sent";
}
else{
    echo "failed";
}
