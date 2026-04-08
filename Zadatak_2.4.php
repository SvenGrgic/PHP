<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form method="post" action="">
        <label for="a">Vrijednost a:</label>
        <input type="number" step="any" name="a" id="a" required>
        <br><br>
        
        <label for="b">Vrijednost b:</label>
        <input type="number" step="any" name="b" id="b" required>
        <br><br>
        
        <button type="submit" name="izracunaj">Pošalji</button>
    </form>

    <hr>

    <?php
    // Provjera je li forma poslana
    if (isset($_POST['izracunaj'])) {
        // Preuzimanje vrijednosti iz input polja
        $a = $_POST['a'];
        $b = $_POST['b'];

        // Izračun prema zadanoj formuli
        $c = (3 * $a - $b) / 2;

        // Prikaz rezultata
        echo "<h4>Rezultat:</h4>";
        echo "Za a = $a i b = $b, vrijednost <strong>c iznosi: $c</strong>";
    }
    ?>

</body>
</html>