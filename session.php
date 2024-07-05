<?php

    session_start();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // echo $name;

        if($name == 'adanna' && $password == 'password'){
            $_SESSION['$name'] = $name;
            echo $_SESSION['$name'];

            header('Location:sess.php');


        }


    }


    


    
// echo $_GET['name'];


?>


<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">

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








