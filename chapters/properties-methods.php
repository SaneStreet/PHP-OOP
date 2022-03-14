<?php 

    class User {

        // properties
        public $username = 'Michael';
        public $email = 'mymail@michael.com';

        // methods
        public function addFriend(){
            
            return "$this->username added a new friend!";
        }

    }

    $userOne = new User();
    $userTwo = new User();

    echo $userOne -> username . '<br/>';
    echo $userOne -> email . '<br/>';
    echo $userOne -> addFriend() . '<br/>';

    $userTwo -> username = 'Arthur';
    $userTwo -> email = 'arthur@vanderlinde.com';

    echo $userTwo -> username . '<br/>';
    echo $userTwo -> email . '<br/>';
    echo $userTwo -> addFriend() . '<br/>';

    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));

?>

<!DOCTYPE html>
<html>
    <head>
        <title>OOP PHP - Properties & Methods</title>
    </head>
    <body>
        
    </body>
</html>