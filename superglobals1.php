<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $name;


    }

    //fname, lname, email, password, description

    


    
// echo $_GET['name'];



?>




<form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">

    <div>
        <input type="text" name="name" placeholder="Enter your name">
    </div>

    <div>
        <input type="email" name="email" placeholder="Enter email">
    </div>

    <div>
        <input type="password" name="password" placeholder="Enter password">
    </div>

    <!-- <div>
        <input type="password" name="c_password" placeholder="Confirm password">
    </div> -->

    <div>
        <input type="submit" name="submit" value="submit">
    </div>




</form>













<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email= $_POST['email'];

        
        echo $name;
        echo '<br>';
        echo $email;

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


<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <div>
        <label for="">Name:
            <input type="text" name="name" placeholder="Enter name">

        </label>
    </div>

    <div>
        <label for="">Email
            <input type="email" name="email" placeholder="Enter Email">
            
        </label>
    </div>

    <div>
        <label for="">Password:
            <input type="password" name="password" placeholder="Enter Paswword">
            
        </label>
    </div>

    <input type="submit" name="submit" value="Submit">



</form>
    
</body>
</html>










