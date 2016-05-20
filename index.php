 <!DOCTYPE html>
  <html>
    <head>
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
           <h1 class="center-align">Bienvenue sur votre outil de gestion festif !</h1>
      </header>

      <div class="row">
          <form class="col s12" action="connexion.php" method="post">
            <div class="row">
              <div class="input-field col s2 offset-s10">
                <input id="login" type="text" class="validate">
                <label for="login">Nom du nompte</label>
              </div>
              <div class="input-field col s2 offset-s10">
                <input id="password" type="password" class="validate">
                <label for="password">Mot de passe</label>
              </div>
            </div>
          </form>
          <input class="waves-effect waves-light btn col s1 offset-s10" type="submit" value="button"/>
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