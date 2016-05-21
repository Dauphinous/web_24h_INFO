<?php

session_start();

  if (!isset($_POST['login']) || !isset($_POST['password'])) {

    header("Location: form_connexion.php?error=Identifiants manquants");

  } else {

    $login = $_POST['login'];
    $password = $_POST['password'];

    $dbhost = "publicsql-1.pulseheberg.net";
    $dbname = "service_42785";
    $dblogin = "service_42785";
    $dbpassword = "9hf6G2bR2r";

    $util_trouve = false;
    $rang = "";

    try {
      $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dblogin, $dbpassword);
      $query = $db->prepare("SELECT login, rang FROM Utilisateur WHERE login=:login AND password=:password");
      $query->execute(array("login"=>$login, "password"=>$password));

      while ($data = $query->fetch()) {
        $util_trouve = true;
        $rang = $data['rang'];
      }

      if ($util_trouve) {
        $_SESSION['login'] = $login;
        $_SESSION['rang'] = $rang;

        if ($rang == "admin") {
          header("Location: admin.php");
        } else {
          header("Location: user.php");
        }

      } else {
        header("Location: form_connexion.php?error=Utilisateur non trouvé");
      }

    }

    catch (Exception $e) {
      die("Erreur : " . $e->getMessage());
    }
  }


?>
