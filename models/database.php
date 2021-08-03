<?php
require_once 'config/config.php';

class Database {
   public static function conexion() {
      try {
         $conexion = new PDO(MANAGER.":host=".HOST."; dbname=".DB, USER, PASSWORD);
         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $conexion->exec("SET CHARACTER SET UTF8");

      } catch (PDOException $e) {
         die("Error: ".$e->getMessage());
         echo "Linea del error".$e->getLine();
      }

      return $conexion;
   }
}