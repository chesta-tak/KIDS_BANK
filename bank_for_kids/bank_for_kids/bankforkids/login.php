<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
   <div class="container" id="container">
        <div class="background-image"></div>
        <div class="form-container sign-up">
            <form action="login1.php" method="post">
                <h1>Create Account</h1>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" class="password" placeholder="Confirm Password" required>
                <button type="submit" name="signup_submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="login1.php" method="post">
                <h1>Sign In</h1>
                <input type="email" name="login_email" placeholder="Email">
                <input type="password" name="login_password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="login_submit">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back !</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome, children</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    
<script src="./assets/js/login.js"></script>
</body>
</html>
