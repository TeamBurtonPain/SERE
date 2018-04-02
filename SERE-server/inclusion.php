<?php
    if ($_GET["url"] == "") header("Location: inclusion.php?url=contenu.php"); 
?>
<html>
  <head>
    <title>
      Inclusion Attack
    </title>
  </head>
  <body style="background-color:#AAAAFF">
    <h1>
      University of Lyon
    </h1>
    The code below is included for optimization purpose :
    <div style="width:80%; min-height:200px; background-color:#008080">
      <?php
        $url = $_GET["url"];
        include($url);
      ?>
    </div>
  </body>
</html>
