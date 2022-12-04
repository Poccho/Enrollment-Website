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
            <li style="float:right"><a href=request.php> Request </a></li>
            <li style="float:right"><a href=profclass.php> Classes </a></li>
            <li style="float:right"><a href=prof.php> Home </a></li>
        </ul>

        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

        <div class="message-block">
            <h1>Welcome Back <?php echo $_SESSION["username"]?> !</h1> 
            <h3>Check your request page and start accepting students in your class!</h3>
        </div>
</body>
</html>
