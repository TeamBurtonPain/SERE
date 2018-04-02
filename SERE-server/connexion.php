<?php
  $privateaccess="false";
  if(!isset($_COOKIE["connected"])){
    setcookie("connected","false");
  } else if ($_COOKIE["connected"]== "true") {
    ?>
    Welcome to your super-safe private page !
    <?php
    $privateaccess="true";
  }
  if($privateaccess=="false") {
    ?>
    <form method="post" action="">
       Username :<br>
       <input type="text" name="username" /><br>
       Password :<br>
       <input type="password" name="password" /><br><br>
       <input type="submit" value="Submit">
    </form>
  <?php }
?>
