<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
</head>

<body class="bodySettings gridContainer">
    <header class="headerSettings gridContainer">
        <div class="sideBarSettings gridContainer">
            <div class="settingsUserIcon gridContainer">
                <img class="user_icon" src="./src/img/icons/user_kris.gif" alt="icon">
                <span><?php echo $_SESSION['username']; ?></span>
            </div>
            <div class="basicAcc"><span>Account</span></div>
    </header>
    <?php include("./src/php/layouts/footer.php"); ?>
</body>

</html>