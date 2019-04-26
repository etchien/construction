
<!DOCTYPE html>

  <html>

      <head>
        <title>construction</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
              <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="../bootstrap-3.3.6/dist/css/bootstrap.min.css">
            <!-- Optional theme -->
            <link rel="stylesheet" href="../bootstrap-3.3.6/dist/css/bootstrap-theme.min.css">
            <!-- Latest compiled and minified JavaScript -->
            <script src="../bootstrap-3.3.6/js/jquery-3.1.1.min.js"></script>
            <script src="../bootstrap-3.3.6/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="styles.css">
      </head>
      <body>
            <header>
                   <marquee><h1>Bienvenue Cher administrateur</h1></marquee>
           <nav class="navbar navbar-inverse">
              <div class="container">
                <div class="navbar-header">
                  <a class="navbar-brand" href="">Work Center Services</a>
                </div>
                  <div>
                      <ul class="nav navbar-nav">
                        <li><a href="../index.php">Accueil</a></li>
                         <li><a href="#">clients</a></li>
                         <li><a href="#">Terrains + Maisons neuves</a></li>
                         <li><a href="#">modèles</a></li>
                        <li><a href="#">faire un devis un Devis</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#constructeur">constructeur</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#admin">Ajouter un administrateur</a></li>
                      </ul>
                  </div>
              </div>
           </nav>
           </header>

<!--modal  ajout de constructeurs-->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="constructeur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="constructeur">Ajouter un constructeur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form  class="form-horizontal" method="POST" action="constructeur.php">
                        <div id="" class="form-group required">
                            <label for="" class="control-label col-md-4  requiredField">Nom <span class="">*</span> </label>
                            <div class="controls col-md-6 ">
                                <input class="input-md  textinput textInput form-control" id="i" maxlength="30" name="name" placeholder="" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="" class="form-group required">
                            <label for="" class="control-label col-md-4  requiredField">Prenom <span class="a">*</span> </label>
                            <div class="controls col-md-6 ">
                                <input class="input-md emailinput form-control" id="" name="firstname" placeholder="" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="" class="form-group required">
                             <label for="" class="control-label col-md-4  requiredField">Contact<span class="">*</span> </label>
                             <div class="controls col-md-6 ">
                                 <input class="input-md textinput textInput form-control" id="" name="contact" placeholder="" style="margin-bottom: 10px" type="text"/>
                            </div>
                           </div>

                             <div id="" class="form-group required">
                             <label for="" class="control-label col-md-4  requiredField">Email<span class="">*</span> </label>
                             <div class="controls col-md-6 ">
                                 <input class="input-md textinput textInput form-control" id="" name="email" placeholder="" style="margin-bottom: 10px" type="text" />
                            </div>
                          </div>
                     <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
          <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="constructeur">Ajouter un administrateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form  class="form-horizontal" method="POST" action="inscription_admin.php">
                        <div id="" class="form-group required">
                            <label for="" class="control-label col-md-4  requiredField">Nom <span class="">*</span> </label>
                            <div class="controls col-md-6 ">
                                <input class="input-md  textinput textInput form-control" id="i" maxlength="30" name="name" placeholder="" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>
                        <div id="" class="form-group required">
                            <label for="" class="control-label col-md-4  requiredField">Prenom <span class="a">*</span> </label>
                            <div class="controls col-md-6 ">
                                <input class="input-md emailinput form-control" id="" name="firstname" placeholder="" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="" class="form-group required">
                             <label for="" class="control-label col-md-4  requiredField">Contact<span class="">*</span> </label>
                             <div class="controls col-md-6 ">
                                 <input class="input-md textinput textInput form-control" id="" name="contact" placeholder="" style="margin-bottom: 10px" type="text"/>
                            </div>
                           </div>

                            <div id="" class="form-group required">
                             <label for="" class="control-label col-md-4  requiredField">Fonction<span class="">*</span> </label>
                             <div class="controls col-md-6 ">
                                 <input class="input-md textinput textInput form-control" id="" name="fonction" placeholder="" style="margin-bottom: 10px" type="text"/>
                            </div>
                           </div>

                           <div id="" class="form-group required">
                             <label for="" class="control-label col-md-4  requiredField">Email<span class="">*</span> </label>
                             <div class="controls col-md-6 ">
                                 <input class="input-md textinput textInput form-control" id="" name="email" placeholder="" style="margin-bottom: 10px" type="text"/>
                            </div>
                           </div>

                             <div id="" class="form-group required">
                             <label for="" class="control-label col-md-4  requiredField">Password<span class="">*</span> </label>
                             <div class="controls col-md-6 ">
                                 <input class="input-md textinput textInput form-control" id="" name="password" placeholder="" style="margin-bottom: 10px" type="text" />
                            </div>
                          </div>
                     <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
          <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
        </div>
        </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h2 style="font-size: 30px;text-align: center;text-transform: uppercase;color: blue;">Partie de traitement des données sur le site Web</h2>

      </div>
    </div>
  </div>





      </body>
  </html>

