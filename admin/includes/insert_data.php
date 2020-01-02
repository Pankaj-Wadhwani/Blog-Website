<?php
    include_once ("admin_functions.php");
    function convert_to_string($item){
        $string_item = "'".$item."'";
        return $string_item;
    }
    if (isset($_POST['add_category'])){
        $cat_title = $_POST['cat_title'];
        $cat_title = convert_to_string($cat_title);
        insert("categories","cat_title","{$cat_title}");
        header("Location:../categories.php");
    }
?>