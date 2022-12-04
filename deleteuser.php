<?php
include "connection.php";
if(isset($_GET['deleteuser'])){
    $id=$_GET['deleteuser'];

    $sql="delete from `accounts` where user_id=$id";
    $result=mysqli_query($data,$sql);
    if($result){
        header("location:userlist.php");
    }
    else{
        die(mysqli_error($data));
    }
}

?>