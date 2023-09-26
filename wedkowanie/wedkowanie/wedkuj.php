<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel ="stylesheet" href="styl_1.css">
</head>
<body>
    <div class = "banner">
        <h1>Portal dla wędkarzy</h1>
    </div>


    <div class = "lewy1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
        <?php 
                $host = 'localhost';
                $user = 'root';
                $passwd = '';
                $db = 'wedkowanie';
                
                $conn = mysqli_connect($host, $user, $passwd, $db);
                if (!$conn) {
                    die("Error" . mysqli_error($conn));
                }
                //else  {
                    $query = mysqli_query($conn, 'SELECT ryby.`nazwa`, lowisko.`akwen`, lowisko.`wojewodztwo` FROM `ryby` INNER JOIN `lowisko` ON ryby.`id` = lowisko.`Ryby_id` WHERE lowisko.`rodzaj` = 3 GROUP BY lowisko.`akwen`');
                    $answer = mysqli_fetch_all($query);
                    $rows = mysqli_num_rows($query);
                    $cols = mysqli_num_fields($query);
                    for ($i = 0; $i<$rows; $i++) {
                        echo '<li>' . $answer[$i][0] . ' pływa w rzece ' . $answer[$i][1] . ', <wojewodztwo>' . $answer[$i][2] . '</li>';
                    }
                //}
                
        ?>
        </ol>
    </div>

    <div class = "prawy">
        <img src="pliki1/ryba1.jpg" alt="sum"></br>
        <a href="kwerenda/kwerendy.txt">Pobierz kwerendy</a>
    </div>

    <div class = "lewy2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <?php
                $ask = 'SELECT `id`, `nazwa`, `wystepowanie` FROM ryby WHERE `styl_zycia` = 1';
                $query = mysqli_query($conn, $ask);
                $rows = mysqli_num_rows($query);
                $cols = mysqli_num_fields($query);
                $answer = mysqli_fetch_all($query);
                for ($i = 0; $i<$rows; $i++) {
                    echo '<tr>';
                    for ($j = 0; $j<$cols; $j++) {
                        echo '<td>' . $answer[$i][$j] . '</td>';
                    }
                    echo '</tr>';
                }
                mysqli_close($conn);
            ?>
        </table>
    </div>
   
    <div class = "stopka">
        <p>Stronę wykonał: Wiktor Razny</p>
    </div>
</body>
</html>