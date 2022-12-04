<?php
include "connection.php";
$subid=$_GET['editsubid'];
$sql="select * from `subjects` where sub_id=$subid";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$prof=$row['professor'];
$section=$row['section'];

if(isset($_POST['submit'])){
    $subname=$_POST['subject'];
    $prof=$_POST['professor'];
    $section=$_POST['section'];

    $sql="UPDATE `subjects` set sub_id='$subid', `name`='$subname',
    `professor`='$prof', `section`='$section'
    where sub_id=$subid";
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
                <h1>Edit Subject</h1>
                <input type="text" value="" placeholder="Subject" name="subject" id="subject" value=<?php echo $name;?>>
                <input type="text" value="" placeholder="Professor" name="professor" id="professor">
                <input type="text" value="" placeholder="Section" name="section" id="section">
                <button name='submit'>Update</button>
            </div>

</body>
</html>


