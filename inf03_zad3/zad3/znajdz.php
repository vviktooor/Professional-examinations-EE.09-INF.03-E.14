<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
    <div class="banner">
        <h1>Grupa polskich kwiaciarni</h1>
    </div>
    <div class="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a></li>
                <ul>
                    <li>w Warszawie</li>
                    <li>w Malborku</li>
                    <li>w Poznaniu</li>
                </ul>
        </ol>
    </div>
    <div class="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="znajdz.php" method="post" name="formularz">
            Podaj nazwę miasta:
            <input type="text" name="miasto">
            <button type="submit" name="wyslij">SPRAWDŹ</button>
        </form>
        <br/>
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
            if (isset($_POST['wyslij'])) {
                $miasto = $_POST['miasto'];
                $q = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto';";
                $res = mysqli_query($con, $q);
                while ($row = mysqli_fetch_array($res)) {
                    echo "<h3>$row[0], $row[1]</h3>";
                }
            }
            mysqli_close($con)

        ?>

    </div>
    <div class="stopka">
        <p>Stronę opracował: WIKTOR RAZNY</p>
    </div>
</body>
</html>