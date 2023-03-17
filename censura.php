<style>
body {
    background-color: black;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: white;
    padding: 25%;
}
</style>

<?php
$testo = $_GET["testo"];
$censura = $_GET["censura"];
$testo_censurato = str_replace($censura, "***", $testo);

?>

<h2>Questo è il testo originale: </h2>
<p><?php echo $testo; ?></p>
<h2>ed è composta da <?php echo strlen($testo); ?> lettere</h2>


<h2>Questa invece è la parola da censurare: </h2>
<p><?php echo $censura; ?></p>

<h2>e questo è il testo censurato </h2>
<p><?php echo $testo_censurato; ?></p>