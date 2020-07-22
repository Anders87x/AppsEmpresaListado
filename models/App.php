<?php
    class App extends Conectar{
        public function get_app(){
            $conectar_APPEMPRESA=parent::conexion_APPEMPRESA();
            parent::set_names();
                $sql="SP_L_APP_01";
            $stmt=$conectar_APPEMPRESA->prepare($sql);
			$stmt->execute();
   	    	return $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }   

        public function get_app_x_id($app_id){
            $conectar_APPEMPRESA=parent::conexion_APPEMPRESA();
            parent::set_names();
                $sql="SP_L_APP_02 ?";
            $stmt=$conectar_APPEMPRESA->prepare($sql);
            $stmt->bindValue(1, $app_id);
			$stmt->execute();
   	    	return $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }  

        public function get_detalle_x_app($app_id){
            $conectar_APPEMPRESA=parent::conexion_APPEMPRESA();
            parent::set_names();
                $sql="SP_L_DETALLEAPP_01 ?";
            $stmt=$conectar_APPEMPRESA->prepare($sql);
            $stmt->bindValue(1, $app_id);
			$stmt->execute();
   	    	return $resultado=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }  
    }
?>