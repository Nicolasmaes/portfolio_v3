<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>My first PHP form</title>
    </head>
    <body>
        <form action="register-form-handler.php" method="post"><!-- action définit l'URL où sont envoyées les données, l'attribut method définit la méthode php utilisée pour envoyer les données (get ou post)-->
            <fieldset>
                <legend>Formulaire</legend>
                <div>
                    <label for="user_name">Username</label>
                    <input id="user_name" name="user_name"></input>
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
        <script src="main.js"></script>
    </body>
</html>