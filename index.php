<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // connect to database
    $conn = mysqli_connect('localhost','shaun','1234','ninja_pizza');

    // check connection
    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }

    // write query for all pizzas
    $sql = 'SELECT title, ingredients, id FROM pizzas';

    // make query & get result
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // free result from memory
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

    print_r($pizzas);
?>
 
<!DOCTYPE html>
<html lang="en">

    <?php include('template/header.php')?>

    <?php include('template/footer.php')?>


</html>