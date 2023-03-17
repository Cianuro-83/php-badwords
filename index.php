<style>
body {
    background-color: black;
    display: flex;
    align-items: center;
    justify-content: center;
}
</style>

<form action="./censura.php" method="GET">
    <textarea id="testo" name="testo" rows="5" cols="33" placeholder="Inserisci qui il tuo testo">
</textarea>
    <input type="text" name="censura" placeholder="Parola da censurare">
    <button type="submit">INVIA</button>

</form>