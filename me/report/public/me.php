<?php
include('../config/config.php');

$title = "ME";

include('../view/header.php');
?>
<style>
    main{
        font-family: monospace;
    }
</style>
<main class="main">
    <article class="article">
        <header>
            <h1>Om Mig Själv</h1>
        </header>
    <p>Mitt namn är Lucas Huynh. Född och uppvuxen i Västervik som ligger runt två timmar norr från Kalmar.</p>
    <p>Jag började studera här på BTH under hösten 23 på programmet Software Engineering, men jag kände att programmet inte var för mig. Därför valde jag att byta till webbprogrammering.</p>
    <p>Innan jag började plugga så jobbade jag i ungefär två på ett företag som heter SAAB Barracuda som ligger i Gamleby.</p>
    <p>På fritiden brukar jag ofta spela datorspel men även piano till viss del.</p>

    <figure class="figure center">
    <img src="img/jag.jpg" width="300" alt="Bild på mig">
    <figcaption>Lucas Huynh</figcaption>
    </figure>

    <footer class="byline">
            Under construction.
    </footer>

    </article>
</main>

<?php
include('../view/footer.php')
?>
</html> 

