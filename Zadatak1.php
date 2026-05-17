<?php
if (isset($_GET['submit'])) {
    
    $servername = "localhost:3307";
    $username = "root";
    $password = "root";
    $dbname = "zadatak1";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn->connect_error) {
        
        $ime = $conn->real_escape_string($_GET['ime']);
        $prezime = $conn->real_escape_string($_GET['prezime']);
        $oib = intval($_GET['oib']); // int(10) prema postavkama tablice
        $email = $conn->real_escape_string($_GET['email']);


        $sql = "INSERT INTO Zaposlenik (ime_zaposlenika, prezime_zaposlenika, OIB, e_mail) 
                VALUES ('$ime', '$prezime', $oib, '$email')";

        $conn->query($sql);
        
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page Title</title>
</head>
<body>

    <form>
        <label for="ime">Ime</label>
        <br />
        <input name="ime" type="text" required/>
        <br />
        <label for="prezime">Prezime</label>
        <br />
        <input name="prezime" type="text" required/>
        <br />
        <label for="oib">OIB</label>
        <br />
        <input name="oib" type="number" required/>
        <br />
        <label for="email">E-mail</label>
        <br />
        <input name="email" type="email" required/>
        <br />
        <input name="submit" type="submit" value="Pošalji" /> 
    </form>

</body>
</html>



