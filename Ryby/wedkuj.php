<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link rel="stylesheet" type="text/css" href="styl_1.css">
</head>
<body>
    <div class="banner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>

        <ol>
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
                $zapytanie = "SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby, lowisko WHERE ryby.id = lowisko.Ryby_id AND lowisko.rodzaj =3";
                $wynik = mysqli_query($conn, $zapytanie);
                while($wiersz1 = mysqli_fetch_row($wynik)){
                    echo "<li>$wiersz1[0] plywa w rzece $wiersz1[1], $wiersz1[2]</li>";
                }
            ?>
        </ol>

    </div>

    <div class="prawy">
        <img src="ryba1.jpg" alt="sum">
        <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>

    <div class="lewy2">
        <h3>Ryby drapieżne naszych wód</h3>

        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>

                <?php
                    
                    $zapytanie1 = "SELECT id, nazwa, wystepowanie FROM `ryby` WHERE styl_zycia=1";
                    $wynik1 = mysqli_query($conn, $zapytanie1);
                    while($wiersz1 = mysqli_fetch_row($wynik1)){
                        echo "<tr>
                        <td>$wiersz1[0]</td>
                        <td>$wiersz1[1]</td>
                        <td>$wiersz1[2]</td>
                        </tr>";
                    }
                    mysqli_close($conn);
                ?>
        </table>
    </div>

    <div class="stopka">
        <p>Stronę wykonał: WIKTOR RAZNY</p>
    </div>
    
</body>
</html>