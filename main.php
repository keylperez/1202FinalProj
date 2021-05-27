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
    <title>Scott's Tots</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/style.css">
    <script defer src="./src/js/script.js"></script>
</head>

<body class="mainBody gridContainer">
    <header class="gridContainer">
        <nav class="gridContainer">
            <img src="" alt="logo" class="logo">
            <div class="navUserIcon gridContainer">
                <label for="profileLabel">
                    <input type="checkbox" id="profileLabel">
                    <img class="user_icon" src="src/img/icons/user_kris.gif" alt="icon">
                    <div class="dropDown">
                        <a href="" class="pdropDown">
                            <svg class="icon icon-user">
                                <use xlink:href="./src/sprite.svg#icon-user"></use>
                            </svg><span>Account</span></a>
                        <a href="" class="pdropDown">Settings</a>
                        <!-- <a href="" class="pdropDown"></a>
                        <a href="" class="pdropDown"></a>
                        <a href="" class="pdropDown"></a> -->
                    </div>
                </label>
                <form action="src/php/signout_action.php" class="signOutBT"><button>Sign out</button></form>
            </div>

        </nav>
        <?php include("./src/php/layouts/sideBar.php"); ?>
        <div class="inventoryBarContainer">
            <div class="inventoryBar inventoryBar--1 gridContainer activeTab">
                <?php include("./src/php/games/warframe.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--2 gridContainer">
                <?php include("./src/php/games/honkaiImpact.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--3 gridContainer">
                <?php include("./src/php/games/dota.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--4 gridContainer">
                <?php include("./src/php/games/csgo.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--5 gridContainer">
                <?php include("./src/php/games/genshinImpact.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--6 gridContainer">
                <?php include("./src/php/games/rocketLeague.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--7 gridContainer">
                <?php include("./src/php/games/valorant.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--8 gridContainer">
                <?php include("./src/php/games/apex.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--9 gridContainer">
                <?php include("./src/php/games/tf2.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--10 gridContainer">
                <?php include("./src/php/games/pubg.php"); ?>
            </div>
        </div>
    </header>
</body>

</html>