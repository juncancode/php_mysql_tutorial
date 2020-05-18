<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // indexed arrays
    $peopleOne = ['shaun','crystal','ryu'];    
    //echo $peopleOne[1];
    $peopleTwo = array('ken','chun-li');
    // echo $peopleTwo[1];
    $ages = [20,30,40,50];
    // print_r($ages);
    $ages[1] = 25;
    // print_r($ages);
    $ages[] = 60;
    // print_r($ages);
    array_push($ages, 70);
    // print_r($ages);
    // echo count($ages);
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    // print_r($peopleThree);


    // associative arrays (key & value pairs)
    $ninjasOne = ['shaun' => 'black','mario' => 'red', 'luigi' => 'green'];
    // echo $ninjasOne['mario'];
    // print_r($ninjasOne);
    $ninjasTwo = array('browser' => 'brown', 'peach' => 'pink','toad' => 'pink');
    // print_r($ninjasTwo);
    $ninjasTwo['peach'] = 'yellow';
    // print_r($ninjasTwo);
    //echo count($ninjasOne);
    $ninjasThree = array_merge($ninjasOne, $ninjasTwo);
    print_r($ninjasThree);
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