<?php

class Conect_MySql {
//	var $obj = array ( "dbname"     => "u888044377_cv",
//			"dbuser"     =>	"u888044377_root",
//			"dbpwd"      =>	"P@sw0rd&CV#WEB",
//			"dbhost"     =>	"mysql.hostinger.es");     
        var $obj = array ( "dbname"     => "cv",
			"dbuser"     =>	"root",
			"dbpwd"      =>	"",
			"dbhost"     =>	"localhost");
        var $db;

	public function __construct(){
            $this->db=$this->crearConexion();
	}
        
        private function crearConexion(){
            try {
                $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
                $host=$this->obj['dbhost'];
                $dbname=$this->obj['dbname'];
                $user=$this->obj['dbuser'];
                $pass=$this->obj['dbpwd'];
                $db = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$pass,$opciones);
            } catch (PDOException $ex) {
                echo 'Error conectando a la BBDD. ' . $ex->getMessage();
            }
            return $db;
        }
        
        function execute($sql) {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
	}

	public function close_db(){
            unset($this->db);
	}

	function obtentodoslosdatos($sql) {
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            return $resultado;
        } 
}
