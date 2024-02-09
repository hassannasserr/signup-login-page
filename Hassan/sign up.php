<?php
require_once'includes/config_session.inc.php';
require_once'includes/signup_view.inc.php';
require_once'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup & Login</title>
    <style>
        body {
            background-color: #f0f0f0; /* Set desired background color */
            font-family: Arial, sans-serif;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h3 {
            margin-bottom: 10px;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 300px; /* Adjust form width as needed */
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px); /* Adjust input width to account for padding */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            width: calc(100% - 22px); /* Adjust button width to account for padding */
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        button.login {
            background-color: black;
            color: white;
        }
        button.signup {
            background-color: black;
            color: white;
        }
        button.logout {
            background-color: green;
            color: white;
        }
        button:hover {
            opacity: 0.8;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
<h3>
    <?php
    output_username();
    ?>
</h3>
<?php if(!isset($_SESSION["user_id"])){ ?>
    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post"> 
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button class="login">Login</button>
    </form>
<?php } ?>

<?php
check_login_errors();
?>

<h3>Signup</h3>
<form action="includes/signup.inc.php" method="post">
    <?php
    signup_input();
    ?>
    <button class="signup">Signup</button>
</form>
<?php
check_signup_errors();
?>

<h3>Logout</h3>
<form action="includes/logout.inc.php" method="post"> 
    <button class="logout">Logout</button>
</form>
</body>
</html>
