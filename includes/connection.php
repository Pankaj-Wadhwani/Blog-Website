<?php
/**
 * Created by PhpStorm.
 * User: rp wadhwani
 * Date: 12/26/2018
 * Time: 11:34 AM
 */
include_once ("config.php");
$connection=mysqli_connect(HOST,USER,PASSWORD,DB_NAME);
if ($connection){
//    echo "connection established";
}
else{
    die(mysqli_connect_error());
}

?>