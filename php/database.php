<?php
    include 'INSERT_Forfatter.php';
    include 'INSERT_Artikler.php';
    include 'INSERT_F_AV_A.php';
    ?>


</p>
<form method="POST">

    <input type="number" name="idForfatter">
    Forfatter ID
    </p>
    
    <input type="text" name="Fornavn">
    Forfatter Fornavn
    </p>

    <input type="text" name="Etternavn">
    Forfatter etternavn
    </p>

    <input type="number" name="ArtiklerID">
    Artikler ID
    </p>

    <input type="text" name="kilde">
    Kilde
    </p>

    <input type="text" name="Beskrivelse">  
    Beskrivelse
    </p>

    <input type="submit" name="leggtil" value="legg til">
</form>