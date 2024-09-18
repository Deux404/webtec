<?php
include('../config/config.php');

$title = "Today";

include('../view/header.php');

date_default_timezone_set('Europe/Stockholm');

$today = date('Y-m-d H:i:s');
$weekday = date('l');
$weekNumber = date('W');
?>
<main>
    <p>Dagens datum är <?= $today ?>.</p>
    <p>Idag är det <span class="weekday"><?= $weekday ?></span>.</p>
    <p>Vecka nummer: <?= $weekNumber ?>.</p>
</main>

<?php
include('../view/footer.php');
?>