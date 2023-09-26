<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>

    <link rel="stylesheet" type="text/css" href="styl8.css">
</head>
<body>
    <div class="menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </div>

    <div class="logo">
        <h2>Podzespoły komputerow</h2>
    </div>

    <div class="glowny">
        <h1>Dzisiejsze promocje</h1>

        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>

            <?php

                $conn = mysqli_connect("localhost", "root", "", "sklep2");
                $zapytanie = "SELECT id, nazwa, opis, cena FROM `podzespoly` WHERE cena < 1000";
                $wynik = mysqli_query($conn, $zapytanie);

                while($wiersz = mysqli_fetch_row($wynik)){
                    echo 
                    "<tr>
                        <td>$wiersz[0]</td>
                        <td>$wiersz[1]</td>
                        <td>$wiersz[2]</td>
                        <td class='wiersz3'>$wiersz[3]</td>
                    </tr>";
                }

                mysqli_close($conn);

            ?>

        </table>
    </div>

    <section id="stopka">

        <div class="stopka1">
            <img src="scalak.jpg" alt="promocje na procesory">
        </div>

        <div class="stopka2">
            <h4>Nasz Sklep Komputerowy</h4>
            <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
        </div>

        <div class="stopka3">
            <p>zadzwoń: 601 602 603</p>
        </div>

        <div class="stopka4">
            <p>Stronę wykonał: WIKTOR RAZNY</p>
        </div>

    </section>

    
    
</body>
</html>