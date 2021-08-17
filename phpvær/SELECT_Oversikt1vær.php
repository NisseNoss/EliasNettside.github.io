<?php
 // Tilkoblingsinformasjon
 $tjener = "109.106.246.51:3306";
 $brukernavn = "u580154432_tokyo";
 $passord = "Tokyo2021";
 $database = "u580154432_tokyo";
 // Opprette en kobling
 $kobling = new mysqli($tjener, $brukernavn, $passord, $database);
 // Sjekk om koblingen virker
 // if ($kobling->connect_error) {
 // die("Noe gikk galt: " . $kobling->connect_error);
// }
// else {
 // echo "Koblingen virker"; }

 //Angi UTF-8 som tegnsett
 $kobling->set_charset("utf8");
$sql = "SELECT K.StationID, K.Temperature, K.Pressure, K.Humidity, K.TimeKey
FROM u580154432_tokyo.WeatherStation K
ORDER BY K.StationID DESC, K.Temperature, K.Pressure, K.Humidity, K.TimeKey";
$resultat = $kobling->query($sql);
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
 echo "<th>Station ID</th>";
 echo "<th>TimeKey</th>";
 echo "<th>Temperature</th>";
 echo "<th>Pressure</th>";
 echo "<th>Humidity</th>";
echo "</tr>";

while($rad = $resultat->fetch_assoc()) {
    $Time= $rad["TimeKey"];
    $SID = $rad["StationID"];
    $TEP = $rad["Temperature"];
    $PRE = $rad["Pressure"];
    $HUM = $rad["Humidity"];
   
    echo "<tr>";
    echo "<td>$SID</td>";
    echo "<td>$Time</td>";
    echo "<td>$TEP</td>";
    echo "<td>$PRE</td>";
    echo "<td>$HUM</td>";
    echo "</tr>";
   }
   echo "</table>"; // Avslutter tabellen
   ?>