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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../../script/carousel.js"></script>
    <script src="../../script/hamburger_menu.js"></script>
    <script src="../../script/typewriter_effect.js"></script>
    <script>
  AOS.init();
</script>
    </body>
</html>


<!-- essayer scrollreveal.js et wow.js pour faire apparaître au scroll -->