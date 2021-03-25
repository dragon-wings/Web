<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登陆</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="container">
        <img class="back" src="../img/login.jpg">
    </div>
    <div class="cover">
        <input type="checkbox" id="check-signin">
        <label for="check-signin">
            <div id="btn-signin" onclick="document.getElementById('btn-login').style.display = 'none'">Register</div>
            <div id="cancel-signin" onclick="document.getElementById('btn-login').style.display = 'block'">cancel</div>
        </label>
        <input type="checkbox" id="check-login">
        <label for="check-login">
            <div id="btn-login" onclick="document.getElementById('btn-signin').style.display = 'none'">Sign In</div>
            <div id="cancel-login" onclick="document.getElementById('btn-signin').style.display = 'block'">cancel</div>
        </label>

        <form class="box-signin" action="../php/register.php" method="POST">
            <h1>Register an account</h1>
            <input type="text" name="username" placeholder="username" require>
            <input type="password" name="password" placeholder="password" require>
            <input type="submit" name="" value="Sign in">
        </form>

        <form class="box-login" action="../php/login.php" method="POST">
            <h1>Welcome</h1>
            <input type="text" name="username" placeholder="username" require>
            <input type="password" name="password" placeholder="password" require>
            <input type="submit" name="" value="Login">
        </form>
    </div>
    
    
    <script src="../js/login.js"></script>
</body>
</html>