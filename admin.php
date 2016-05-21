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


<ul class="collapsible" data-collapsible="accordion">
    <li>
        <div class="collapsible-header"><i class="material-icons">star_rate</i>Liste des soirées</div>
        <div class="collapsible-body">
            <div class="collection">
                <?php

                    $dbhost = "publicsql-1.pulseheberg.net";
                    $dbname = "service_42785";
                    $dblogin = "service_42785";
                    $dbpassword = "9hf6G2bR2r";

                    $util_trouve = false;
                    $nom = "";

                    try {
                        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dblogin, $dbpassword);
                        $query = $db->prepare("SELECT nom, id_proposition FROM Proposition");
                        $query->execute();

                        while ($data = $query->fetch()) {
                            $util_trouve = true;
                            $nom = $data['nom'];
                            echo "<a href=\"InformationEvenement.php?proposition=".$data['id_proposition']."\" class=\"collection-item\">". $nom . "<a/>";
                        }

                    }


                    catch (Exception $e) {
                        die("Erreur : " . $e->getMessage());
                    }
                try {

                    $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dblogin, $dbpassword);
                    $query = $db->prepare("SELECT nom, prenom, id_personne FROM Utilisateur");
                    $query->execute();
                    echo"</div>";
                    echo "</div>";
                    echo "</li>";
                    echo "<li>";
                    echo "<div class=\"collapsible-header\"><i class=\"material-icons\">supervisor_account</i>Liste du BDE</div>";
                    echo "<div class=\"collapsible-body\">";
                    echo "<div class=\"collection\">";



                    while ($data = $query->fetch()) {
                        echo "<a href=informationUtilisateur.php?utilisateur=". $data['id_personne'] ."\" class=\"collection-item\"> Nom : ". $data['nom'] ." Prenom : " . $data['prenom'] ."</a>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</li>";

                }


                catch (Exception $e) {
                    die("Erreur : " . $e->getMessage());
                }


                ?>


          <li>
            <div class="collapsible-header"><i class="material-icons">play_circle_outline</i>Organiser un évènement</div>
              <div class="collapsible-body">
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s3">
                                <input id="first_name" type="date" class="datepicker"/>
                            </div>
                            <form action="#">
                                <p class="col s2">
                                    <input type="checkbox" id="apero" />
                                    <label for="test5">Apero</label>
                                </p>
                                <p class="col s2">
                                    <input type="checkbox" id="resto" />
                                    <label for="test5">Resto</label>
                                </p>
                                <p class="col s2">
                                    <input type="checkbox" id="after" />
                                    <label for="test5">After</label>
                                </p>
                            </form>
                            <ul class="collapsible col s2" data-collapsible="accordion">
                                <li>
                                    <select id="id_after" class="browser-default" name="after">
                                        <option value="0" disabled selected>Lieu de l'évènement</option>
                                        <?
                                        $proposition = $_GET['proposition'];
                                        $dbhost = "publicsql-1.pulseheberg.net";
                                        $dbname = "service_42785";
                                        $dblogin = "service_42785";
                                        $dbpassword = "9hf6G2bR2r";

                                        $db = new PDO("mysql:host=$dbhost;dbname=$dbname", $dblogin, $dbpassword);
                                        $query = $db->prepare("SELECT * FROM Lieu");
                                        $query->execute();
                                        $id = 0;
                                        echo "<ul class=\"collection\">";
                                        $i = 1;
                                        while ($data = $query->fetch()) {
                                            echo "<option value=". $i . "\">". $data["nom"] ."</option>";
                                            $i = $i+1;
                                        }
                                        ?>

                                    </select>
                                </li>
                            </ul>
                        </div>
                    </form>

                <a class="waves-effect waves-light btn col s2 offset-s9" onclick="check_valid()">Continuer</a>
            </div>            
            </div>
          </li>
        </ul> 



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

            <script>

              function check_valid()
              {
                check_soiree();
                check_date();
              }

              function check_soiree() {
                if (document.getElementById("id_apero").value == "0" &&
                document.getElementById("id_resto").value == "0" &&
                document.getElementById("id_after").value == "0")
                  {
                    Materialize.toast('Aucun évènement choisi !', 4000); // 4000 is the duration of the toast     
                  }
               }

               function check_date()
               {
                if(document.getElementById("first_name").value =="") {
                    Materialize.toast('Veuillez choisir une date', 4000); // 4000 is the duration of the toast     
                }
                else {
                  var date = document.getElementById("first_name").value.split('-');
                  var dateActuelle = new Date();
                  if (parseInt(date[0], 10) < dateActuelle.getYear()
                    || parseInt(date[1],10) < dateActuelle.getMonth()
                    || parseInt(date[2], 10) < dateActuelle.getDay()) {
                    Materialize.toast('Cette date est incorrecte', 4000); // 4000 is the duration of the toast  
                  }
                }
               }



     </script>
  </body>
</html>