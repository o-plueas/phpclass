<?php 

// if(!isset($_SESSION['name'])){
//     header('location:register.php');
// }else{
//     header('location:cart.php');
// }

$file = 'names.txt';

// if(file_exists($file)){

//     $handle = fopen($file, 'r');

//     $content = fread($handle, filesize($file));
//     fclose($handle);
//     echo $content;

// }else{
//     echo 'file not found!';
// }

$handle = fopen($file, 'w');

$content ='Adanae is my css student';

fwrite($file, $content);
fclose($handle);
echo $content;





$file = 'names.txt';

// if(file_exists($file)){

//     // echo readfile($file);
//     $handle = fopen($file, 'r');

//     $content = fread($handle, filesize($file));

//     fclose($handle);

//     echo $content;
// }



// if(file_exists($file)){
//     $handle = fopen($file, 'r');
//     $content = fread($handle, filesize($file));
//     echo $content;
// }





//writing

    // $handle = fopen($file, 'w');
    // $content = 'ogoo' . PHP_EOL .'sara';
    // fwrite($handle, $content);
    // fclose($handle);

    // echo $content;

    $handle = fopen($file, 'w');
    $content = 'chimamada';
    fwrite($handle, $content);
    fclose($handle);
    echo $content;













?>