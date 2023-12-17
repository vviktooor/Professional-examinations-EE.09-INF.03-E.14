<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title> Opinie klientów </title>
	<link rel="stylesheet" href="styl3.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="banner">
		<h1>Hurtownia spożywcza</h1>
	</div>

	<div class="main">
		<h2>Opinie naszych klientów</h2>
		<?php
				$start=mysqli_connect('localhost', 'root', '','wr_hurtownia');
				$zapytanie3="SELECT `zdjecie`, `imie`, `opinia` FROM `klienci` INNER JOIN `opinie` ON klienci.id=opinie.Klienci_id WHERE klienci.Typy_id IN(2,3);";
				$wynik1=mysqli_query($start, $zapytanie3);
				while($wiersz1=mysqli_fetch_row($wynik1)){	
				echo "<div class=opinia><img src=$wiersz1[0] alt=klient><cite>$wiersz1[2]</cite><h4>$wiersz1[1]</h4></div>";  
				}	
		?>
	</div> 

	<section id = "stopka">

		<div class="blok1">
			<h3>Współpracują z nami</h3>
			<a href="http://sklep.pl/">Sklep 1</a>
		</div>

		<div class="blok2">
			<h3>Nasi top klienci</h3>
			<ol>
				<?php
					$start=mysqli_connect('localhost', 'root', '','wr_hurtownia');
					$zapytanie1="SELECT `imie`, `nazwisko`, `punkty` FROM `klienci` ORDER BY `punkty` DESC LIMIT 3;";
					$wynik2=mysqli_query($start, $zapytanie1);
					while($wiersz2=mysqli_fetch_row($wynik2)){	
					echo "<li> $wiersz2[0] $wiersz2[1], $wiersz2[2] pkt.</li>";
					}
				?>
			</ol>
		</div>

		<div class="blok3">
			<h3>Skontaktuj się</h3>
			<p>telefon: 111222333</p>
		</div>

		<div class="blok4">
			<h3>Autor: Wiktor Raźny</h3>
		</div>
	</section>
</body>
</html>