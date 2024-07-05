<?php


setcookie('name', 'ogoo', time() + 86400);

echo time();

echo "<br>";


if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}


setcookie('name', '', time() - 86400);
    



?>