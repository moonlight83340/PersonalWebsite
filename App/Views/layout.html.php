<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?= htmlentities($title)?></title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name = " author " content = "Gaëtan Perrot" >
        <meta name = " keywords " content = "<?= htmlentities($keywords) ?>">
        <meta name = " description " content = "<?= htmlentities($description)?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        <?php if(isset($additionnalCSS)) : ?>
            <link href="<?= htmlentities($additionnalCSS) ?>" rel="stylesheet">
        <?php endif;?>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="icon" href="/Resources/Image/Favicon/favicon.ico" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
        <?php if(isset($additionnalJS)) : ?>
            <script src="<?= htmlentities($additionnalJS) ?>"></script>
        <?php endif;?>
        <script>var baseUrl = "<?= \PoireauFramework\Helper\Url::base() ?>";</script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?= (!isset($_SESSION['USER_ID'])) ? \PoireauFramework\Helper\Url::base() : \PoireauFramework\Helper\Url::base().'account/live' ?>">WebManga</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                  <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">News</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Toutes</a></li>
                        <li><a href="#">Animes</a></li>
                        <li><a href="#">Mangas</a></li>
                        <li><a href="#">Lights Novels</a></li>
                    </ul>
                  </li>
                <li><a href="<?= \PoireauFramework\Helper\Url::base().'artwork/films' ?>">Films</a></li>
                <li><a href="<?= \PoireauFramework\Helper\Url::base().'artwork/series' ?>">Séries</a></li>
                <li><a href="<?= \PoireauFramework\Helper\Url::base().'artwork/mangas' ?>">Mangas</a></li>
                <li><a href="<?= \PoireauFramework\Helper\Url::base().'artwork/lightNovels' ?>">Light Novels</a></li>
                <li><a href="http://forum.webmanga.fr/">Forum</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <?php if( isset($_SESSION['USER_ID'])) :?>
                    <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/notifications' ?>" class="imgWithoutPaddingOnMenu"> <img src="/Resources/Image/Menu/notification.png" alt="notifications" style="font-size:inherit;"> </a> </li>
                    <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/mailbox' ?>" class="imgWithoutPaddingOnMenu"> <img src="/Resources/Image/Menu/mailbox.png" alt="mailbox" style="font-size:inherit;"> </a> </li>
                    <li>
                        <a href="<?= \PoireauFramework\Helper\Url::base().'account' ?>" >
                            <img id='avatar-small' src="<?= (isset($_SESSION['USER_AVATAR']) && $_SESSION['USER_AVATAR'] != '') ? \PoireauFramework\Helper\Url::base().$_SESSION['USER_AVATAR'] : 'http://image.noelshack.com/fichiers/2016/15/1460555506-09c96925292b9671a1a6dac1ff587972.jpeg' ?>" 
                                 alt="avatar" class="img-circle avatar-small" style="font-size:inherit;">
                            <?= $_SESSION['USER_NAME'] ?>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" id="triangleGlyphiconMenu" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-triangle-bottom"></span></a>
                      <ul class="dropdown-menu">
                        <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/wish' ?>"> Envies </a> </li>
                        <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/ongoing' ?>"> En cours </a> </li>  
                        <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/collection' ?>"> Collection </a> </li>
                        <li role="separator" class="divider"></li>
                        <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/recommand'?>"> Inviter des amis</a> </li>
                        <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/mangaddicts' ?>"> Trouver des Mang'addicts</a> </li>
                        <?php if(isset($_SESSION['USER_GROUP']) && $_SESSION['USER_GROUP'] == 4) : ?>
                            <li role="separator" class="divider"></li>
                            <li> <a href="<?= \PoireauFramework\Helper\Url::base().'administration' ?>"> Administration</a> </li>
                        <?php endif ?>
                        <li role="separator" class="divider"></li>
                        <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/parametres' ?>"> <span class="glyphicon glyphicon-cog"></span> Paramètres</a> </li>
                        <li> <a href="<?= \PoireauFramework\Helper\Url::base().'account/deconnection' ?>"> <span class="glyphicon glyphicon-off"></span> Déconnexion</a> </li>
                      </ul>
                    </li>
                    
                <?php else :?>  
                    
                    <li><!-- Trigger the modal with a button --> 
                          <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#RegisterModal"><span class="glyphicon glyphicon-user"></span> Inscription</button>
                    </li>          

                    <!-- Modal -->
                    <div class="modal fade" id="RegisterModal" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Web manga, inscription</h4>
                          </div>
                          <div class="modal-body">
                            <div id="page-content-wrapper">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-4-fixed">
                                            <div id="register"> 
                                                <h2>Inscription</h2> 
                                            </div>
                                            <form id="registerForm" role="form" method="post" onsubmit="return validateForm()" action="<?= \PoireauFramework\Helper\Url::base().'account/register'?>">                                         
                                                <div id="pseudoDiv" class="form-group">
                                                    <label class="control-label" for="pseudo">Pseudo :</label>
                                                    <input type="text" name = "pseudo" class="form-control" id="register-pseudo">
                                                </div>

                                                <div id="emailDiv" class="form-group">
                                                    <label class="control-label" for="email">Adresse email :</label>
                                                    <input type="email" name = "email" class="form-control" id="register-email">
                                                </div>

                                                <div id="passwordDiv" class="form-group">
                                                    <label class="control-label" for="pwd">Mot de passe :</label>
                                                    <input type="password" name = "password" class="form-control" id="pwd">
                                                </div>

                                                <div id="passwordConfirmDiv" class="form-group">
                                                    <label class="control-label" for="pwdConfirm">Confirmer mot de passe :</label>
                                                    <input type="password" name = "passwordConfirm" class="form-control" id="pwdConfirm">
                                                </div>

                                                <div class="checkbox">
                                                    <div id="cguDiv">
                                                        <label name="cguLabel"><input type="checkbox" name="cgu" id="cgu"> J'accepte <a href="<?= \PoireauFramework\Helper\Url::base().'cgu'?>">les Conditions Générales d'Utilisation</a></label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-default register-button">Créer son compte !</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div class="modal-footer">
                                <button type="button" class="btn btn-default register-button" data-dismiss="modal">Fermer</button>
                          </div>
                        </div>
                      </div>
                    </div>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Connexion <span class="glyphicon glyphicon-log-in"></span></a>
                      <ul class="dropdown-menu">
                          <li>
                            <form id="connectionForm" class="navbar-form navbar-right" method="post" onsubmit="return validateConnection()" action="<?= \PoireauFramework\Helper\Url::base().'account/connection'?>">
                                <div class="form-group">
                                    <input placeholder="Pseudo" name="pseudo" class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <input placeholder="Password" name="password" class="form-control" type="password">
                                </div>
                                <a data-toggle="modal" href="#forgetPasswordModal">Mot de passe oublié ?</a><br/>         
                                    <button type="submit" class="btn btn-success">Connexion</button>
                            </form>
                          </li>
                      </ul>
                    </li>
                    <!-- Modal -->
                    <div class="modal fade" id="forgetPasswordModal" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Web manga, oublie de mot de passe</h4>
                          </div>
                          <div class="modal-body">
                            <div id="page-content-wrapper">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div id="forgottenPassword" class="col-lg-4-fixed">
                                            <div class="text-center"> 
                                                <h2>Mot de passe oublié</h2> 
                                            </div>
                                            <form role="form" method="post" onsubmit="return resetPassword(this)" action="<?= \PoireauFramework\Helper\Url::base().'account/resetPassword'?>">                                         
                                                <div class="form-group">
                                                    <label class="control-label" for="pseudo">Pseudo :</label>
                                                    <input type="text" name = "pseudo" class="form-control" id="pseudo">
                                                </div>
                                                <button type="submit" class="btn btn-default register-button">Renvoyer le mot de passe grâce au pseudo !</button>    
                                            </form>
                                            <br/>
                                            <form role="form" method="post" onsubmit="return resetPassword(this)" action="<?= \PoireauFramework\Helper\Url::base().'account/resetPassword'?>"> 
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Adresse email :</label>
                                                    <input type="email" name = "email" class="form-control" id="email">
                                                </div>
                                                <button type="submit" class="btn btn-default register-button">Renvoyer le mot de passe grâce à l'email !</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                                <button type="button" class="btn btn-default register-button" data-dismiss="modal">Fermer</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                <?php endif; ?>   
                    
              </ul>
            </div>
          </div>
        </nav>
        <form role="form" method="post" onsubmit="return isSearchEmpty(this)" action="<?= \PoireauFramework\Helper\Url::base().'artwork/search'?>" class="form-group">
            <div class="input-group input-group-md icon-addon addon-md">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span id="search_concept" >Tout</span> <span class="caret"></span>
                    </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#all">Tout</a></li>
                          <li><a href="#film">Films</a></li>
                          <li><a href="#serie">Séries</a></li>
                          <li><a href="#manga">Mangas</a></li>
                          <li><a href="#light_Novel">Light Novels</a></li>
                        </ul>
                </div>
                <input type="hidden" name="search_param" value="all" id="search_param">
                <input type="text" name="search" placeholder="Votre recherche" id="schbox" class="form-control" onkeyup='showResult(this.value,<?php echo json_encode(\PoireauFramework\Helper\Url::base()); ?>)'>
                <div id="livesearch">
                
                </div>
                <i class="icon icon-search"></i>
                <span class="input-group-btn">
                    <button type="submit" class="btn"><i class="glyphicon glyphicon-search"></i></button>
                </span>
            </div>
        </form>
        <?= $contents?>
        <footer>
            <p>
                <a href="#">Haut de page </a> ©  WebManga 2016
                <a href="<?= \PoireauFramework\Helper\Url::base().'about'?>"> à propos</a> | 
                <a href="<?= \PoireauFramework\Helper\Url::base().'contact'?>"> contact</a> | 
                <a href="<?= \PoireauFramework\Helper\Url::base().'home/faq'?>"> FAQ</a>
            </p>
        </footer>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-37454134-5', 'auto');
            ga('send', 'pageview');
      </script>
    </body>
</html>
