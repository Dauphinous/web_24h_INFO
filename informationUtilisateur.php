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