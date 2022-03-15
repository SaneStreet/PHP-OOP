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

        ## getters
        public function getEmail(){
            return $this->email;
        }

        public function getUsername() {
            return $this->username;
        }
        ## setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1){
                $this->email = $email;
            }
        }


    }

    $userOne = new User('Arthur', 'arthur@vanderlinde.com');
    $userTwo = new User('Dutch', 'dutch@vanderlinde.com');

    $userOne->setEmail('arthur.morgan@vanderlinde.com');

    // $userOne->email = 3;

    // echo $userOne -> email . '<br/>';
    // echo $userTwo -> email . '<br/>';

    // echo $userOne->addFriend();
    echo $userOne->getEmail() . '<br>';
    echo $userTwo->getEmail();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>OOP PHP - Index</title>
    </head>
    <body>
        <h1>Index File</h1>
        <p>Where the magic might happen</p>
    </body>
</html>