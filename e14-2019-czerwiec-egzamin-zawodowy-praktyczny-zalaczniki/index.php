<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep papierniczy</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <div class="banner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>

    <div class="lewy">
        <h3>Promocja 15% obejmuje artykuły:</h3>
        <ul>
            <?php
                $conn = mysqli_connect("localhost", "root", "",
                "sklep");
                $zapytanie = "SELECT nazwa FROM `towary` WHERE promocja=1";

                $wynik = mysqli_query($conn, $zapytanie);

                while($wiersz = mysqli_fetch_row($wynik)){
                    echo "<li>$wiersz[0]</li>";
                }
            ?>
        </ul>
    </div>

    <div class="srodkowy">
        <h3>Cena wybranego artykułu w promocji</h3>

        <form action="index.php" method="post" >
            <select name="formularz">
                <option value="Gumka do mazania">Gumka do mazania</option> 
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60 szt.</option>
                <option value="Markery 4 szt.">Markery 4 szt.</option>
            </select>
            <Button type="submit">WYBIERZ</Button>

        </form>

        <?php 
                if (isset($_POST['formularz'])){
                $zapytanie1 = "SELECT cena FROM `towary` WHERE nazwa='".$_POST['formularz']."'";

                $wynik1 = mysqli_query($conn, $zapytanie1);
                $wiersz1 = mysqli_fetch_row($wynik1);
            
                echo round ($wiersz1[0]*0.85,2);
                }
            ?>

    </div>

    <div class="prawy">
        <h3>Kontakt</h3>
        <p>telefon: 123123123</br> e-mail: <a href="bok@sklep.pl">bok@sklep.pl</a></p>
        </br>
        <img src="materialy1/promocja.png" alt="promocja">
    </div>

    <div class="stopka">
        <h4>Autor strony WIKTOR RAZNY</h4>
    </div>
</body>
</html>