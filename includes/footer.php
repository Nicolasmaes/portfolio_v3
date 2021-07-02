    <footer>
        <a href="../pages/contact.php">contact</a>
        <a href="index.php"><img src="../../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <div>
            <a href="../../back/login_form.php">connexion</a>
            <?php 
            if (isset($_SESSION['username'])&&!empty($_SESSION['username'])) {?>
            <a href="../../back/disconnect.php">déconnexion</a>
            <?php
            }else{
            echo '';
            }
            ?>
            </div>
    </footer>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <script src="../../script/hamburger_menu.js"></script>
    <script src="../../script/typewriter_effect.js"></script>
    </body>
</html>