<footer>
        <a href="../pages/contact.php">contact</a>
        <a href="index.php"><img src="../../assets/icons/icon_nm.svg" alt="logo du site"></a>
        <div>
            

            <?php 
            if (isset($_SESSION['username'])&&!empty($_SESSION['username'])) {
            echo '';?>
            
            <?php
            }else{ ?>
            <a href="../../back/login_form.php">log in</a>
            <?php
            }
            ?>

            <?php 
            if (isset($_SESSION['username'])&&!empty($_SESSION['username'])) {?>
            <a href="../../back/disconnect.php">log out</a>
            <?php
            }else{
            echo '';
            }
            ?>
            </div>
    </footer>
    <script src="https://unpkg.com/typewriter-effect@2.3.1/dist/core.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../script/hamburger_menu.js"></script>
    <script src="../../script/typewriter_effect.js"></script>
    <script>
  AOS.init();
</script>
    </body>
</html>


<!-- essayer scrollreveal.js et wow.js pour faire apparaître au scroll -->