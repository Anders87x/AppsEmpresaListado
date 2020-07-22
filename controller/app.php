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

    }
?>