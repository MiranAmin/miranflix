<?php
    require_once("includes/config.php");
    require_once("includes/classes/Account.php");
     require_once("includes/classes/Constants.php");
    require_once("includes/classes/FormSanitizer.php");


    $account = new Account($con);//$con comes from config class. Connects to DB

    if(isset($_POST["submitButton"])) {


        $firstName = FormSanitizer::sanitizeString($_POST["firstName"]); 
        $lastName = FormSanitizer::sanitizeString($_POST["lastName"]);
        $username = FormSanitizer::sanitizeUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizePassword($_POST["password"]);
        $password2 = FormSanitizer::sanitizePassword($_POST["password2"]);

        $account->register($firstName,$lastName,$username,$email,$email2,$password,$password2);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miranflix Registration</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css">
</head>
<body>
    <div class="signInContainer">

        <div class="column">
          
             <div class="header">
               
                 <img src="assets/images/logo.png" title="logo" alt="Miranflix logo">
               
                <h3>Sign Up</h3>
               
                <span>To continue to Miranflix</span>

            </div>

            <form method="post" action="">
       
                <?php echo $account->getError(Constants::$firstNameError); ?>
                <input type="text" name="firstName" placeholder="First name" required>

                <?php echo $account->getError(Constants::$lastNameError); ?>
                <input type="text" name="lastName" placeholder="Last name" required>
                
                <?php echo $account->getError(Constants::$usernameError); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <input type="text" name="username" placeholder="Username" required>
                
                <?php echo $account->getError(Constants::$emailsDontMatch);?>
                <input type="email" name="email" placeholder="Email" required>

                <input type="email" name="email2" placeholder="Confirm email" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="password" name="password2" placeholder="Confirm password" required>
            
                <input type="submit" name="submitButton" value="Submit" required>
            </form>

            <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>

        </div>
        
    </div>
</body>
</html>