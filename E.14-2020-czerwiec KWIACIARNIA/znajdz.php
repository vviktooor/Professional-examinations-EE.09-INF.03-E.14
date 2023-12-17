<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <div class="banner">
        <h1>Moje kwiaty</h1>
    </div>

    <div class="lewy">
        <h3>Kwiaty dla Ciebie!</h3>
        <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a>
        <a href="znajdz.php">Znajdź kwiaciarnię</a>
        <img src="egzamin3/egzamin/gozdzik.jpg" alt="Goździk">
    </div>

    <div class="prawy">
        <img src="egzamin3/egzamin/gerbera.jpg" alt="gerbera">
        <img src="egzamin3/egzamin/gozdzik.jpg" alt="goździk">
        <img src="egzamin3/egzamin/roza.jpg" alt="roza">
        </br>
        <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>

        <form action="znajdz.php" method="post">
            <input name="dane" type="text">
            <button type="submit">SPRAWDŹ</button>
            </br>
            <?php
                $conn = mysqli_connect("localhost", "root", "", "kwiaciarnia");
                if(isset($_POST['dane'])){
                $zapytanie = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto='".$_POST['dane']."'";

                $wynik = mysqli_query($conn, $zapytanie);
                
                $wiersz = mysqli_fetch_row($wynik);
                echo "$wiersz[0], $wiersz[1]";

                }

                mysqli_close($conn);

            ?>

        </form>

    </div>

    <div class="stopka">
        <h3>Stronę opracował: vviktooor</h3>
    </div>
</body>
</html>