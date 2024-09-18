<?php
include('../config/config.php');

$title = "About";

include('../view/header.php');
?>

<div class="two-col-layout">
    <main class="main">
        <article class="article">
        <h1>Om kursen och webbplatsen</h1>
        <p>Här tänkte jag skriva lite om kursen.</p>
        <p>Kursen Webbteknologier, eller webtec, fokuserar på webbutveckling med teknikerna HTML, CSS, PHP och SQL för att skapa databasdrivna webbplatser. </p>
        <p>HTML och CSS lägger grunden för webbapplikationens struktur och design. PHP används för server-side skriptprogrammering, vilket gör webbplatsen mer dynamisk och möjliggör lagring av information i databaser. </p>
        <p>Kursen täcker hela processen för att bygga en webbapplikation, utan krav på förkunskaper. </p>

        <p>Inledningsvis lär vi oss HTML5 och CSS3 för webbplatsens layout och stil. Därefter introduceras PHP, som ger verktyg för att bygga en strukturerad och dynamisk webbplats. </p>
        <p>Vi använder SQLite som filbaserad databas via PHP gränssnitt PHP Data Objekt. </p>
        <p>SQL används för att lära oss grundläggande frågespråk och databasmanipulation. </p>

        <p>Kursen erbjuder en grundlig introduktion till de tekniker som ofta används vid webbplatsutveckling.</p>
        <img src="img/Webbprog.png" width="300" class="me" alt="Lämplig bild till webbprog">
        </article>
    </main>

    <aside class="aside">
    <a href="https://github.com/dbwebb-se/webtec" target="_blank"> Github för kursrepo</a>
    </aside>
</div>

<?php include('../view/footer.php') ?>
