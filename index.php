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
           <h1 class="center-align">Bienvenue sur notre site !</h1>
      </header>      

      <div class="row">
          <p class="flow-text col s10 center-align">
            Avec cet outil, la gestion des évènements festifs devient un jeu d'enfant.
            Connectez-vous et vous serez automatiquement redirigé vers nos fonctionnalités sur mesure.
            Bonne continuation !
          </p>
          <form action="connexion.php" method="post">
              <div class="input-field col s2">
                <input name="login" type="text" class="validate">
                <label for="login">Nom du nompte</label>
              </div>
              <div class="input-field col s2">
                <input name="password" type="password" class="validate">
                <label for="password">Mot de passe</label>
              </div>
          <input class="waves-effect waves-light btn col s1.5 offset-s10" type="submit" value="Connexion"/>
          </form>
      </div>

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