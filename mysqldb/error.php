<?php 





?>





<!--  -->





<?php

// include, SELECT, mysqli_connect, mysqli_query, mysqli_real_escape_string(jkjjkjkjkj), mysqli_num_rows(), mysqli_fetch_assoc(), UPDATE, SET, DELETE, WHERE

           
   

    $titleErr =  '';
    $genreErr = '';
    $authorErr = '';
    $priceErr = '';
    $quantityErr = '';
    $summaryErr = '';



    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $genre = $_POST['genre'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $summary = $_POST['summary'];

        if($title == '' || $genre == '' || $author == '' || $price == '' || $quantity == '' || $priceErr == ''){
            $titleErr = 'Tile is required';
            $genreErr = 'Please enter your gender';

            $authorErr = 'Author is required';
            $priceErr = 'Kindly select a price';
            $quantityErr = 'Quantity is required';
            $summaryErr = 'A short description about the book is needed';
          
         
        }else{
            echo 'submitted';
        }

        echo $genreErr;


    }







    // CRUD = Create, Retrieve, Update, Destroy











?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/65b7d3c4c3.js" crossorigin="anonymous"></script>

</head>
<body>
    
<div id="section">


    <div class="form-container">
        <h2>Add Post</h2>
        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" value="" name="title" placeholder="Enter book title" class="input-box">

            <p><?php echo $titleErr ;?></p>
            <input type="text" name="genre" value="" placeholder="Enter book genre"  class="input-box">
            <p><?php echo $genreErr ;?></p>
            <input type="text" name="author" placeholder="Enter name of author"  class="input-box">
            <p><?php echo $authorErr ;?></p>
            <input type="text" name="price" placeholder="Enter price of book"  class="input-box">
            <p><?php echo $priceErr ;?></p>
            <input type="number" name="quantity" placeholder="Enter book quantity"  class="input-box">
            <p><?php echo $quantityErr ;?></p>

            <textarea name="summary" id="" cols="30" rows="10" placeholder="Enter book summary" class="input-box">
            

            </textarea>

            <input type="submit" class="btn" name="submit" value="Submit">

        </form>
    </div>
</div>


<div id="footer">
<p>Copyright@ <span>O</span>plueas <span>Ws</span> 2024</p>
</div>

<script src="script.js"></script>
</body>
</html>