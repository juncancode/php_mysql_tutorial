<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $radius = 25;
    $pi = 3.14;
    
    // basic - *, /, +, -, **

    // echo $pi * $radius^2;

    // order of operation ( B I D M A S )

    // echo 2 * (4 + 9) / 3;

    // increment & decrement operators

    // echo $radius--;
    // echo $radius;

    // shorthand operators

    $age = 20;

    //$age -= 10;
    //$age *= 2;
    //echo $age;

    // number functions

    //echo floor($pi);
    //echo ceil($pi);
    echo pi();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>

    
</body>
</html>