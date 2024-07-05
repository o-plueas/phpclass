<?php

    include 'config.php';

    if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, md5($_POST['password']));
        $cpassword = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
        $user_type = $_POST['user_type'];


        $select_query = mysqli_query($conn, "SELECT * FROM `register` WHERE username = '$username' AND email = '$email'") or die('query failed');

        if(mysqli_num_rows($select_query) > 0){
            echo 'user already exist';



        }elseif($password != $cpassword){
            echo 'password does not match';

           

        }else{
            
            $insert_query = mysqli_query($conn, "INSERT INTO `register`(username, email, password, user_type) VALUES('$username', '$email', '$cpassword', '$user_type')") or die("query failed");
            echo 'registered successfully';

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

                    <input type="text" name="username" value="" placeholder="Enter username"  class="input-box">
                    <input type="email" name="email" placeholder="Enter your email"  class="input-box">
                    <input type="password" name="password" placeholder="Enter your password"  class="input-box">
                    <input type="password" name="cpassword" placeholder="Confirm your password"  class="input-box">

                    <select name="user_type" id="" class="input-box">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>



                    

                    </textarea>

                    <input type="submit" class="btn" name="register" value="Submit">

                    <p style="background-color:white; color:black; width:60%; text-align:center; padding:10px; margin-top:4px;
                     border-radius:5px;"
                     >Already have an account? 
                     <a href="login.php">Login</a></p>

                </form>
            </div>



            </div>

</body>
</html>