<?php
/**
 * Created by PhpStorm.
 * User: rp wadhwani
 * Date: 1/20/2019
 * Time: 9:34 PM
 */
session_start();
$_SESSION['username']=null;
$_SESSION['role']=null;
$_SESSION['user_id']=null;
session_unset();
header("Location:../index.php")
?>