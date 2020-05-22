<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);
    //functions
    function sayHello($name = 'Jun',$time = 'morning'){
        echo "Good $time $name";
    } 

    // sayHello('mario');
    sayHello('yoshi','night');

    function formatProduct($product){
        //echo "{$product['name']} costs {$product['price']} to buy <br />";
        return "{$product['name']} costs {$product['price']} to buy <br />";
    };

    // $formatted = formatProduct(['name'=> 'gold star','price'=> 20]);
    // echo $formatted;
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials | Conditional Statements</title>
</head>
<body>


</body>
</html>