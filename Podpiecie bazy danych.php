<!--Domyslny URL: https://www.bielsko.zdz.katowice.pl/pozyczone-rzeczy/-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pozyczone rzeczy-ZDZ</title>
    <link rel="stylesheet" href="styl - glowna strona.css" type="text/css" />
    <link rel="icon" href="ikona.png">
    
</head>
<header>
        <center><h1>ZDZ Bielsko Katowice-Rzeczy wypozyczone-strona głowna</h1></center>
    <div class="logo">
        <div style="float: right" id="logo"><img src="icon.png" alt="ZDZ" width="132vh" height="85vh"></div>
    </div>
    <h2>⚠ Aby sprawdzić dana rzecz (date jej wypozyczenia, zdjecie itd.) wybierz kategorię a następnie rzecz lub zeskanuj kod QR z przedmiotu:</h2>
    <br/>
    <br/>
    <h2>KLASA 35 (pracownia M. Paluch, P. Laba)</h2>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pozyczone rzeczy";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Polaczenie nieudane: " . $conn->connect_error);
}

$sql = "SELECT id, nazwa/firma, opis, zdjecie FROM lista-pozyczonych-rzeczy-sala35";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - nazwa/firma: " . $row["nazwa/firma"]. " imieinazwisko " . $row["imieinazwisko"]. " datapozyczenia " . $row["datapozyczenia"]. " dataoddania " . $row["dataoddania"] "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?> 
    <div class="kategoria">
    <h2>NARZEDZIA</h2>
    </div>
    <a href="PODSTRONA-zagniatarki.html"><h3>zagniatarki</h3></a>
    <h3>testery</h3>
    <h3>wciskacze</h3>
    <h3>strippery</h3>
    <h3>lutownice</h3>
    <div class="kategoria">
        <h2>PODZESPOLY KOMPUTEROWE</h2>
    </div>
    <h3>procesory</h3>
    <h3>karty graficzne</h3>
    <h3>plyty glowne</h3>
    <h3>kosci RAM</h3>
    <h3>obudowy</h3>
    <h3>karty sieciowe</h3>
    <h3>zasilacze</h3>
    <h3>dyski</h3>
    <div class="kategoria">
        <h2>KOMPUTERY/LAPTOPY</h2>
    </div>
    <a href="PODSTRONA-komputery.html"><h3>komputery</h3></a>
    <h3>laptopy</h3>
    <h3>tablety</h3>
    <div class="kategoria">
        <h2>PERYFERIA</h2>
    </div>
    <h3>klawiatury</h3>
    <h3>myszki</h3>
    <h3>mikrofony</h3>
    <h3>głośniki</h3>
    <h3>kamerki</h3>
    <h3>monitory</h3>
    <h3>tablety graficzne</h3>
    <div class="kategoria">
        <h2>ELEMENTY SIECI</h2>
    </div>
    <h3>switche</h3>
    <h3>routery</h3>
    <h3>reapetery</h3>
    <h3>modemy</h3>
    <h3>acces pointy</h3>
    <div class="kategoria">
        <h2>INNE (niepasujace do zadnej kategori)</h2>
    </div>
    <h3>placeholder</h3>

    <div class="kontakt">
        <div style= "float: right"><h4>Brakuje jakiejs kategori/rzeczy? kontakt: kontakt.pozyczoczonysprzet.zdz@gmail.com ©</h4></div>
    </div>
    
</header>
    <body>
        
    </body>
</html>

<style type="text/css">
		a:link {color: rgb(70, 70, 255);}
		a:visited {color: rgb(0, 0, 255);}
	</style>

<!--Strony działają prawidlowo tylko na 1920x1080 (DO NAPRAWY)-->

<!--WAZNE!!!! ID jest podzielone kropkami tylko dla wiekszej czytelnosci, w bazie danych nalezy wpisac bez kropek-->

<!--123456789 gdzie kategoria=123/rzecz=456/idrzeczy789-->

<!--NARZEDZIA(od 001.001.001 do 001.999.999)-->
<!--Zaciskarki maja id od 001.001.001 do 001.001.999-->
<!--Testry maja id od 001.002.001 do 001.002.999-->
<!--Wciskacze maja id od 001.003.001 do 001.003.999-->
<!--Strippery maja id od 001.004.001 do 001.004.999-->
<!--Lutownice maja id od 001.005.001 do 001.0005.999-->

<!--PODZESPOLY KOMPUTEROWE(od 002.001.0001 do 002.999.999)-->
<!--Procesory maja id od 002.001.001 do 002.001.999-->
<!--Karty graficzne maja id od 002.002.001 do 002.002.999-->
<!--Plyty glowne maja id od 002.003.001 do 002.003.999-->
<!--Kosci ram maja id od 002.004.001 do 002.004.999-->
<!--Obudowy maja id od 002.005.001 do 002.005.999-->
<!--karty sieciowe maja id od 002.006.001 do 002.006.999-->
<!--Zasilacze maja id od 002.007.001 do 002.007.999-->
<!--Dyski maja id od 002.008.001 do 002.008.999-->

<!--KOMPUTERY/LAPTOPY/TABLETY(od 003.001.001 do 003.999.999)-->
<!--Komputery maja id od 003.001.001 do 003.001.999-->
<!--Laptopy maja id od 003.002.001 do 003.002.999-->
<!--Tablety maja id od 003.003.001 do 003.003.999-->

<!--PERYFERIA(od 004.001.001 do 004.999.999)-->
<!--Klawiatury maja id od 004.001.001 do 004.001.999-->
<!--Myszki maja id od 004.002.001 do 004.002.999-->
<!--Mikrofony maja id od 004.003.001 do 004.003.999-->
<!--Glosniki maja id od 004.004.001 do 004.004.999-->
<!--Kamerki maja id od 004.005.001 do 004.005.999-->
<!--Monitory maja id od 004.006.001 do 004.006.999-->
<!--Tablety graficzne maja id od 004.007.001 do 004.007.999-->

<!--ELEMENTY SIECI(od 005.001.001 do 005.999.999)-->
<!--Switche maja id od 005.001.001 do 005.001.999-->
<!--Routery maja id od 005.002.001 do 005.002.999-->
<!--Reapetery maja id od 005.003.001 do 005.003.999-->
<!--Modemy maja id od 005.004.001 do 005.004.999-->
<!--Acces pointy maja id od 005.005.001 do 005.005.999-->

<!--INNE(od 999.001.001 do 999.999.999)-->

<!--Oprogramowanie stworzone przez Mateusz Bathelt Kl2aTiP-->
<!--Wersja 1.01.06.-->