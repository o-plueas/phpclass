<?php
session_start();

if($name == 'name' && $password == 'password'){

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
}






?>





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