<?php
include "connection.php";
if(isset($_POST['submit'])){
    $subname=$_POST['subject'];
    $prof=$_POST['professor'];
    $section=$_POST['section'];

    $sql="INSERT INTO `subjects` (`name`, `professor`,`section`)
    values('$subname','$prof','$section')";
    $result=mysqli_query($data, $sql);
    if($result){
        header('location:subjectlist.php');
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
    <form action="#" method="POST">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
            <div class="login-block">
                <h1>Add Subject</h1>
                <input type="text" value="" placeholder="Subject" name="subject" id="subject" />
                <input type="text" value="" placeholder="Professor" name="professor" id="professor"/>
                <input type="text" value="" placeholder="Section" name="section" id="section"/>
                <button name='submit'>Add</button>
            </div>

</body>
</html>


