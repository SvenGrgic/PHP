<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Pogodi broj</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .success { background-color: #5cb85c; color: white; padding: 10px; display: inline-block; border-radius: 4px; }
        .error { background-color: #d9534f; color: white; padding: 10px; display: inline-block; border-radius: 4px; }
        .info { margin-top: 10px; color: #555; }
        form { margin-bottom: 15px; }
    </style>
</head>
<body>

    <h3>Igra (pogodi broj)</h3>
    
    <form method="POST" action="">
        <label for="user_number">Upiši jedan broj od 1 do 9: </label>
        <input type="number" name="user_number" id="user_number" min="1" max="9" required>
        <br><br>
        <button type="submit" name="submit">Pošalji</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $korisnikov_broj = (int)$_POST['user_number'];

        $zamisljeni_broj = rand(1, 9);

        if ($korisnikov_broj === $zamisljeni_broj) {
            echo "<div class='success'>Pogodak, probaj ponovo!</div>";
        } else {
            echo "<div class='error'>Krivo, probaj ponovo!</div>";
        }
        echo "<div class='info'>Zamišljeni broj je $zamisljeni_broj</div>";
    }
    ?>

</body>
</html>