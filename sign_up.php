<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body class="loginPage">
    <div class="loginPos">
        <form action="src/php/signup_action.php" method="post" class="loginContainer">
            <div class="login gridContainer">
                <h2>Login</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['created'])) { ?>
                    <p class="successText"><?php echo $_GET['created']; ?></p>
                <?php } ?>
                <label>Name: </label>
                <div class="loginInputs gridContainer">
                    <svg class="icon icon-tie">
                        <use xlink:href="./src/sprite.svg#icon-user-tie"></use>
                    </svg>
                    <input class="loginInputs" type="text" name="name" placeholder="Name">
                </div>
                <label style="margin-top: 10px;">Username: </label>
                <div class="loginInputs gridContainer">
                    <svg class="icon icon-user">
                        <use xlink:href="./src/sprite.svg#icon-user"></use>
                    </svg>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <label style="margin-top: 10px;">Password: </label>
                <div class="loginInputs gridContainer">
                    <svg class="icon icon-key">
                        <use xlink:href="./src/sprite.svg#icon-key"></use>
                    </svg>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <label>Confirm Password: </label>
                <div class="loginInputs gridContainer">
                    <svg class="icon icon-lock">
                        <use xlink:href="./src/sprite.svg#icon-lock"></use>
                    </svg>
                    <input class="loginInputs" type="password" name="cPassword" placeholder="Password">
                </div>
                <button type="submit">Sign Up</button>
                <div>
                    <p>Already have an Account?<a href="index.php"> Sign in here</a></p>
                </div>
            </div>
        </form>
    </div>
    <?php include("./src/php/layouts/footer.php"); ?>
</body>

</html>