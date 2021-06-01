<nav class="gridContainer">
    <img src="./src/img/icons/logo.png" alt="logo" class="logo">
    <div class="navUserIcon gridContainer">
        <label for="profileLabel">
            <input type="checkbox" id="profileLabel">
            <img class="user_icon" src="src/img/icons/user_kris.gif" alt="icon">
            <div class="dropDown">
                <a href="" class="dropDown-items gridContainer">
                    <svg class="icon icon-user">
                        <use xlink:href="./src/sprite.svg#icon-user"></use>
                    </svg><span><?php echo $_SESSION['username']; ?></span></a>
                <a href="./settings.php" class="dropDown-items gridContainer">
                    <svg class="icon icon-settings">
                        <use xlink:href="./src/sprite.svg#icon-settings"></use>
                    </svg><span>Settings</span></a>
                <form action="src/php/actions/signout_action.php" class="dropDown-items gridContainer">
                    <svg class="icon icon-log-out">
                        <use xlink:href="./src/sprite.svg#icon-log-out"></use>
                    </svg><button>Sign out</button>
                </form>
                <!-- <a href="" class="pdropDown"></a>
                        <a href="" class="pdropDown"></a>
                        <a href="" class="pdropDown"></a> -->
            </div>
        </label>

    </div>

</nav>