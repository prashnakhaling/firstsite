<?php
// include("connection.php");
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password1'];
    $passWord = $_POST['password2'];
    $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&*]).{8,16}$/";

    if ((strlen($username) < 8)) {
        echo "less than 8 characters.";
    }
    if (!(preg_match($pattern, $password))) {
        echo "incorrect pattern";
    }
    if ($password != $passWord) {
        echo "password didn't match.";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form </title>
    <link rel="stylesheet" href = "style.css">
</head>

<body>
    <!-- log in form for admin -->

    <div class="loginpage">
        <div class="innerpage">
            <div class="title">
                <h3>Sign In</h3>
            </div>
            <div>
                <form action="" method="post">
                    <input type="text" name="username" id="name" placeholder="Username" required><br>

                    <input type="password" name="password1" id="name" placeholder="Create Password" required><br>

                    <input type="password" name="password2" id="name" placeholder="Confirm Password" required><br>

                    <button type="submit" name="signup" class="signupbutton">Sign Up</button>

                </form>
            </div>

            <p class="account">Already have an account? </p>
            <a href="accountform.php" class="account2">Log in </a>

        </div>
    </div>

</body>

</html>