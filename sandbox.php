<?php 


// superglobals

// $_GET['name], $_POST['name]

// echo $_SERVER['SERVER_NAME'] . '<br/>';
// echo $_SERVER['REQUEST_METHOD'] . '<br/>';
// echo $_SERVER['SCRIPT_FILENAME'] . '<br/>';
// echo $_SERVER['PHP_SELF'] . '<br/>';

// $_SESSION, $_COOKIE

// sessions
if(isset($_POST['submit'])) {

    // Cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="name">
        <select name="gender" id="">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>