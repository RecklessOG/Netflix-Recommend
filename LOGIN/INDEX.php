<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="STYLE.css">
</head>

<body>

    <?php
    // Detect if the URL contains ?form=register or ?form=login
    $formType = isset($_GET['form']) && $_GET['form'] == 'register' ? 'register' : 'login';
    ?>

    <div class="container" id="signup" style="display: <?= ($formType == 'register') ? 'block' : 'none' ?>;">
        <h1 class="form title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" id="fName" name="fName" placeholder="First Name" required>
                <label for="fName">First name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" id="lName" name="lName" placeholder="Last Name" required>
                <label for="lName">Last name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="signup-email" name="email" placeholder="Email" required
                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                <label for="signup-email">E-mail</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="signup-password" name="password" placeholder="Password" minlength="8"
                    required>
                <label for="signup-password">Password</label>
            </div>

            <input type="submit" class="btn" value="Sign Up" name="signUp">
        </form>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>

        <div class="links">
            <p>Already have an Account?</p>
            <button type="button" id="signInButton">Log In</button>
        </div>
    </div>

    <div class="container" id="login" style="display: <?= ($formType == 'login') ? 'block' : 'none' ?>;">
        <h1 class="form title">Login</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="login-email" name="email" placeholder="Email" required>
                <label for="login-email">E-mail</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="login-password" name="password" placeholder="Password" required>
                <label for="login-password">Password</label>
            </div>

            <p class="recover">
                <a href="#">Recover Password</a>
            </p>

            <input type="submit" class="btn" value="Log in" name="signIn">
        </form>

        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have an Account yet?</p>
            <button id="signUpButton">Sign up</button>
        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>