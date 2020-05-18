<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    $stringOne = 'my email is ';
    $stringTwo = 'mario123@thenetninja.co.uk';

    // echo $stringOne.$stringTwo;

    $name = 'mario';

    // echo 'Hey, my name is ' . $name;

    // echo "Hey my name is $name";

    // echo "the ninja screamed \"whaaa.\"";
    // echo 'the ninjas screamed "whaaa"';

    // echo $name[1];

    // echo strlen($name);
    // echo strtoupper($name);
    // echo strtolower($name);
    echo str_replace('m','w',$name);

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