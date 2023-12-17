<?php
    $conn = mysqli_connect("localhost", "root", "", "dane");

    if(isset($_POST['DODAJ'])){
        $tytul = $_POST['tytul'];
        $gatunki_id = $_POST['gatunki_id'];
        $rok = $_POST['rok'];
        $ocena = $_POST['ocena'];

        $zapytanie = "INSERT INTO filmy (tytul, gatunki_id, rok, ocena) VALUES ('".$tytul."', '".$gatunki_id."', '".$rok."', '".$ocena."')";
        $wynik = mysqli_query($conn, $zapytanie);

        if($wynik){
            echo "Film ".$tytul." zostal dodany do bazy";
        }

    }

    mysqli_close($conn);

?>