<?php
include "connection.php";
if(isset($_GET['deletesubid'])){
    $id=$_GET['deletesubid'];

    $sql="delete from `subjects` where sub_id=$id";
    $result=mysqli_query($data,$sql);
    if($result){
        header("location:subjectlist.php");
    }
    else{
        die(mysqli_error($data));
    }
}

?>