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
    <div class="container">
            <video autoplay loop muted plays-inline class="background-clip">
                <source src="bgvid.webm" type="video/mp4">
            </video>
    </div>
        <ul>
            <li style="float:left"><a href=https://iscph.com> ISCP International State College of the Philippines </a></li>
            <li style="float:right"><a href=logout.php> Sign Out </a></li>
            <li style="float:right"><a href=userlist.php> Users </a></li>
            <li style="float:right"><a href=subjectlist.php> Subjects </a></li>
            <li style="float:right"><a href=admin.php> Home </a></li>
        </ul>

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</body>
</html>


