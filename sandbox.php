<?php 

 // ternary operators
 $score = 20;
 
//  if($socre > 40){
//      echo 'high score!';
//  } else {
//      echo 'low score :(';
//  }

// echo $score > 40 ? 'high score!' : 'low score :(';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
</head>
<body>
    <p><?php echo $score > 40 ? 'high score!' : 'low score :('; ?></p>
</body>
</html>