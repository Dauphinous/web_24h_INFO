<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<header>
    <h1 class="center-align">Page Admin</h1>
</header>

<?php
$utilisateur = $_GET['utilisateur'];
$dbhost = "publicsql-1.pulseheberg.net";
$dbname = "service_42785";
$dblogin = "service_42785";
$dbpassword = "9hf6G2bR2r";

$util_trouve = false;
$nom = "";

try {
    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dblogin, $dbpassword);
    $query = $db->prepare("SELECT * FROM Utilisateur WHERE id_personne=:utilisateur");
    $query->execute(array("utilisateur"=>$utilisateur));
    echo "<ul class=\"collection\">";
    while ($data = $query->fetch()) {
        echo "<li class=\"collection-item\"> nom : ". $data['nom'] . "</li>";
        echo "<li class=\"collection-item\"> prenom : " . $data['prenom'] . "</li>";
        echo "<li class=\"collection-item\">login : " . $data['login'] ."</li>";
        echo "<li class=\"collection-item\">password : " . $data['password'] ."</li>";
        echo "<div class=\"row\">";

        echo "<form action=\"modifierInformation.php?utilisateur=". $data['id_personne'] ."\" method=\"post\">";
        echo "<div>";
        echo "<label for=\"nomLabel\">Nom :</label>";
        echo "<input type=\"text\" name=\"nom\" id=\"nom\" value=".$data['nom'] ."/>";
        echo "</div>";
        echo "<div>";
        echo "<label for=\"prenomLabel\">prenom :</label>";
        echo "<input type=\"prenom\" name=\"prenom\" id=\"prenom\" value=" . $data['prenom'] . "\" />";
        echo "</div>";
        echo "<div>";
        echo "<label for=\"loginLabel\">login :</label>";
        echo "<input type=\"login\" name=\"login\" id=\"login\" value=" . $data['login'] . "\" />";
        echo "</div>";
        echo "<div>";
        echo "<label for=\"passwordLabel\">password :</label>";
        echo "<input type=\"password\" name=\"password\" id=\"password\" value=" . $data['password'] . "\" />";
        echo "</div>";
        echo "<div>";
        echo "<label for=\"rangLabel\">rang :</label>";
        echo "<input type=\"rang\" name=\"rang\" id=\"rang\" value=" . $data['rang'] . "\" />";
        echo "</div>";

       echo " <div class=\"buttonLabel\">";
        echo "<button type=\"submit\">modifier</button>";
        echo "</div>";
        echo "</form>";

    }
    echo "</ul>";
}

catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<footer class="page-footer">
    <div class="container">
        <div class="row">
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            2016 Copyright
        </div>
    </div>
</footer>
</body>
</html>