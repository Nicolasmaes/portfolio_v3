<?php
include "../includes_back/header.php";
?>
        <form action="register-form-handler.php" method="post"><!-- action définit l'URL où sont envoyées les données, l'attribut method définit la méthode php utilisée pour envoyer les données (get ou post)-->
            <fieldset>
                <legend>Formulaire</legend>
                <div>
                    <label for="username">Username</label>
                    <input id="username" name="username"></input>
                </div>
                <div>
                    <label for="user_mail">E-mail</label>
                    <input type="user_mail" id='input_mail' name='user_mail'>
                </div>
                <div>
                    <label for="user_password">Password</label>
                    <input type="password" id='user_password' name='user_password'>
                </div>
                <div>
                    <label for="user_confirmation">Confirmation</label>
                    <input type="password" id='user_confirmation' name='user_confirmation'>
                </div>
                <div class="button">
                    <button type="reset">Reinitialize</button><br>
                    <input type="submit" id="submit" value="Send"></input>
                    <!-- <input type="submit"> autre manière de créer un bouton -->
                </div>
            </fieldset>
        </form>
<?php
include "../includes_back/footer.php";
?>