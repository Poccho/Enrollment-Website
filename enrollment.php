<?php
include "connection.php";
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:sign_up.php");
}

if(isset($_GET['enroll'])){
    $id=$_SESSION["username"];

    $sql="INSERT INTO request
    SELECT `name` FROM accounts
    WHERE username = '$id'";
    $result=mysqli_query($data,$sql);
    if($result){
        header("location:enroll.php");
    }
    else{
        die(mysqli_error($data));
    }
}

?>