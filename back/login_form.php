<?php
session_start();
?>
<?php
include "../includes_back/header.php";
?>
        <form action="login_form_handler.php" method="post" class='login_form'>
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="userpassword">
            </div>
            <div>
                <input type="submit" value="Log in">
                <a href="index.php"><button>Back</button></a>
            </div>

        </form>

        <?php
include "../includes_back/footer.php";
?>