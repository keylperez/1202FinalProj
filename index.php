<?php
session_start();
if (isset($_SESSION["username"])) {
    header("Location: main.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body class="bodyLogin">
    <form action="src/php/actions/signin_action.php" method="post" class="loginContainer">
        <div class="login gridContainer">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label style="margin-top: 10px;">Username: </label>
            <div class="loginInputs gridContainer">
                <svg class="icon icon-user">
                    <use xlink:href="./src/sprite.svg#icon-user"></use>
                </svg>
                <input type="text" name="username" placeholder="Username" autocomplete="on" autocapitalize="off" autofocus required maxlength="10">
            </div>
            <label style="margin-top: 10px;">Password: </label>
            <div class="loginInputs gridContainer">
                <svg class="icon icon-key">
                    <use xlink:href="./src/sprite.svg#icon-key"></use>
                </svg>
                <input type="password" name="password" placeholder="Password" autocomplete="on" autocapitalize="off" required maxlength="20">
            </div>
            <button type="submit" style="margin-top: 10px;">Login</button>
            <div>
                <p>No Account? <a href="sign_up.php">Sign Up here</a></p>
            </div>
        </div>
    </form>
    <div class="spaceContainer"></div>
    <?php include("./src/php/layouts/footer.php"); ?>
</body>

</html>