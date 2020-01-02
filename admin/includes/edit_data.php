<?php
/**
 * Created by PhpStorm.
 * User: rp wadhwani
 * Date: 12/27/2018
 * Time: 3:18 PM
 */
include_once ("admin_connection.php");
if (isset($_POST['edit_category'])){
    $cat_title = $_POST['cat_title'];
    $cat_id = $_POST['cat_id'];
    $query = "UPDATE categories SET cat_title='$cat_title' WHERE cat_id=$cat_id";
    mysqli_query($connection,$query);
    //remaining checking
    header("Location: ../categories.php");

}