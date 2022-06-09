<?php

require("polaczenie.php");
$FirstName = $_POST['imie'];
$SecondName = $_POST['nazwisko'];
$id = $_POST['id'];
$Date = $_POST['data_wypozyczenia'];
$SecondDate = $_POST['data_oddania'];
$ItemName = isset($_POST['nazwa_rzeczy'])?$_POST['nazwa_rzeczy']:'';
$ClassNumber = $_POST['klasa'];
$FieldOfStudy = $_POST['kierunek'];

$sql = "INSERT INTO `rzeczy`(`imie`, `nazwisko`, `id`, `data-wypozyczenia`, `data_oddania`, `nazwa_rzeczy`, `klasa`, `kierunek`) VALUES
     ('{$FirstName}','{$SecondName}','{$id}','{$Date}','{$SecondDate}','{$ItemName}','{$ClassNumber}','{$FieldOfStudy}')";
// echo $sql;
mysqli_query($conn,$sql);
header("location: potwierdzenie wyslania.html");
?>