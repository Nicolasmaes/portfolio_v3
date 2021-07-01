<?php include "../../includes/header.php"; ?>
<div class="article">

<h1>Les sous-titres</h1>
    <p class='date'>mai 2021</p>
    <br>
        <div class="article__group">
            <p>
            Historiquement au cinéma, tout commence avec les films muets.
            Les situations et dialogues étaient retranscrits complètement à part sur des fonds noirs, en quittant la scène des yeux.
            <br><br>
            <a href="https://www.youtube.com/watch?v=DJcTeHsZ4m4" target="_blank">extrait  de film muet</a>
            <br><br>
            On peut imaginer que ces films étaient et sont toujours agréables à regarder par des déficients auditifs.
            <br><br>
            Les sous-titres (ou closed-caption en anglais), sont les textes qui s'affichent durant une vidéo, pour y décrire l'audio, que ce soit les dialogues, les musiques, ou les sons ambiants.
            <br><br>
            La transcription designe le fait de transformer le son en texte.
            <br><br>
            Idéalement un sous-titre doit être visible au moins 1 seconde, comporter 2 lignes maximum et contenir 40 caractères par lignes maximum.
            </p>
        </div>

<div class="article__group">
    Pour sous-titrer une vidéo nous-mêmes, il existe plusieurs formats de fichiers dont c'est le rôle. Les plus populaires sont les formats srt et vtt.
    <br><br>
    Ces fichier sont écrits de la manière suivante :
    <br><br>
    <kbd>WEBVTT - Ce fichier possède des répliques.</kbd>
    <br><br>
    <kbd>14</kbd><br>
    <kbd>00:01:14.815 --> 00:01:18.114</kbd><br>
    <kbd>Quoi?</kbd><br><br>
    <kbd>15</kbd><br>
    <kbd>00:01:18.171 --> 00:01:20.991</kbd><br>
    <kbd>C'est le pays des grandes chauves-souris.</kbd><br><br>
    <kbd>16</kbd><br>
    <kbd>00:01:21.058 --> 00:01:23.868</kbd><br>
    <kbd>[ Cris perçant de chauves-souris ]</kbd><br>
    <kbd>Elles ne veulent pas aller dans vos cheveux. Elles attrapent les insectes.</kbd><br><br>
    Chaque sous-titre contient le timecode durant lequel il doit apparaître et le texte à afficher durant cette courte période.
    Il est possible d'y inclure des commentaires pour faciliter le travail des intégrateurs web.
    <br><br>
    Ces fichiers s'intègrent de cette manière dans le fichier html d'un site web : 
    <br><br>
    <kbd>&ltvideo controls autoplay src="video.webm"&gt</kbd><br>
    <kbd>&lttrack default src="track.vtt"&gt</kbd><br>
    <kbd>&lt/video&gt</kbd><br><br>
    <p>
    Bien sûr, les navigateurs savent afficher les sous-titres.  
    Mais il est toujours possible pour les développeurs de personnaliser ces sous-titres dans le fichier CSS en ciblant les phrases précisément.  
    <br><br>
    <kbd>::cue(#\31) {color: yellow;}</kbd>
    <br><br>
    Cette ligne de CSS donnera la couleur jaune au texte numéro 31 dans le fichier.vtt.
    <br><br>
    De nos jours il est encore plus facile de sous-itrer des vidéos en passant par Youtube.
    En effet, Youtube propose de sous-titrer directement les vidéos sur sa plateforme, en y ajoutant les sous-titres avec les timecodes.
    <br><br>
    Bien qu'aujourd'hui les ordinateurs savent sous-titrer des vidéos. Il reste tout de même plus commode de laisser ce trabail à un humain qui saura exactement décrire les sons ambiants et les dialogues sans forcément faire du mot à mot.
    <br><br>
    Il est aussi important de faire traduire les dialogues d'une langue à l'autre par un humain, car les expressions populaires (ainsi que les blagues) de chaque langue ne se traduisent pas mot à mot.
    <br><br>
    Lors la transcription d'informations non-verbales, une situation peut donner lieu à des sous-titres plutôt cocasses, je vous laisse juger : 
    <br><br>
    <kbd>makes "I don't know" sound</kbd>
    <br><br>
    <kbd>screaming like a sissy</kbd>
    <br><br>
    interview d'un nageur : 
    <br>
    <kbd>It's been my dream since I was a little buoy.</kbd>
    <br><br>
    le robot dans star wars : 
    <kbd>sad beep</kbd>
    <br><br>
    lors d'une situation tendue : 
    <kbd>intensity intensifies</kbd>
    <br><br>
    une journaliste à la télévision : 
    <kbd>blah blah blah</kbd>
    <br><br>
    un personnage vexé : 
    <kbd>screams internally</kbd>
    <br><br>

<div class="article__group"><h2>Sources</h2></div>
    <a href="https://en.wikipedia.org/wiki/Closed_captioning" target="_blank">Closed caption</a>
    <a href="https://www.bloghoptoys.fr/masques-un-picto-pour-les-malentendants" target="_blank">Masques pour les malentendants</a>
    <a href="https://www.francetvinfo.fr/internet/telephonie/avec-l-application-rogervoice-les-personnes-sourdes-et-malentendantes-peuvent-appeler-avec-leur-telephone_2975031.html" target="_blank">RogerVoice</a>
    <a href="http://babylon-design.com/surdite-accessibilite-sourds-sur-internet/" target="_blank">BabylonDesign</a>
    <a href="https://www.amberscript.com/fr/accessibilite-numerique" target="_blank">AmberScript</a>
    <a href="" target="_blank"></a>
    <a href="" target="_blank"></a>
</div>

<?php include "../../includes/footer.php"; ?>