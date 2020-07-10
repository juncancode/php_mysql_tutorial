<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// classes
class User {

    private $email;
    private $name;

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

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        if(is_string($name) && strlen($name) > 1){
            $this->name = $name;
            return "name has been updated to $name";
        } else {
            return 'not a valid name';
        }
    }
}

// $userOne = new User();

// $userOne -> login();
// echo $userOne -> email;

$userTwo = new User('yoshi','yoshi@nintendo.com');

// echo $userTwo -> getName();
// echo $userTwo -> setName(50);
echo $userTwo -> setName('Jun');
echo $userTwo -> getName();

?>

