<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('NAME','Yoshi');

 //$name = "Yoshi";
 $age = 34;

 //$name = "Jun";
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>

    <h1>User Profile Page</h1>

    <div><?php echo NAME; ?></div>
    <div><?php echo $age?></div>
    
</body>
</html>