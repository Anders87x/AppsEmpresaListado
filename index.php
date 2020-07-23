<?php
    require_once("config/conexion.php"); 

    require_once("models/App.php");
    $app = new App();
    $appx = $app->get_app();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>App's Empresa</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="description" content="155 characters of message matching text with a call to action goes here">
        <meta name="keywords" content="responsive, metro, template, metromega, grozav">
        <link rel="author" href="https://plus.google.com/yourpersonalprofile">
        <link rel="publisher" href="https://plus.google.com/yourbusinessprofile">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
  
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootswatch/3.0.3/cosmo/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="public\css\style.css" type="text/css">
        
    </head>
    <body>

        <img src="public\img\background-1.jpeg" class="background" alt="">

        <div class="header">
            <h1>
                <a data-scroll="scrollto" href="#start">
                    <img src="public\img\headerlogo.png" height="32" width="35" class="header-logo" alt="">
                    App's
                </a>
            </h1>
        </div>

        <section id="content">
            <section class="clearfix section" id="start">
                <?php
                    for($i=0; $i<sizeof($appx);$i++){
                ?>
                    <div class="tile <?php echo $appx[$i]["APP_COLOR"];?> webdesign imagetile icon-fadein w2 h1" onClick="ver(<?php echo $appx[$i]["APP_ID"];?>);">
                        <a href="#" data-lightbox="mlightboximage" class="link" data-src="public/img/<?php echo $appx[$i]["APP_IMG"];?>" data-title="Generic" data-description="">
                            <i class="fa fa-laptop"></i>
                            <img src="public\img\<?php echo $appx[$i]["APP_IMG"];?>" alt="">
                            <p class="title"><?php echo $appx[$i]["APP_NOM_CORT"];?></p>
                        </a>
                    </div>
                <?php
                    }
                ?>

            </section>

        </section> 

        <section class="mlightbox" id="lockscreen">
            <div id="lockscreen-content">
                <img src="public\img\logo.png" height="109" width="140" id="locklogo" alt="Metromega">
                <br><br>
                <img src="public\img\preloader.gif" id="lockloader" alt="Loading..">
            </div>
        </section>

        <section class="mlightbox" id="loader">
            <a href="#">
                <img src="public\img\preloader.gif" alt="Loading..">
            </a>
        </section>

        <div id="modalver" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="idtitulo"></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" id="iddetalle">
                        
                    </div>
                    <div class="modal-footer" id="idbutton">
                      
                    </div>
                </div>
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> <!-- jQuery Library -->
        <script src="public\js\respond.min.js" type="text/javascript"></script> <!-- Responsive Library -->
        <script src="public\js\jquery.isotope.min.js" type="text/javascript"></script> <!-- Isotope Layout Plugin -->
        <script src="public\js\jquery.mousewheel.js" type="text/javascript"></script> <!-- jQuery Mousewheel -->
        <script src="public\js\jquery.mCustomScrollbar.js" type="text/javascript"></script> <!-- malihu Scrollbar -->
        <script src="public\js\tileshow.js" type="text/javascript"></script> <!-- Metromega Custom Tileshow Plugin -->
        <script src="public\js\jquery.touchSwipe.min.js" type="text/javascript"></script> <!-- jQuery TouchSwipe Plugin -->
        <script src="public\js\jquery.fitVids.js" type="text/javascript"></script> <!-- jQuery fitVids Plugin -->
        <script src="public\js\lockscreen.js" type="text/javascript"></script> <!-- Metromega Lockscreen -->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" type="text/javascript"></script> <!-- Bootstrap Library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="public\js\script.js" type="text/javascript"></script> <!-- Metromega Script -->
        <script src="index.js" type="text/javascript"></script>

    </body>
</html>