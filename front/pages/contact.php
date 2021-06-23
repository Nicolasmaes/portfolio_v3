<?php include "../includes/header.php"; ?>

<div class="container_contact">

    <a href="https://www.instagram.com/nico.maes.run/" target="_blank"><img src="../../assets/icons/instagram.svg" alt=""></a>
    <a href="https://www.linkedin.com/in/nicolas-ma%C3%ABs-6a1b571b0?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BkzPSgn6aQOOsCpjve4lHQQ%3D%3D" target="_blank"><img src="../../assets/icons/linkedin.svg" alt=""></a>
</div>
<form action="">
    <div>
        <label for="visitor_name">Votre nom</label>
        <input id='visitor_name' type="text">
    </div>
    <div>
        <label for="visitor_email">Votre adresse e-mail</label>
        <input id='visitor_email' type="text"></div>
    <div>
        <label for="visitor_message">Votre message</label>
        <textarea cols='50' rows='10' id='visitor_message' type="text"></textarea>
    </div>
    <div class="button">
        <input type="submit" id="submit" value="Send"></input>
        <!-- <input type="submit"> autre manière de créer un bouton -->
    </div>
</form>


<?php include "../includes/footer.php"; ?>