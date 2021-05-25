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
                <input class="loginInputs" type="text" name="name" placeholder="Name">
                <label>Username: </label>
                <input class="loginInputs" type="text" name="username" placeholder="Username">
                <label>Password: </label>
                <input class="loginInputs" type="password" name="password" placeholder="Password">
                <label>Confirm Password: </label>
                <input class="loginInputs" type="password" name="cPassword" placeholder="Password">
                <button type="submit">Sign Up</button>
                <div>
                    <p>Already have an Account?<a href="index.php"> Sign in here</a></p>
                </div>
            </div>
        </form>
    </div>
    <footer class="footer gridContainer">
        <div class="socialMedia">
            <a href="https://www.facebook.com/THEkeylperez/" class="link" target="_blank" rel="nonopener noreferrer">
                <svg class="icon icon-facebook">
                    <use xlink:href="./src/sprite.svg#icon-facebook-official"></use>
                </svg>
            </a>
            <a href="https://www.instagram.com/keyl_perez/" class="link" target="_blank" rel="nonopener noreferrer">
                <svg class="icon icon-instagram">
                    <use xlink:href="./src/sprite.svg#icon-instagram"></use>
                </svg>
            </a>
            <a href="https://twitter.com/keyl_perez" class="link" target="_blank" rel="nonopener noreferrer">
                <svg class="icon icon-twitter">
                    <use xlink:href="./src/sprite.svg#icon-twitter"></use>
                </svg>
            </a>
            <a href="https://discord.gg/6EJYv5Y" class="link" target="_blank" rel="nonopener noreferrer">
                <svg class="icon icon-discord">
                    <use xlink:href="./src/sprite.svg#icon-discord"></use>
                </svg>
            </a>
            <a href="https://github.com/keylperez" class="link" target="_blank" rel="nonopener noreferrer">
                <svg class="icon icon-github">
                    <use xlink:href="./src/sprite.svg#icon-github"></use>
                </svg>
            </a>
        </div>
        <div class="details">
            <a href="" class="footerLink"><span>About Us </span></a>
            <a href="" class="footerLink"><span>Support Us </span></a>
            <a href="" class="footerLink"><span>Contact Us </span> </a>
        </div>
    </footer>
</body>

</html>