<?php

    include 'config.php';

    // title, genre, author,price, quantity, summary
    //CRUD - create, retrieve, update/edit, destroy/delete


    // creating storing
    if(isset($_POST['submit'])){
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $genre = mysqli_real_escape_string($conn, $_POST['genre']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
        $summary = mysqli_real_escape_string($conn, $_POST['summary']);

        $insert_query =  mysqli_query($conn, "INSERT INTO `users` (title, genre, author, price, quantity, summary) VALUES('$title', '$genre', '$author', '$price', '$quantity', '$summary')") or die('Query failed');

        if($insert_query){
            echo 'Submitted successfully';
        }


    }




   














// mysqli_connect, mysqli_query, mysqli_num_rows, mysqli_fetch_assoc(), SELECT, INSERT, UPDATE
//DELETE, SET, WHERE, FROM, *
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
<?php include 'admin_nav.php';?>


<div id="section">

    <!-- creating data -->
    <div class="form-container">
        <h2>Add Post</h2>
        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" value="" name="title" placeholder="Enter book title" class="input-box">

            <input type="text" name="genre" value="" placeholder="Enter book genre"  class="input-box">
            <input type="text" name="author" placeholder="Enter name of author"  class="input-box">
            <input type="text" name="price" placeholder="Enter price of book"  class="input-box">
            <input type="number" name="quantity" placeholder="Enter book quantity"  class="input-box">

            <textarea name="summary" id="" cols="30" rows="10" placeholder="Enter book summary" class="input-box">
            

            </textarea>

            <input type="submit" class="btn" name="submit" value="Submit">

        </form>
    </div>
 

   
</div>


<!-- retirve -->
<div class="retireve" style="display:flex; flex-wrap:wrap; background-color:white; width:80vw; margin:20px auto; border-radius:10px;padding:10px; ">
    <?php 

        $select_query = mysqli_query($conn, "SELECT * FROM `users`") or die('Query failed');

        while($row = mysqli_fetch_assoc($select_query)){
    ?>


    <div class="box" style="background-color:transparent; color:black; box-shadow:0px 0px 20px rgba(0,0,0,0.3);width:300px; margin:10px; padding:20px; border-radius:20px">


        <h2>Title: <?php echo $row['title'];?> <i>Genre: <?php echo $row['genre'];?></i></h2>
        <p>Author: <?php echo $row['author'];?></p>
        <div>
            <p>Price: <?php echo $row['price'];?>, Quantity: <?php echo $row['quantity'];?></p>

        </div>

        <div>
            Summary 
        </div>

    </div>


    <?php
    
        }
    ?>




</div>



    
</body>
</html>