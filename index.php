<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // multi-dimensional arrays

    $blogs = [
        ['title' => 'mario party','author'=>'mario','content' =>'lorem','likes'=>30],
        ['title'=>'mario kart cheats','author'=>'toad','content'=>'lorem','likes'=>25],
        ['title'=>'zelda hidden chest', 'author'=>'link','content'=>'lorem','likes'=>50]
    ];

    // print_r($blogs[1]);
    // print_r($blogs[1][1]);
    // echo $blogs[2]['author'];
    //echo count($blogs);
    $blogs[] = ['title' => 'castle party','author'=>'peach','content'=>'lorem','likes'=> 100];

    //print_r($blogs);
    $popped = array_pop($blogs);
    print_r($popped);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials | Multi-dimensional Arrays</title>
</head>
<body>

    
</body>
</html>