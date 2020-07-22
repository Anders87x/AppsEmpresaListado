<?php
	session_start();
	class Conectar {
	protected $dbh;
		protected function Conexion_APPEMPRESA(){
			try {
				$conectar_APPEMPRESA = $this->dbh = new PDO("sqlsrv:Server=.;Database=APPEMPRESA", "sa", "andersonxx");
				return $conectar_APPEMPRESA;	
			} catch (Exception $e) {
				print "¡Error! App Empresa: " . $e->getMessage() . "<br/>";
				die();	
			}
		}
		
		public function set_names(){	
			return $this->dbh->query("SET NAMES 'utf8'");
        }
        
		public function ruta(){
			return "http://localhost:90/APPSEMPRESA/";
		}
	}
?>