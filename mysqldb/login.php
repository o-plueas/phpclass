<?php

    include 'config.php';

    session_start();

    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));



        $select_query = mysqli_query($conn, "SELECT * FROM `register` WHERE email = '$email'") or die("Query failed");

        if(!mysqli_num_rows($select_query)){
            echo 'user does not exit, kindly register';
            
        }else{
            $row = mysqli_fetch_assoc($select_query);

            if($row['user_type'] == 'user'){


                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_email'] = $row['email'];
                $_SESSION['user_username'] = $row['username'];


                header('location:book.php');


            }elseif($row['user_type']  == 'admin'){

                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_email'] = $row['email'];
                $_SESSION['admin_username'] = $row['username'];

                header('location:dashboard.php');

            }else{

                header('location:register.php');

            }
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
    



        <!-- <?php include 'admin_nav.php';?> -->

            <div id="section">

            <!-- creating data -->
            <div class="form-container">
                <h2>Add Post</h2>
                <form action="" method="post" enctype="multipart/form-data">

                    <input type="email" name="email" placeholder="Enter your email"  class="input-box">
                    <input type="password" name="password" placeholder="Enter your password"  class="input-box">

                    <input type="submit" class="btn" name="login" value="Login">
                    <p style="background-color:white; color:black; width:60%; text-align:center; padding:10px; margin-top:4px; border-radius:5px;">Don't have an account? <a href="register.php">Register</a></p>

                </form>
            </div>



            </div>

</body>
</html>