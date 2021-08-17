<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"> <!-- æøå -->
  <link rel="stylesheet" type="text/css" href="../CSS/minstil.css"> <!-- CSS-en min -->
  <link rel="shortcut icon" type="image/x-icon" href="../Bilder/dndlogo2.png"> <!-- Bilde ved siden av tittelen -->
  <meta http-equiv="refresh" content="30">
  <title>Elias Nettside</title> <!-- tittelen til taben -->
</head>
<body>
<script>
  function uuidv4()
  {
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
      let r = Math.random() * 16 | 0, v = c === 'x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);
      });
  }

    document.getElementById("nisse").src = "https://asvgit.com/tokyo/pi_img/temp.jpg" + uuidv4();
</script>
<div class="main"> <!-- Main grid -->
  <div class= "header"> <!-- Header grid -->
    <h1>Elias sin nettside</h1> <!-- Overskrift -->
  </div>
  <div class= "toppbar"> <!-- Menybaren min -->
    <a href="../index.html" class="active">Home</a> <!-- hjem knapp -->
    <div class="dropdown"> <!-- den første dropdown menyen -->
      <button class="dropbtn">Matte</button> <!-- matte knapp -->
      <div class="dropdown-content"> <!-- her ligger linker -->
      </div>
    </div>
    <div class="dropdown"> <!-- den andre dropdown menyen -->
      <button class="dropbtn">Engelsk</button>
      <div class="dropdown-content">
      </div>
    </div>
    <div class="dropdown"> <!-- den tredje dropdown menyen -->
      <button class="dropbtn">Konsept og koding</button>
      <div class="dropdown-content">
        <a href="Legomindstrom.html">Legomindstrom</a>
        <a href="datainfo.php">Database</a>
        <a href="./datainfovær.php">Vær Database</a>
      </div>
    </div>
    <div class="dropdown"> <!-- den fjerde dropdown menyen -->
      <button class="dropbtn">Prod og fortelling</button>
      <div class="dropdown-content">
        <a href="../Prod og forteling/bilde serie.html">Bilde serie</a>
      </div>
    </div>
    <div class="dropdown"> <!-- den femte dropdown menyen -->
      <button class="dropbtn">Tekforståelse</button>
      <div class="dropdown-content">
        <a href="../Tekforstålese/GDPR.html">GDPR</a>
      </div>
    </div>
    <div class="dropdown"> <!-- den sjette dropdown menyen -->
      <button class="dropbtn">Kroppsøving</button>
      <div class="dropdown-content">
      </div>
    </div> 
  </div>
  <div class="mainwindow"> <!-- her har jeg informasjon -->
    <h2>Overvåknings bilde</h2>
    <img id="nisse" class="nisse" src="https://asvgit.com/tokyo/pi_img/temp.jpg">
    <h2>Legge inn kilder i databasen</h2>
    <?php
      //include '../phpvær/databasevær.php';

      include '../phpvær/SELECT_Oversikt1vær.php';
      ?>
  </div>
  <div class="footer"> <!-- Footer -->
    <p>Copyright © 2021</p>
  </div>
</div>

</body>
</html>