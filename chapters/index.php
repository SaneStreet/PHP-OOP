<?php 

    class User {

        # properties
        public $username;
        protected $email;
        public $role = 'member';

        # methods
        // constructor of User
        public function __construct($username, $email){
            $this -> username = $username;
            $this -> email = $email;      
        }

        ## Magic Methods
        # for more magic methods: https://www.php.net/manual/en/language.oop5.magic.php
        // destruct
        public function __destruct(){
            echo "The user $this->username was removed <br/>";
        }
        // clone
        public function __clone() {
            $this->username = $this->username . '(cloned) <br/>';
        }

        // Add a friend method
        public function addFriend(){
            return "$this -> email added a new friend!";
        }

        // Send a message
        public function message(){
            return "$this->email sent a new message";
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
        public $role = 'admin';

        public function __construct($username, $email, $level) {
            $this -> level = $level;
            parent::__construct($username, $email);
        }

        // Send a message
        public function message(){
            return "Admin, $this->email , sent a new message";
        }
    }

    $userOne = new User('Arthur', 'arthur@vanderlinde.com');
    $userTwo = new User('Hosea', 'hosea@vanderlinde.com');
    $userThree = new AdminUser('Dutch', 'dutch@vanderlinde.com', 5);

    // unset($userOne);
    $userFour = clone $userOne;
    echo $userFour->username . '<br/>';

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