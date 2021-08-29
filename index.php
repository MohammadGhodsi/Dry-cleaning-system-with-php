<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge , chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!----StyleSheet--->
        <link rel="stylesheet" href="./src/style/style.css">
</head>
<body>
    
    <section class=" container">
        <div class="login">
            <h1>Login to Laundry Shop</h1>
            <form method="POST" id="form-login">
            <p><input  type="text" id="username" value="" placeholder="Username" required></p>
            <p><input type="password" id="password" value="" placeholder="PassWord" required></p>
            <p class="remember_me">
            <label>
                <input type="checkbox" name="remember_me" id="remember_me">
                Remember me on this computer
            </label>
            </p>
            <p class="submit"><input type="submit" name="commit" value="Login"></p>
            </form>
        </div>

        <div class="login-help">
            <p>Forgot your password? <a href="index.php">Click here to reset it</a>.</p>
        </div>

    </section>

    <!-----Scripts-------->
    <script src="./src/script/Jquery.js"></script>
    <script src="./src/script/bootstrap.js"></script>
    <script src="./src/script/login.js"></script>


</body>
</html>