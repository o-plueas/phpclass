<?php

//mysqli_real_escape_string, htmlspecialchars(), filter_input()

    if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($conn, $_POST['name']);

        $email = $_POST['email'];

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email =filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $name = htmlspecialchars($_POST['name']);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_FULL_CHAR);



    }

?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

    

</form>

