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
            <div class="navUserIcon">
                <img class="user_icon" src="src/img/icons/user_kris.gif" alt="icon">
                <?php { ?>
                    <span class="name"><?php echo $_SESSION['username']; ?></span>
                <?php } ?>
                <form action="src/php/signout_action.php" class="signOutBT"><button>Sign out</button></form>
            </div>

        </nav>
        <div class="sideBar">
            <div class="gameLabelContainer">
                <input type="text" name="search" id="searchBar" placeholder="Search a game" autocomplete="off">
                <div class="gameLabel" style="margin-top: 30px;" data-tab="1"><img src="./src/img/icons/lotusIcon.png" alt="" class="gameIcon"><span>Warframe</span></div>
                <div class="gameLabel" data-tab="2"><img src="./src/img/icons/40701a966e808488630312a181ccc8067719016b76c991ab4a51f87c3ee5f1bf200.png" alt="" class="gameIcon"><span>Honkai Impact</span></div>
                <div class="gameLabel" data-tab="3"><img src="./src/img/icons/c1ecda477bc92b6ecfc533b64d4a0337.png" alt="" class="gameIcon"><span>Dota</span></div>
                <div class="gameLabel" data-tab="4"><img src="./src/img/icons/db7221672fc6b447f7af2b1f61b140ef.png" alt="" class="gameIcon"><span>Csgo</span></div>
                <div class="gameLabel" data-tab="5"><img src="./src/img/icons/genshin-impact-mobile-240x240.png" alt="" class="gameIcon"><span>Genshin Impact</span></div>
                <div class="gameLabel" data-tab="6"><img src="./src/img/icons/SpDNFegxVRzXyUta0BFMdNqyLVmXGVcKHhyVsqYjOfg.png" alt="" class="gameIcon"><span>Rocket League</span></div>
                <div class="gameLabel" data-tab="7"><img src="./src/img/icons/valorant-game-logo-icon-eps-10-gaming-streamer-vector-33193787.jpg" alt="" class="gameIcon"><span>Valorant</span></div>
                <div class="gameLabel" data-tab="8"><img src="./src/img/icons/apex.jpg" alt="" class="gameIcon"><span>Apex Legends</span></div>
                <div class="gameLabel" data-tab="9"><img src="./src/img/icons/tf2.png" alt="" class="gameIcon"><span>Team Fortress 2</span></div>
                <div class="gameLabel" data-tab="10"><img src="./src/img/icons/pubg.jpg" alt="" class="gameIcon"><span>PLAYERUNKOWN'S BATTLEGROUNDS</span></div>
            </div>
        </div>
        <div class="inventoryBarContainer">
            <div class="inventoryBar inventoryBar--1 gridContainer activeTab">
                <?php include("src/php/games/warframe.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--2 gridContainer">
                <?php include("./src/php/games/honkaiImpact.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--3 gridContainer">
                <div class="inventoryHeading"><img src="./src/img/icons/c1ecda477bc92b6ecfc533b64d4a0337.png" alt="" class="inventoryIcon">
                    <h1>Dota</h1>
                </div>
                <div class="inventoryItems gridContainer">
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                </div>
                <!--<?php include("./src/php/games/dota.php"); ?>-->
            </div>
            <div class="inventoryBar inventoryBar--4 gridContainer">
                <div class="inventoryHeading"><img src="./src/img/icons/db7221672fc6b447f7af2b1f61b140ef.png" alt="" class="inventoryIcon">
                    <h1>Counter Strike: Global Offensive</h1>
                </div>
                <div class="inventoryItems gridContainer">
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                </div>
                <!--<?php include("./src/php/games/csgo.php"); ?>-->
            </div>
            <div class="inventoryBar inventoryBar--5 gridContainer">
                <?php include("./src/php/games/genshinImpact.php"); ?>
            </div>
            <div class="inventoryBar inventoryBar--6 gridContainer">
                <div class="inventoryHeading"><img src="./src/img/icons/SpDNFegxVRzXyUta0BFMdNqyLVmXGVcKHhyVsqYjOfg.png" alt="" class="inventoryIcon">
                    <h1>Rocket League</h1>
                </div>
                <div class="inventoryItems gridContainer">
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                </div>
                <!--<?php include("./src/php/games/rocketLeague.php"); ?>-->
            </div>
            <div class="inventoryBar inventoryBar--7 gridContainer">
                <div class="inventoryHeading"><img src="./src/img/icons/valorant-game-logo-icon-eps-10-gaming-streamer-vector-33193787.jpg" alt="" class="inventoryIcon">
                    <h1>Valorant</h1>
                </div>
                <div class="inventoryItems gridContainer">
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                </div>
                <!--<?php include("./src/php/games/valorant.php"); ?>-->
            </div>
            <div class="inventoryBar inventoryBar--8 gridContainer">
                <div class="inventoryHeading"><img src="./src/img/icons/apex.jpg" alt="" class="inventoryIcon">
                    <h1>Apex Legends</h1>
                </div>
                <div class="inventoryItems gridContainer">
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                </div>
                <!--<?php include("./src/php/games/apex.php"); ?>-->
            </div>
            <div class="inventoryBar inventoryBar--9 gridContainer">
                <div class="inventoryHeading"><img src="./src/img/icons/tf2.png" alt="" class="inventoryIcon">
                    <h1>Team Fortress 2</h1>
                </div>
                <div class="inventoryItems gridContainer">
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                </div>
                <!--<?php include("./src/php/games/teamFortress2.php"); ?>-->
            </div>
            <div class="inventoryBar inventoryBar--10 gridContainer">
                <div class="inventoryHeading"><img src="./src/img/icons/pubg.jpg" alt="" class="inventoryIcon">
                    <h1>PLAYERUNKOWN'S BATTLEGROUNDS</h1>
                </div>
                <div class="inventoryItems gridContainer">
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                    <div class="itemContainer"><img src="./src/img/" alt="" class="itemImg"></div>
                </div>
                <!--<?php include("./src/php/games/pubg.php"); ?>-->
            </div>
        </div>
    </header>
</body>

</html>