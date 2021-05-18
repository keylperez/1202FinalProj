<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
</head>
<body class="loginPage">
    <div class="loginPos">
        <form action="thePhp.php" method="post" class="loginContainer">
            <div class="login">
                <h2>Login</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>Username: </label>
                <input type="text" name="username" placeholder="Username"><br>
                <label>Password: </label>
                <input type="password" name="password" placeholder="Password"><br>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>

