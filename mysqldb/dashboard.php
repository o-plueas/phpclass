<?php 

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!$admin_id){
    header('location:index.php');
}








?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>ADMIN PANNEL</h1>

    <h2>Welcome <?php echo $_SESSION['admin_username']; ?></h2>


    <div style="display:flex; flex-wrap:wrap; justify-content:center; align-items:center;">

    <div>
        <?php

            $select_query = mysqli_query($conn, "SELECT * FROM `users`") or die('Query failed');

            $numberOfBooks = mysqli_num_rows($select_query);


        ?>

        <div style="background-color:grey; color:white; padding:20px;margin:10px; width:150px; height:150px;">
            <h2><?php echo "The number of books is " . $numberOfBooks;?></h2>
        </div>
    </div>

    <div>
        <?php

            $select_query = mysqli_query($conn, "SELECT * FROM `register` ") or die('Query failed');

            $numberOfuser = mysqli_num_rows($select_query);


        ?>

        <div style="background-color:grey; color:white; padding:20px; margin:10px; width:150px; height:150px;">
            <h2><?php echo "The number of registered users is " . $numberOfuser;?></h2>
        </div>
    </div>


    <div>
        <?php

            $select_query = mysqli_query($conn, "SELECT * FROM `register` WHERE user_type ='admin' ") or die('Query failed');

            $numberOfadmins = mysqli_num_rows($select_query);


        ?>

        <div style="background-color:grey; color:white; padding:20px; margin:10px; width:150px; height:150px;">
            <h2><?php echo "The number of Admins is " . $numberOfadmins;?></h2>
        </div>
    </div>
    
        
    </div>
</body>
</html>