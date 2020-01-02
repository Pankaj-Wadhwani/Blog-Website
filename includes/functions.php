<?php
/**
 * Created by PhpStorm.
 * User: rp wadhwani
 * Date: 12/27/2018
 * Time: 11:07 AM
 */
include_once ("connection.php");
function get_all_categories($condition=1){
    global $connection;
    $allCategories=array();
    $sql = "SELECT * FROM categories WHERE $condition";
    $result = mysqli_query($connection,$sql);
    $i=0;
        while($row = mysqli_fetch_assoc($result)){
        $single_category= array();
        $single_category['cat_id'] =$row['cat_id'];
        $single_category['cat_title'] =$row['cat_title'];
//        echo $single_category['cat_title'];
        $allCategories[$i]=$single_category;
        $i++;
    }
    return $allCategories;
}
function get_all_posts($condition=1){
    global $connection;
//    $allPosts=array();

    $sql = "SELECT posts.post_id,posts.post_cat_id,posts.post_title,posts.post_author,posts.post_date,posts.post_date,posts.post_image,posts.post_content,posts.post_tags,post_comment_count,posts.post_status,posts.post_views_count,CONCAT(users.first_name,CONCAT(\" \",users.last_name)) as author FROM posts ,users WHERE posts.post_author = users.user_id AND ($condition)";
    $result = mysqli_query($connection,$sql);

    return $result;
}
function get_all_users($condition=1){
    global $connection;
//    $allPosts=array();
    $sql = "SELECT * FROM users WHERE $condition";
    $result = mysqli_query($connection,$sql);

    return $result;
}
function get_all_comments($condition=1){
    global $connection;
//    $allPosts=array();
    $sql = "SELECT * FROM comments,posts WHERE ($condition)";
    $result = mysqli_query($connection,$sql);
//    $i=0;
//    while($row = mysqli_fetch_assoc($result)){
//       echo $row['comment_author'];
//        $i++;
//    }


    return $result;
}

function isLoggedIn(){
    startSession();
//    echo "hi";
    if(isset($_SESSION['user_id']))
        return true;
    return false;
}
function startSession(){
    if (session_status() == PHP_SESSION_NONE)
        session_start();
}