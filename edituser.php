<?php
include "connection.php";
$subid=$_GET['userid'];
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $type=$_POST['usertype'];
    $name=$_POST['name'];

    $sql="UPDATE `accounts` set id='$id', username='$uname', `password`='$pass',usertype='$type', `name`='$name' 
    where id=$id";
    
    $result=mysqli_query($data, $sql);

    if($result){
        header('location:userlist.php');
    }
    
}

session_start();
if(!isset($_SESSION["username"]))
{
    header("location:login.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="sign_in.css">
    </head>
<body>
        <ul>
            <li style="float:left"><a href=https://iscph.com> ISCP International State College of the Philippines </a></li>
            <li style="float:right"><a href=logout.php> Sign Out </a></li>
            <li style="float:right"><a href=userlist.php> Users </a></li>
            <li style="float:right"><a href=subjectlist.php> Subjects </a></li>
            <li style="float:right"><a href=admin.php> Home </a></li>
        </ul>
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <form action="#" method="POST">
            <div class="login-block">
                <h1>Edit User</h1>
                <input type="text" value="" placeholder="Username" name="username" id="username" />
                <input type="password" value="" placeholder="Password" name="password" id="password"/>
                <input type="usertype" value="" placeholder="Usertype" name="usertype" id="usertype"/>
                <input type="name" value="" placeholder="Full Name" name="name" id="name"/>
                <button>Update</button>
            </div>

</body>
</html>


