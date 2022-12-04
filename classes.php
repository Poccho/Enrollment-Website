<?php
session_start();
if(!isset($_SESSION["username"]))
{
    header("location:sign_in.php");
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
            <li style="float:right"><a href=enroll.php> Enroll </a></li>
            <li style="float:right"><a href=classes.php> Classes </a></li>
            <li style="float:right"><a href=student.php> Home </a></li>
        </ul>

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <div class="message-block">
            <h1>Classes</h1> 
            <h3>Sunod na</h3>
        </div>
</body>
</html>


