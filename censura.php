<?php
$testo = $_GET[`testo`];
$censura = $_GET[`censura`];   

?>

<h2>Questo è il testo originale: </h2>
<p><?php echo $testo; ?></p>

<h2>Questa è la parola da censurare: </h2>
<p><?php echo $censura; ?></p>