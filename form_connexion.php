<?php

session_start();

if (isset($_GET["error"])) {
  echo $_GET["error"];
}

?>

<form action="connexion.php" method="post">
  <p><input type="text" name="login" placeholder="Pseudo"/></p>
  <p><input type="password" name="password" placeholder="Mot de passe"/></p>
  <p><input type="submit" value="Connexion"/></p>
</form>
