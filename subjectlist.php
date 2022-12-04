<?php
include "connection.php";

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
    </div><button class='addbtn' name="add" style='color:white'><span><a href="addsubject.php" class='link'>Add Subject</a></span></button>
        <div class="table" name="table">
                <table class='table1'>
            <thead>
                <tr>
                    <th scope="col">Subject ID</th>
                    <th scope="col">Subject Name</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Sections</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
        <?php
        
        $sql="select * from `subjects`";
        $result=mysqli_query($data, $sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $subid=$row['sub_id'];
                $subname=$row['name'];
                $prof=$row['professor'];
                $section=$row['section'];
                echo '<tr>
                <td>'.$subid.'</td>
                <td>'.$subname.'</td>
                <td>'.$prof.'</td>
                <td>'.$section.'</td>
                <td>
                <button class="edit" style="float:center"><span><a href="editsub.php? editsubid='.$subid.'"class="link">Edit</a></span></button>
                <button class="delete" style="float:center"><span><a href="deletesub.php? deletesubid='.$subid.'"class="link">Delete</a></span></button>
                </td>
            </tr>';
            }
        }
        
        ?>
            </tbody>
        </table>
</body>
</html>


