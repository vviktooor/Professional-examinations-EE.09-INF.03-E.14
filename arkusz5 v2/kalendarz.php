<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Mój kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <section id="pierwszy">
            <img src="logo1.png" alt="Mój kalendarz">
        </section>

        <section id="drugi">
            <h1>KALENDARZ</h1> <BR>

        <?php
            $con = mysqli_connect('localhost', 'root', '', 'egzamin');
            $sql1 = "SELECT `miesiac`, `rok` FROM `zadania` WHERE `dataZadania` = '2020-07-01';";
            $wynik1 = mysqli_query($con, $sql1);
            while ($row1 = mysqli_fetch_array($wynik1)){
                echo "<h3>miesiąc: ".$row1[0].", rok: ".$row1[1]."</h3>";
            }
        ?>
            
        </section>

    </header>

    <main>
            <?php
                $sql2 = "SELECT `dataZadania`, `wpis` FROM `zadania` WHERE `miesiac` = 'lipiec';";
                $wynik2 = mysqli_query($con, $sql2);
                while ($row2 = mysqli_fetch_array($wynik2)){
                    echo "<div><h5>".$row2[0]."</h5><p>".$row2[1]."</p></div>";
                }
            ?>
    </main>

    <footer>
        <form action="kalendarz.php" method="post">
            dodaj wpis: <input type="text" name="wpis">
            <button name="wyslij">DODAJ</button>
        </form> <BR>
        <?php
        if (isset($_POST['wyslij'])) {
            $wpis = $_POST['wpis'];
            $q = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-13';";
            mysqli_query($con, $q);
        }
        mysqli_close($con);
        ?>
        <p>Stronę wykonał: 000000000</p>
    </footer>
    
</body>
</html>