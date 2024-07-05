<?php include 'config.php';

if(isset($_POST['edit_book'])){
    $post_edit_id = mysqli_real_escape_string($conn, $_POST['post_edit_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $genre= mysqli_real_escape_string($conn, $_POST['genre']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
    $summary = mysqli_real_escape_string($conn, $_POST['summary']);

    mysqli_query($conn, "UPDATE `users` SET  title = '$title', genre = '$genre', author = '$author', price = '$price', quantity = '$quantity', summary = '$summary' WHERE id = '$post_edit_id'") or die("query failed");
    header('location: book.php');

}




if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `users` WHERE id = '$delete_id'") or die("query failed");
    
    header("location:book.php");
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


<h1 style="text-align:center; margin:30px">List of Books</h1>
 
<div class="retireve" style="display:flex; flex-wrap:wrap; background-color:white; width:80vw; margin:20px auto; border-radius:10px;padding:10px; ">
   
   <?php 

        $select_query = mysqli_query($conn, "SELECT * FROM `users`") or die('Query failed');

        while($row = mysqli_fetch_assoc($select_query)){
    ?>


    <div class="box" style="background-color:transparent; color:black; box-shadow:0px 0px 20px rgba(0,0,0,0.3);width:300px; margin:10px; padding:20px; border-radius:20px">


        <h2>Title: <?php echo $row['title'];?> </h2>
        <i>Genre: <?php echo $row['genre'];?></i>
        <p>Author: <?php echo $row['author'];?></p>

        <div>
            <p>Price: <?php echo $row['price'];?>, Quantity: <?php echo $row['quantity'];?></p>

        </div>

        <div>
            Summary 
        </div>
        <a style="margin-right:20px" href="book.php?edit=<?php echo $row['id'];?>">EDIT</a> 
        <a href="book.php?delete=<?php echo $row['id'];?>">DELETE</a>

    </div>


    <?php
    
        }
    ?>





</div>

<!-- updating -->

<?php

    if(isset($_GET['edit'])){
        $edit_id =  $_GET['edit'];

        $select_edit_query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$edit_id'") or die("query failed");

        while($row = mysqli_fetch_assoc($select_edit_query)){
  

?>



<div id="section">

    <!-- Updating data -->
    <div class="form-container">
        <h2>Edit Post</h2>
        <form action="" method="post" enctype="multipart/form-data">

            <input type="hidden" name="post_edit_id" value="<?php echo $row['id']; ?>">
            <input type="text" value="<?php echo $row['title']; ?>" name="title" placeholder="Enter book title" class="input-box">

            <input type="text" name="genre" value="<?php echo $row['genre']; ?>" placeholder="Enter book genre"  class="input-box">
            <input type="text" name="author" value="<?php echo $row['author']; ?>" placeholder="Enter name of author"  class="input-box">
            <input type="text" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter price of book"  class="input-box">
            <input type="number" name="quantity" value="<?php echo $row['quantity']; ?>" placeholder="Enter book quantity"  class="input-box">

            <textarea name="summary" id="" cols="30" rows="10" value="" placeholder="Enter book summary" class="input-box">
            
            <?php echo $row['summary']; ?>
            </textarea>

            <input type="submit" class="btn" name="edit_book" value="Submit">

        </form>
    </div>
 

   
</div>


<?php
   }

}



?>





</body>
</html>