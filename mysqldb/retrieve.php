
<!-- retrieve -->

<div class="retireve" style="display:flex; flex-wrap:wrap; background-color:white; width:80vw; margin:20px auto; border-radius:10px;padding:10px; ">
    <?php 

        $select_query = mysqli_query($conn, "SELECT * FROM `users`") or die('Query failed');

        while($row = mysqli_fetch_assoc($select_query)){
    ?>


    <div class="box" style="background-color:transparent; color:black; box-shadow:0px 0px 20px rgba(0,0,0,0.3);width:300px; margin:10px; padding:20px; border-radius:20px">


        <h2>Title: <?php echo $row['title'];?> <i>Genre: <?php echo $row['genre'];?></i></h2>
        
            <div style="width:60px; height:60px; border-radius:10px">
                <img style="width:100%; height:100%;  border-radius:10px" src="../../uploaded_images/<?php echo $row['image2']?>" alt="">
            </div>
        <p>Author: <?php echo $row['author'];?></p>
        <div>
            <p>Price: <?php echo $row['price'];?>, Quantity: <?php echo $row['quantity'];?></p>

        </div>

        <div style="margin-bottom:20px;">
            Summary 
        </div>
        <a style="text-decoration:none; color:red; padding-top:20px" href="index.php?delete=<?php echo $row['id'];?>">DELETE</a>
        <a style="text-decoration:none; color:black; padding-top:20px" href="index.php?edit=<?php echo $row['id'];?>">EDIT</a>



    </div>


    <?php
    
        }
    ?>




</div>