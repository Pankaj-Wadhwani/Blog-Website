<?php
/**
 * Created by PhpStorm.
 * User: rp wadhwani
 * Date: 1/20/2019
 * Time: 8:53 PM
 */
include_once ("connection.php");

if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='$username'";
//    die($query);
    $rs=mysqli_query($connection,$query);

    if ($row = mysqli_fetch_assoc($rs)) {
//        die("xx");
        $db_pass = $row['password'];
        if (password_verify($password, $db_pass)) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $password;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            header("Location: ../admin/index.php");

        } else {

            header("Location: login.php");
        }
    }else{
        header("Location: login.php");

    }


}