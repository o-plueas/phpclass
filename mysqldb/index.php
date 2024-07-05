
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


        //create image

        $image = $_FILES['bookimage']['name'];
        $imageSize = $_FILES['bookimage']['size'];
        $imageTmpNmae = $_FILES['bookimage']['tmp_name'];
        $bookFolder = '../../uploaded_images/' . $image;


        //conditional 


        $check_query = mysqli_query($conn, "SELECT * FROM `users` WHERE title = '$title'") or die("QUERY FAILED");

        if(mysqli_num_rows($check_query) > 0){
            echo 'similar book already exist';
        }else{
            $insert_query =  mysqli_query($conn, "INSERT INTO `users` (title, genre, author, price, quantity, summary) VALUES('$title', '$genre', '$author', '$price', '$quantity', '$summary')") or die('Query failed');

            if($imageSize > 2000000){
                echo 'image size too large';

            }else{
                $insert_image = mysqli_query($conn, "INSERT INTO `users` (image2) VALUES('$image')") or die("query failed");

                move_uploaded_file($imageTmpNmae, $bookFolder);

            }
       
     
        }



    }

    // delete 
    if(isset($_GET['delete'])){

        
        $delete_id = $_GET['delete'];
        mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die('QUERY FAILED');

        header('location:index.php');
    }




    // assignment 
    // Create a website for workers at ministry of health (two pages website)
    //Create a signup page that will contain - fname, lname, email, password, state of origin,
    //  level of the workers
    //Store all the data on the database once a user signs up
    //Display the data on the home page
    // Add delete functionality on each displayed data



// mysqli_connect, mysqli_query, mysqli_num_rows, mysqli_fetch_assoc(), SELECT, INSERT, UPDATE
//DELETE, SET, WHERE, FROM, *
?>


<!-- update -->

<!--             // update_id,  update_title,  update_genre, update_author, update_price, update_quantity, update_summary, update_submit
 -->

<?php

    if(isset($_POST['update_submit'])){
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $update_title = mysqli_real_escape_string($conn, $_POST['update_title']);
        $update_genre = mysqli_real_escape_string($conn, $_POST['update_genre']);
        $update_author = mysqli_real_escape_string($conn, $_POST['update_author']);
        $update_price = mysqli_real_escape_string($conn, $_POST['update_price']);
        $update_quantity = mysqli_real_escape_string($conn, $_POST['update_quantity']);

        $update_summary = mysqli_real_escape_string($conn, $_POST['update_summary']);

        $update_query = mysqli_query($conn, "UPDATE `users` SET title = '$update_title', genre = '$update_genre', 
        author = '$update_author', price = '$update_price', summary = '$update_summary' WHERE id = '$update_id'") or die('query failed');
        if($update_query){
            echo 'updated successfully';
        }else{
            echo 'Failed to update';

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
    <?php include 'admin_nav.php';?>

<div id="section">

    <!-- creating data -->
    <div class="form-container" style="margin-top:150px; margin-bottom:350px">
        <h2>Add Post</h2>
        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" value="" name="title" placeholder="Enter book title" class="input-box">

            <input type="text" name="genre" value="" placeholder="Enter book genre"  class="input-box">
            <input type="text" name="author" placeholder="Enter name of author"  class="input-box">
            <input type="text" name="price" placeholder="Enter price of book"  class="input-box">
            <input type="number" name="quantity" placeholder="Enter book quantity"  class="input-box">
            
            <input type="file" class="input-box" name="bookimage">
            
            <textarea name="summary" id="" cols="30" rows="10" placeholder="Enter book summary" class="input-box">
        
            </textarea>

            <input type="submit" class="btn" name="submit" value="Submit">

        </form>
    </div>
 

   
</div>


<!-- retirve -->

<?php include 'retrieve.php';?>


<!-- update -->

<div id="section">

<div class="form-container">
    <?php 

        if(isset($_GET['edit'])){
            $edit_id = $_GET['edit'];

            $select_query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$edit_id'") or die("Query failed");
            while($row = mysqli_fetch_assoc($select_query)){

          

    ?>      <form action="" method="post" enctype="multipart/form-data">
                <h2>Update Post</h2>
                <input type="hidden" name="update_id" value="<?php echo $row['id'];?>">
                <input type="text" value="<?php echo $row['title'];?>" name="update_title" placeholder="Enter book title" class="input-box">
                <input type="text" name="update_genre" value="<?php echo $row['genre'];?>" placeholder="Enter book genre"  class="input-box">
                <input type="text" value="<?php echo $row['author'];?>" name="update_author" placeholder="Enter name of author"  class="input-box">
                <input type="text" value="<?php echo $row['price'];?>" name="update_price" placeholder="Enter price of book"  class="input-box">
                <input type="number"  value="<?php echo $row['quantity'];?>" name="update_quantity" placeholder="Enter book quantity"  class="input-box">

                <textarea name="update_summary" value="<?php echo $row['summary'];?>" id="" cols="30" rows="10" placeholder="Enter book summary" class="input-box">
                

                </textarea>

                <input type="submit" class="btn" name="update_submit" value="Update">

        </form>
    <?php
        }
        }
    ?>
    </div>
    </div>



    
</body>
</html>