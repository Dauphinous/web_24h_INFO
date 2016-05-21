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
                  <a href="#!" class="collection-item">Soirée 1</a>
                  <a href="#!" class="collection-item">Soirée 2</a>
                  <a href="#!" class="collection-item">Soirée 3</a>
                  <a href="#!" class="collection-item">Soirée 4</a>
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

                  <select class="browser-default" name="apero">
                    <option value="0">Apero 1</option>
                    <option value="1">Apero 2</option>
                    <option value="2">Apero 3</option>
                    <option value="3">Pas d'apéro !</option>
                  </select>

                  </ul>
                  <ul class="collapsible col s2" data-collapsible="accordion">
                    <li>    
                      <select class="browser-default" name="resto">
                        <option value="0">Resto 1</option>
                        <option value="1">Resto 2</option>
                        <option value="2">Resto 3</option>
                        <option value="3">On mange pas !</option>
                      </select>
                    </li>
                  </ul>
                  <ul class="collapsible col s2" data-collapsible="accordion">
                    <li>              
                      <select class="browser-default" name="after">
                        <option value="0">After 1</option>
                        <option value="1">After 2</option>
                        <option value="2">After 3</option>
                        <option value="3">Pas d'after, y'a DS le lendemain :(</option>
                      </select>   
                    </li>
                  </ul>
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
          </body>
        </html>