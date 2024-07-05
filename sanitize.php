<?php

    if(isset($_POST['submit'])){
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $password = $_POST['password'];

        // echo $name;

        //sanitizing

        // $name = htmlspecialchars($_POST['name']);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        $NAM = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $emai = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        echo $name;
        echo $email;



    }


    


    
// echo $_GET['name'];


?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">

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








