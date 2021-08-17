<?php
 // Tilkoblingsinformasjon
 $tjener = "localhost";
 $brukernavn = "root";
 $passord = "root";
 $database = "tingting";
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
$sql = "SELECT K.idForfatter, K.Fornavn, K.Etternavn, B.kilde, B.ArtiklerID,
B.Beskrivelse, P.Dato
FROM tingting.Forfatter K, tingting.Artikler B, tingting.`forfatter has_artikler` P
WHERE K.idForfatter=P.Forfatter_idForfatter
AND B.ArtiklerID=P.Artikler_ArtiklerID
ORDER BY B.Beskrivelse, B.ArtiklerID, K.Etternavn, P.Dato";
$resultat = $kobling->query($sql);
echo "<table>"; // Starter tabellen
echo "<tr>"; // Lager en rad med overskrifter
 echo "<th>Beskrivelse</th>";
 echo "<th>Kilde</th>";
 echo "<th>Fornavn</th>";
 echo "<th>Etternavn</th>";
 echo "<th>Dato</th>";
 echo "<th>Forfatter ID</th>";
 echo "<th>Artikkel ID</th>";


echo "</tr>";

while($rad = $resultat->fetch_assoc()) {
    $Dato= $rad["Dato"];
    $FID = $rad["idForfatter"];
    $FF = $rad["Fornavn"];
    $FE = $rad["Etternavn"];
    $AID = $rad["ArtiklerID"];
    $Kilde = $rad["kilde"];
    $AB = $rad["Beskrivelse"];
   
    echo "<tr>";
    echo "<td>$AB</td>";
    echo "<td>$Kilde</td>";
    echo "<td>$FF</td>";
    echo "<td>$FE</td>";
    echo "<td>$Dato</td>";
    echo "<td>$AID</td>";
    echo "<td>$FID</td>";
   
    echo "</tr>";
   }
   echo "</table>"; // Avslutter tabellen
   ?>