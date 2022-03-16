<?php 
    require('user_validator.php');

    if(isset($_POST['submit'])){
        // validate fields
    }

?>

<html lang="en">
    <head>
        <title>PHP OOP - Validation (Part 1)</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <div class="new-user">
            <h2>Create new user</h2>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

                <label>Username:</label>
                <input type="text" name="username">

                <label>Email:</label>
                <input type="text" name="email">

                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </body>
</html>