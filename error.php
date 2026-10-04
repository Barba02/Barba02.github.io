<?php
if ($_GET['err'] == '500') {
    echo("
        <h1>Si è verificato un errore</h1>
        <p>Se il malfunzionamento persiste, si prega di contattare <a href='mailto:fb@filippobarbieri.it'>fb@filippobarbieri.it</a></p>
    ");
}
else
    header("Location: /");
?>
