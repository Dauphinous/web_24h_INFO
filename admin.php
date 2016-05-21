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
                  ?>
               </div>   
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">supervisor_account</i>Liste du BDE</div>
            <div class="collapsible-body">            
              <div class="collection">
                  <a href="#!" class="collection-item">Membre 1</a>
                  <a href="#!" class="collection-item">Membre 2</a>
                  <a href="#!" class="collection-item">Membre 3</a>
                  <a href="#!" class="collection-item">Membre 4</a>
               </div>   
            </div>
          </li>
          <li>
            <div class="collapsible-header"><i class="material-icons">play_circle_outline</i>Organiser un évènement</div>
              <div class="collapsible-body">
                <div class="row">
                <form class="col s12">
                  <div class="row">
                    <div class="input-field col s6 ">
                      <input id="first_name" type="date" class="datepicker">
                    </div>
                  <ul class="collapsible col s2" data-collapsible="accordion">

                  <select id="id_apero" class="browser-default" name="apero">
                    <option value="0">Pas d'apéro !</option>
                    <option value="1">Apero 1</option>
                    <option value="2">Apero 2</option>
                    <option value="3">Apero 3</option>
                  </select>

                  </ul>
                  <ul class="collapsible col s2" data-collapsible="accordion">
                    <li>    
                      <select id="id_resto" class="browser-default" name="resto">
                        <option value="0">On mange pas !</option>
                        <option value="1">Resto 1</option>
                        <option value="2">Resto 2</option>
                        <option value="3">Resto 3</option>
                      </select>
                    </li>
                  </ul>
                  <ul class="collapsible col s2" data-collapsible="accordion">
                    <li>              
                      <select id="id_after" class="browser-default" name="after">
                        <option value="0">Pas d'after, y'a DS le lendemain :(</option>
                        <option value="1">After 1</option>
                        <option value="2">After 2</option>
                        <option value="3">After 3</option>
                      </select>   
                    </li>
                  </ul>
            </div>
                <a class="waves-effect waves-light btn col s2 offset-s8" onclick="check_valid()">Continuer</a>
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
                    Materialize.toast('Aucun évènement choisi !', 4000) // 4000 is the duration of the toast     
                  }
               }

               function check_date()
               {
                if(document.getElementById("first_name").value =="") {
                    Materialize.toast('Veillez choisir une date', 4000) // 4000 is the duration of the toast     
                }
               }
            </script>
          </body>
        </html>