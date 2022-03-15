<?php 

    class User {

        # properties
        public $username;
        private $email;

        # methods
        // constructor of User
        public function __construct($username, $email){
            $this -> username = $username;
            $this -> email = $email;      
        }

        // Add a friend method
        public function addFriend(){
            
            return "$this -> email added a new friend!";
        }

        ## getters
        public function getEmail(){
            return $this -> email;
        }

        ## setters
        public function setEmail($email) {
            if(strpos($email, '@') > -1){
                $this -> email = $email;
            }
        }


    }

    class AdminUser extends User {
        public $level;

        public function __construct($username, $email, $level)
        {
            $this -> level = $level;
            parent::__construct($username, $email);
        }
    }

    $userOne = new User('Arthur', 'arthur@vanderlinde.com');
    $userTwo = new User('Hosea', 'hosea@vanderlinde.com');
    $userThree = new AdminUser('Dutch', 'dutch@vanderlinde.com', 5);

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