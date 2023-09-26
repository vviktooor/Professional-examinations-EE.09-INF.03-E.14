<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--czcionka-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner">
        <h1>KALKULATOR</h1>
    </div>

    <div class="menu">
        <a href="index.html">Dodawanie</a>
        <a href="odejmowanie.html">Odejmowanie</a>
        <a href="mnozenie.html">Mnożenie</a>
        <a href="dzielenie.html">Dzielenie</a><a href=""></a>
    </div>

    <section class="glowny">

        <div class="p_pierwsze">
            <p id="liczba1"></p>
        </div>

        <div class="plus">
            <p>+</p>
        </div>

        <div class="p_drugie">
            <p id="liczba2"></p>
        </div>

        <div class="plus">
            <p>=</p>
        </div>

        <div id="wynik">
            <input type="text" id="wynik1" name="wartosc">
        </div>

        <script>

            function losuj(){
            let x = Math.floor(Math.random() * 100) + 1;
            let y = Math.floor(Math.random() * 100) + 1;
            
            document.getElementById("liczba1").innerHTML = x;
            document.getElementById("liczba2").innerHTML = y;
            document.getElementById("wynik1").value = "";
            dodaj = x+y;
            }

            losuj()
            var poprawne = 0;
            var l_zadan = 0;

            function dodawanie(){


            if(dodaj == document.getElementById("wynik1").value){
                document.getElementById("test").innerHTML = "Dobrze " + "<img src='smile.png' alt='happy'>";
                l_zadan++;
                poprawne++;
            }

            else if(dodaj !== document.getElementById("wynik1").value && document.getElementById("wynik1").value !== ''){
                document.getElementById("test").innerHTML = "Źle " + "<img src='dissapointment.png' alt='dissapointment'>";
                l_zadan++;
            }

            else if(document.getElementById("wynik1").value == ""){
                document.getElementById("test").innerHTML = "Proszę wpisać wartość";
            }

            if(l_zadan == 10|| l_zadan > 10){
                document.getElementById("dobre").innerHTML = "Test został zakończony" + "</br>" + "Twój wynik to: " + poprawne + "<br/>" + "<form action='sprawdzian.php' method='post' name='formularz'>Imię: <input type='text' name='imie'> Nazwisko: <input type='text' name='nazwisko'> Klasa: <input name='klasa' type='text'><input type='hidden' name='punkty' value=''></br><button name='zapisz'>Prześlij wynik</button></form>";
                document.getElementById("start").innerHTML = "";
                document.getElementById("start").element.onlick = "";
            }

        }
       
        

        
        
    
    </script>


<?php
$conn = mysqli_connect("localhost", "root", "", "kalkulator");
if (isset($_POST['zapisz'])){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $klasa = $_POST['klasa'];
    $punkty = $_POST['punkty'];
    $sql1 = "INSERT INTO `sprawdziany` (Imie, Nazwisko, Klasa, Punkty) VALUES('$imie','$nazwisko','$klasa','$punkty')";
    $wynik1 = mysqli_query($conn, $sql1);
    
}
?>


    </br>
    <button type="submit" onclick="dodawanie(), losuj()" id="start">SPRAWDŹ</button>
    
    
        <p id="test"></p>
        <p id="dobre"></p>
        <p id="punkty"></p>
    </section>

    <div class="stopka">
        <p>Strona do nauki matematyki</p>
    </div>


</body>
</html>