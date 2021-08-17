<?php
if(isset($_POST["leggtil"]))
{

 // Tilkoblingsinformasjon
 $tjener = "109.106.246.51:3306";
 $brukernavn = "u580154432_tokyo";
 $passord = "Tokyo2021";
 $database = "u580154432_tokyo";

 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 if ($kobling->connect_error) {
 die("Noe gikk galt: " . $kobling->connect_error);
}
 // Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
 // Lagrer skjemafeltene i enklere navn
 $TEP = $_POST["Temperature"];
 $PRE = $_POST["Pressure"];
 $HUM = $_POST["Humidity"];

 $sql = "INSERT INTO WeatherStation (Temperature, Pressure, Humidity) VALUES ('$TEP', '$PRE', '$HUM')";

 if($kobling->query($sql)) {
 echo "Spørringen $sql ble gjennomført.";
 } else {
 echo "Noe gikk galt med spørringen $sql ($kobling->error)."; 
    }


}
?>