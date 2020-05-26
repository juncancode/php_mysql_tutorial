<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // include('ninjas.php');
    // require('ninjas.php');

    include'ninjas.php';
    require'ninjas.php';

    echo 'end of php';

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials | Include & Require</title>
</head>
<body>

    <?php include('content.php'); ?>
    <?php include('content.php'); ?>
    <?php include('content.php'); ?>

</body>
</html>