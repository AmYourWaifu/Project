<?php

ini_set( 'display_errors', 'Off' ); 
error_reporting( E_ALL );

require("connect.php");

$pizza = $_POST['pizza'];
$rozmiar = $_POST['rozmiar'];
$imie = $_POST['imie'];
$Nazwisko = $_POST['Nazwisko'];
$nrtel = $_POST['nrtel'];
$miasto = $_POST['miasto'];
$ulica = $_POST['ulica'];
$nrmiesz = $_POST['nrmiesz'];
$uwagi = $_POST['uwagi'];


$sql = "INSERT INTO zamowienia(Id, Pizza, Rozmiar, Miasto, Ulica, Nr_Mieszkania, Nr_tel, Imie, Nazwisko, Uwagi) VALUES ('','$pizza','$rozmiar','$miasto','$ulica','$nrmiesz','$nrtel','$imie','$Nazwisko','$uwagi')";
$result = $conn -> query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pizza Gdynia | Dziękujemy</title>
<link rel="icon" href="icon.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>


</style>
</head>
<body>

<div class="header">
  <h1>Projekt Pizza</h1>
  <p>Godziny Otwarcia: 9:00-23:00</p>
  <p>ul. Wiatrakowa 15, Gdynia</p>
  <p>tel. +48 673 378 234</p>

</div>

<div class="navbar">
  <a href="main.html" class="active">Strona Główna</a>
  <a href="klasyczna.html" class="center">Klasyczna</a>
  <a href="wege.html" class="center">Wegetariańska</a>
  <a href="mieso.html" class="center">Z mięsem</a>
  <a href="ostra.html" class="center">Ostra</a>
</div>
<h1 id="zam">Dziękujemy</h1>
<div id="zam">
 <h4>Zamówienie powinno dotrzeć w ciągu 1 godziny i 15 minut.</h4>
 <img src="img/loading.gif">


</div>

<div class="footer">
  <h2>Kontakt</h2>
  <br>
  <p>tel. +48 673 378 234</p>
  <p>e-mail: ProjektPizza@wp.pl</p>

</div>
</body>
</html>
