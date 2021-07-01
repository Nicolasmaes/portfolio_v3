<?php include "../../includes/header.php"; ?>

<div class="container_contact">

    <a href="https://www.instagram.com/nico.maes.run/" target="_blank"><img src="../../assets/icons/instagram.svg" alt=""></a>
    <a href="https://github.com/Nicolasmaes" target="_blank"><img src="../../assets/icons/github.svg" alt=""></a>
    <a href="https://www.linkedin.com/in/nicolas-ma%C3%ABs-6a1b571b0?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BkzPSgn6aQOOsCpjve4lHQQ%3D%3D" target="_blank"><img src="../../assets/icons/linkedin.svg" alt=""></a>
</div>
<form action="../../back/contact_handler.php" method='post'>
    <div>
        <label for="visitor_name">votre nom</label>
        <input id='visitor_name' type="text" name='visitor_name'>
    </div>
    <div>
        <label for="visitor_email">votre adresse e-mail</label>
        <input id='visitor_email' type="email" name='visitor_email'></div>
    <div>
        <label for="visitor_message">votre message</label>
        <textarea cols='50' rows='8' id='visitor_message' type="text" name='visitor_message'></textarea>
    </div>
    <div class="button">
        <input type="submit" id="submit" value="envoyer"></input>
        <!-- <input type="submit"> autre manière de créer un bouton -->
    </div>
</form>


<?php include "../../includes/footer.php"; ?>