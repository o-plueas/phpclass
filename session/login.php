<?php

    
session_start();


if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($fname == 'Adaobi' &&  $password == '1234'){
        
        $_SESSION['fname'] =  $fname;
        $_SESSION['password'] = $password;

        header('location:home.php');

        
    }else{
        header('location:signup.php');
    }



}


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
    <form action="" method="POST">

        <h1>Login</h1>

    <div>
        <label for="">FirstName: <input type="text" name="fname" placeholder="Enter your firstName"></label>
    
    </div>
    <div>
        <label for="">Last Name: <input type="text" name="lname"  placeholder="Enter your last name"></label>
        
    </div>

    <div>
        <label for="">Email: <input type="email" name="email"  placeholder="Enter your email"></label>

    </div>

    <div>
        <label for="">Password <input type="password" name="password"  placeholder="Enter your password"></label>

    </div>
    <input type="submit" name="submit" value="Submit" class="sbt">
    </form>
    </div>




</body>
</html>