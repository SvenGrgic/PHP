<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator (Switch naredba)</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .kalkulator-container { width: 300px; }
        .input-group { margin-bottom: 10px; }
        label { display: block; font-size: 14px; margin-bottom: 5px; }
        input[type="number"] { width: 100%; padding: 5px; box-sizing: border-box; }
        .buttons { display: flex; gap: 5px; margin-top: 10px; }
        button { 
            padding: 10px 15px; 
            border: 1px solid #ccc; 
            background-color: #f0f0f0; 
            cursor: pointer; 
            font-weight: bold;
        }
        button:hover { background-color: #e0e0e0; }
        .rezultat { margin-top: 15px; font-weight: bold; }
    </style>
</head>
<body>

<div class="kalkulator-container">
    <p>Kalkulator (Switch naredba)</p>
    
    <form method="POST" action="">
        <div class="input-group">
            <label>Upiši prvi broj *</label>
            <input type="number" name="broj1" step="any" required>
        </div>

        <div class="input-group">
            <label>Upiši drugi broj *</label>
            <input type="number" name="broj2" step="any" required>
        </div>

        <div class="rezultat">
            Rezultat: 
            <?php
            if (isset($_POST['operacija'])) {
                $broj1 = $_POST['broj1'];
                $broj2 = $_POST['broj2'];
                $operacija = $_POST['operacija'];
                $rezultat = "";

                switch ($operacija) {
                    case "+":
                        $rezultat = $broj1 + $broj2;
                        break;
                    case "-":
                        $rezultat = $broj1 - $broj2;
                        break;
                    case "*":
                        $rezultat = $broj1 * $broj2;
                        break;
                    case "/":
                        if ($broj2 != 0) {
                            $rezultat = $broj1 / $broj2;
                        } else {
                            $rezultat = "Dijeljenje s nulom nije dozvoljeno!";
                        }
                        break;
                    default:
                        $rezultat = "Nepoznata operacija.";
                }
                echo $rezultat;
            }
            ?>
        </div>

        <div class="buttons">
            <button type="submit" name="operacija" value="+">+</button>
            <button type="submit" name="operacija" value="-">-</button>
            <button type="submit" name="operacija" value="*">*</button>
            <button type="submit" name="operacija" value="/">/</button>
        </div>
    </form>
</div>

</body>
</html>