<?php
/**
 * Created by PhpStorm.
 * User: rp wadhwani
 * Date: 2/9/2019
 * Time: 7:49 PM
 */
include_once ("admin_connection.php");
if (isset($_POST['forgot_password'])){
    $email = $_POST['email'];
    $query = "SELECT * FROM users WHERE email = '{$email}'";
    $result = mysqli_query($connection,$query);
    if (mysqli_num_rows($result) == 1){
        $length=50;
        $token = bin2hex(openssl_random_pseudo_bytes($length));
        $query = "UPDATE users SET token='{$token}' WHERE email = '{$email}'";
        $result = mysqli_query($connection,$query);

        //code to send email
        $to = $email;
        $subject = "Reset";

        $message = "<b>To reset click below:/b>";
        $message.="<a href='http://localhost/php/cms/admin/reset.php?token={$token}'>http://localhost/php/cms/admin/reset.php?token={$token}</a>";


        $header = "From:noreply@cms.com\r\n";

        $header.="MIME-version: 1.0\r\n";
        $header.="Content-Type: text/html\r\n";

        if (mail($to,$subject,$message,$header)){
            echo "sent";
        }
        else{
            echo "failed";
        }

    }

}