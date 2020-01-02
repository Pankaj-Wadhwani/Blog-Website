<?php
include_once ("admin_connection.php");
    function insert($table,$column,$value){
        global $connection;

        $query="INSERT INTO {$table}({$column}) VALUES ({$value})";
        mysqli_query($connection,$query);
        if (mysqli_errno($connection)){
            die(mysqli_error($connection));
        }

    }
    function delete($table,$condition){
        global $connection;

        $query="DELETE FROM $table WHERE $condition";
        mysqli_query($connection,$query);
        if (mysqli_errno($connection)){
            die(mysqli_error($connection));
        }
    }
?>