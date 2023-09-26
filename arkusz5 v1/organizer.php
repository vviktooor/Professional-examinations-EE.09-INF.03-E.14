<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl6.css">
    <title>Organizer</title>
</head>
<body>

    <div id="baner1">
        <h2>MÓJ ORGANIZER</h2>
    </div>

    <div id="baner2">
        <form action="organizer.php" method="post">
            <label>
                Wpis wydarzenia:
                <input type="text" name="wpis">
            </label>
            <button name="zapisz">ZAPISZ</button>
        </form>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "egzamin6");

        if (isset($_POST['zapisz'])){
            $wpis = $_POST['wpis'];

            $sql1 = "UPDATE `zadania` SET `wpis`='$wpis' WHERE `dataZadania`= '2020-08-27';";
            $wynik1 = mysqli_query($conn, $sql1);
        }
        ?>
    </div>

    <div id="baner3">
        <img src="logo2.png" alt="Mój organizer">
    </div>

    <div id="glowny">
        <?php
            $sql2 = "SELECT `dataZadania`, `miesiac`, `wpis` FROM `zadania` WHERE `miesiac` = 'sierpien';";
            $wynik2 = mysqli_query($conn, $sql2);
            while($row1 = mysqli_fetch_array($wynik2)){
                echo "<div class='blok'><h6>".$row1[0].", ".$row1[1]."</h6><p>".$row1[2]."</p></div>";
            }
        ?>
    </div>

    <div id="stopka">
        <?php
            $sql3 = "SELECT `miesiac`, `rok` FROM `zadania` WHERE `dataZadania` = '2020-08-01';";
            $wynik3 = mysqli_query($conn, $sql3);
            while($row2 = mysqli_fetch_array($wynik3)){
                echo "<h1> miesiąc: ".$row2[0].", rok: ".$row2[1]."</h1>";
            }

            mysqli_close($conn);
        ?>
        <p>Stronę wykonał: 000000000</p>
    </div>
    
</body>
</html>