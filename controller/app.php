<?php
    require_once("../config/conexion.php");

    require_once("../models/App.php");
    $app = new App();

    switch($_GET["op"]){

        case 'mostrar':      
            $datos=$app->get_app_x_id($_POST["app_id"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row)
                    {
                        $output["APP_ID"] = $row["APP_ID"];
                        $output["APP_NOM_LAR"] = $row["APP_NOM_LAR"];
                        $output["APP_NOM_CORT"] = $row["APP_NOM_CORT"];
                        $output["APP_IMG"] = $row["APP_IMG"];
                        $output["APP_USER"] = $row["APP_USER"];
                        $output["APP_URL"] = $row["APP_URL"];
                    }
                    echo json_encode($output);
                }
        break;

        case 'detalle':
            $datos=$app->get_detalle_x_app($_POST["app_id"]);
                if(is_array($datos)==true and count($datos)>0){
                    foreach($datos as $row)
                    {
                        ?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://web.microsoftstream.com/embed/video/b44f7a79-9cee-4f0a-8cb3-75ca7f2e2a76?autoplay=false&amp;showinfo=true" allowfullscreen style="border:none;"></iframe>
                            </div>
                        <?php
                    }
                }
        break;

    }
?>