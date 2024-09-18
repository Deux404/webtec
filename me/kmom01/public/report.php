<?php
include('../config/config.php');

$title = "Report";

include('../view/header.php');
?>


<body>
    <main>
        <h1>Redovisning</h1>
        <ul>
            <li><a href="#kmom01">kmom01</a></li>
            <li><a href="#kmom02">kmom02</a></li>
        </ul>


        <h2 id="kmom01">kmom01</h2>
        <h3>Vilken utvecklingsmiljö använder du (operativsystem, texteditor, terminal, mm)?</h3>
        <p>Jag använder mac, windows och linux, som texteditor använder jag mig främst av VScode, som terminal har jag på mac iTerm2, windows så kör jag med powershell och på linux, ubuntu.</p>
        <h3>Gick det bra att installera labbmiljön eller var det något som krånglade?</h3>
        <p>Ja det gick bra att installera labbmiljön, då jag hade gjort det tidigare så var det inget problem.
        <h3>Är du bekant med terminalen och Unix-kommandon sedan tidigare?</h3>
        <p>Ja jag är relativt bekant med de mest använda Unix-kommandon.</p>
        <h3>Är du bekant med HTML, CSS och PHP sedan tidigare eller har du jobbat med liknande tekniker?</h3>
        <p>Efter som jag redan gått några tidigare kurser så är jag relativt bekant med HTML och CSS men inte PHP.</p>
        <h3>Gick det bra att komma i gång med kursmomentet rent allmänt eller var det något som var lurigt, svårt eller utmanande?</h3>
        <p>Jag tyckte det var ganska lätt, det var inget som var speciellt svårt förutom att styla sidorna vilket inte är en av mina starka sidor.</p>
        <h3>Vilken är din TIL för detta kmom?</h3>
        <p>Hur man lite lätt använder php</p>

        <h2 id="kmom02">kmom02</h2>

        <p>Här kommer redovisningstexten för detta kursmoment.</p>
    </main>
</body>
<?php
include('../view/footer.php')
?>