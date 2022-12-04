<?php
$host="localhost";
$user="root";
$password="";
$db="website";

session_start();

$data=mysqli_connect($host, $user, $password, $db);

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from accounts where username = '".$username."' AND password = '".$password."'";
    $result=mysqli_query($data, $sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="student")
    {   
        $_SESSION["username"]=$username;

        header("location:student.php");
    }
    elseif($row["usertype"]=="prof")
    {
        $_SESSION["username"]=$username;
        
        header("location:prof.php");
    }
    elseif($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        
        header("location:admin.php");
    }

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
    </ul>
    <form action="#" method="POST">
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
            <div class="login-block">
                <img src="iscp.png" alt="ISCPLOGO" width= 315px class ="img">
                <h1>Login</h1>
                <input type="text" value="" placeholder="Username" name="username" id="username" />
                <input type="password" value="" placeholder="Password" name="password" id="password"/>
                <button>Submit</button>
            </div>

</body>
</html>


