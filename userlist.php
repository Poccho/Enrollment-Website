<?php
include "connection.php";
if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $type=$_POST['usertype'];
    $name=$_POST['name'];

    $sql="INSERT INTO `accounts` (`username`, `password`, `usertype`,`name`)
    values('$uname','$pass','$type','$name')";
    $result=mysqli_query($data, $sql);
    if($result){
        header('location:admin.php');
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
    <button class='addbtn' name="add"><span><a href="adduser.php" class='link'>Add User</a></span></button>
    <div class="table" name="table">
    <table class='table1'>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Usertype</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
        <?php
        
        $sql="select * from `accounts`";
        $result=mysqli_query($data, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $uname=$row['username'];
                $pass=$row['password'];
                $type=$row['usertype'];
                $name=$row['name'];
                echo '<tr>
                <td>'.$id.'</td>
                <td>'.$uname.'</td>
                <td>'.$pass.'</td>
                <td>'.$type.'</td>
                <td>'.$name.'</td>
                <td>
                <button class="edit" style="float:center"><span><a href="edituser.php? userid='.$id.'" class="link">Edit</a></span></button>
                <button class="delete" style="float:center"><span><a href="deletesub.php? deletesubid='.$id.'" class="link">Delete</a></span></button>
                </td>
            </tr>';
            }
        }
        
        ?>
            </tbody>
        </table>
    </div>
</body>
</html>


