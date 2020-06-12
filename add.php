<?php 

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    // Visible
    // if(isset($_GET['submit'])){
    //     echo $_GET['email'];
    //     echo $_GET['title'];
    //     echo $_GET['ingredients'];
    // }

    // Invisible
    if(isset($_POST['submit'])){
        
        // check email
        if(empty($_POST['email'])){
            echo 'An email is required <br />';
        } else {
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
               echo 'e-mail must be a valid email address';
            }
        }

        // check title
        if(empty($_POST['title'])){
            echo 'A title is required <br />';
        } else {
           $title = $_POST['title'];
           if(!preg_match('/^[a-zA-Z\s]+$/',$title)) {
            echo 'Title must be letters and spaces only';
           }
        }

        // check email
        if(empty($_POST['ingredients'])){
            echo 'An least one ingredient is required <br />';
        } else {
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$ingredients)) {
             echo 'Ingredients must be a comma separated list';
            }
        }
    } // end of POST check

?>
 
<!DOCTYPE html>
<html lang="en">

    <?php include('template/header.php')?>

    <section class="container grey-text">
        <h4 class="center">Add a Pizza</h4>
        <form action="add.php" method="POST" class="white">
            <label for="email">Your Email:</label>
            <input type="text" name="email">
            <label for="title">Pizza Title:</label>
            <input type="text" name="title">
            <label for="ingredients">Ingredients (comma separated):</label>
            <input type="text" name="ingredients">
            <div class="center">
                <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
            </div>
        </form>
    </section>

    <?php include('template/footer.php')?>


</html>