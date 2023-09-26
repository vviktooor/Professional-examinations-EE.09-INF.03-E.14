<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" type="text/css" href="styl2.css">
</head>
<body>
    <div class="banner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </div>
    <div class="lewy">
        <a href="index.html">GŁÓWNA</a>
        <img src="obraz1.jpg" alt="pokoje">
    </div>
    <div class="srodkowy">
        <a href="cennik.php">CENNIK</a>

        <table>

            <?php
                $conn = mysqli_connect("localhost", "root", "", "wynajem");
                $zapytanie = "SELECT * FROM pokoje";
                $wynik=mysqli_query($conn, $zapytanie);

                while($wiersz = mysqli_fetch_row($wynik)){
                    echo "<tr>
                    <td>$wiersz[0]</td>
                    <td>$wiersz[1]</td>
                    <td>$wiersz[2]</td>
                    </tr>";
                }

            ?>
        </table>
        
    </div>
    <div class="prawy">
        <a href="kalkulator.html">KALKULATOR</a>
        <img src="obraz3.jpg" alt="pokoje">
    </div>
    <div class="stopka">
        <p>Stronę opracował: WIKTOR RAZNY</p>
    </div>
</body>
</html>