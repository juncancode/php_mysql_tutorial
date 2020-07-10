<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// classes
class User {

    public $email;
    public $name;

    public function __construct($name, $email){
        // $this -> email = 'keyos27@gmail.com';
        // $this -> name = 'Jun';
        $this -> email = $email;
        $this -> name = $name;
    }

    public function login(){
        // echo 'the user logged in';
        echo $this -> name . ' logged in';
    }
}

// $userOne = new User();

// $userOne -> login();
// echo $userOne -> email;

$userTwo = new User('yoshi','yoshi@nintendo.com');
// echo $userTwo -> name;
// echo $userTwo -> email;
$userTwo -> login();
?>

