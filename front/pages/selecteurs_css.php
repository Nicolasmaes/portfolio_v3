<?php include "../../includes/header.php"; ?>
<div class="article">

    <h1>Les sélecteurs CSS creusées de fond en comble</h1>
    <p class='date'>avril 2021</p>
    <br>
    <div class="article__group">
                <p>
Aujourd’hui nous allons rentrer dans le dur du CSS, apprendre à en simplifier sa lecture et à optimiser son écriture.
Une fois notre page HTML rédigée, nous avons besoin de lui donner forme avec des styles CSS propres à chaque élément.
</p>

</div>

<div class="article__group">
    <h2>Voyons comment « parler » au CSS pour lui expliquer quel élément HTML il doit modifier et dans quelles circonstances.</h2>

    <p>

<kbd>/* Ceci est un commentaire en CSS */</kbd> <br>
Il ne sera pas interprété par le navigateur, très utile pour indiquer des informations sur un code destiné à d’autres développeurs.
<br><br>
<kbd>*{</kbd><br> cible toutes la balises de la page HTML.
    <br><br>
    <kbd>body {</kbd> <br>cible tout le body de la page, très utile si on souhaite centrer tout le contenu d’une page, par exemple.
    <br><br>
    <kbd>.class {</kbd><br> cible tous les éléments a qui nous avons donné la class ="classe".
    <br><br>
<kbd>#id {</kbd> <br>cible une balise spécifique, a qui nous avons donné id="id".
    <br><br>
<kbd>h1, p {</kbd><br> cible toutes les balises <kbd>&lth1&gt</kbd> et toutes les balises <kbd>&ltp&gt</kbd> de la page.
    <br><br>
<kbd>.class p {</kbd><br> cible toutes les balises <kbd>&ltp&gt</kbd> situées dans une <kbd>&ltdiv class="class"&gt</kbd>.<br><br>

<kbd>h2 + p {</kbd><br> cible uniquement la première balise <kbd>&ltp&gt </kbd>située après <kbd>&lth2></kbd>.
    <br><br>
<kbd>a[class] {</kbd><br> cible toutes les balises <kbd>&lta&gt</kbd> qui possèdent une classe.
    <br><br>
<kbd>a[class="exemple"] {</kbd><br> cible toutes les balises <kbd>&lta&gt</kbd> qui possèdent class="exemple".
    <br><br>
<kbd>a[href*="ici"] {</kbd><br> cible toutes les balises <kbd>&lta&gt</kbd> dont le lien contient le mot "ici".
    <br><br>
<kbd>img[class^=candy] {</kbd><br> cible toutes les images dont la classe commence par le mot "candy".
    <br><br>
<kbd>div[class~="logo"] { </kbd><br>cible toutes les div dont la classe contient le mot "logo".
    <br><br>
<kbd>a[href$=.org] {</kbd> <br>cible toutes les balises<kbd>&lta&gt </kbd>dont le lient se termine par ".org".
    </p>
            </div>
            <br><br>
            <div class="article__group">
                <h2>Il convient également de comprendre l’ordre de priorités des styles.</h2>
                <br><br>
                <p>
Si vous donnez un fond vert à toute une div qui contient plusieurs paragraphes, et un fond rouge à l’un de ces paragraphes, ce dernier sera en effet rouge, car il a la priorité sur la div principale, mais les autres paragraphes seront verts. Explications :
<br><br>
Les balises enfants qui n’ont aucun style héritent des propriétés CSS des balises parents. En revanche, plus vous serez spécifique en ciblant un élément, plus le style de cet élément aura la priorité sur le style de ses parents.
</p><br>
Le sélecteur étoile <kbd>( * )</kbd> a une priorité de 0. <br><br>
Une règle avec un sélecteur sur un type d’élément<kbd> &ltp&gt</kbd> ou des pseudo-éléments <kbd>( :: )</kbd> a une priorité de 1.  <br><br>
Une règle avec un sélecteur sur une classe <kbd>( . )</kbd> ou des pseudo-class <kbd>( : )</kbd> a une priorité de 10.  <br><br>
Une règle avec un sélecteur sur un identifiant <kbd>( # )</kbd> a une priorité de 100.  
Une règle écrite dans l’attribut style d’une balise HTML a une priorité de 1000.    
Une règle avec la mention !important a une priorité de 10000.    
<br><br>
Pour adopter les bonnes pratiques du web, il convient d’éviter au maximum d’utiliser la mention !important dans le CSS qui prend la priorité sur tout autre style donné à un parent. On peut vite se retrouver perdu si les mentions !important fleurissent sur la feuille de style.
<br><br>
Il est aussi très déconseillé d’écrire le style CSS directement dans le HTML, car là aussi notre code n’en sera que plus difficilement maintenable à l’avenir.
<br><br>
Et en règle générale, il sera plus confortable d’utiliser des class plus que des id, car lors de légers conflits de style, il sera facile de contourner une règle en utilisant un id de temps en temps pour devenir d’un seul coup plus précis.
<br><br>
Ce sont les navigateurs qui appliquent les règles CSS que nous leur dictons et ils le font dans l’ordre d’affichage. Ce qui signifie qu’en cas d’égalité dans les priorités, c’est la déclaration écrite en dernière qui l’emporte.
<br><br>
<kbd>:nth-child</kbd>
C’est une fonction qui permet d’appeler un élément enfant selon sa position dans la div.
<br><br>

<kbd>&ltsection class="grid"></kbd><br>
<kbd>&ltarticle class="module">One&lt/article></kbd><br>
<kbd>&ltarticle class="module">Two&lt/article></kbd><br>
<kbd>&ltarticle class="module">Three&lt/article></kbd><br>
<kbd>&ltarticle class="module">Four&lt/article></kbd><br>
<kbd>&ltarticle class="module">Five&lt/article></kbd><br>
<kbd>&lt/section></kbd><br><br>


Dans ce cas, nous pouvons cibler uniquement le 4ème article en écrivant 
<kbd>.module:nth-child(4) {</kbd><br><br>

    <kbd>.module:nth-child(even) {</kbd> ciblera toutes balises avec une class= »module » qui ont un rang pair, ici nous ciblerons donc le 2ème et 4ème article.
        <br><br>
        <kbd>.module:nth-child(odd) {</kbd> ciblera toutes balises avec une class= »module » qui ont un rang impair, ici nous ciblerons donc le 1er, le 3ème et le 5ème article.
<br><br>
<div class="article__group"><h2>Sources</h2></div>
<a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Selectors" target="_blank">developers.mozilla.org</a><br>
<a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3" target="_blank">Open Classrooms</a>
        </div>

<?php include "../../includes/footer.php"; ?>