<?php 

    class User {

        # properties
        private $username;
        private $email;

        # methods
        // constructor of User
        public function __construct($username, $email){
            $this -> username = $username;
            $this -> email = $email;      
        }

        // Add a friend method
        public function addFriend(){
            
            return "$this->email added a new friend!";
        }

    }

    $userOne = new User('Arthur', 'arthur@vanderlinde.com');
    $userTwo = new User('Dutch', 'dutch@vanderlinde.com');

    // echo $userOne->addFriend();

    // echo $userOne -> email . '<br/>';
    // echo $userTwo -> email . '<br/>';

    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));

?>

<!DOCTYPE html>
<html>
    <head>
        <title>OOP PHP - Access Modifiers</title>
    </head>
    <body>
        
    </body>
</html>