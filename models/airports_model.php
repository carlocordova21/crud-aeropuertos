<?php
class Airports
{
   private $db;
   private $airports;

   public function __construct()
   {
      require_once 'models/database.php';

      $this->db = Database::conexion();
      $this->airports = array();
   }

   public function get_airports($tabla, $condicion)
   {
      $consulta = "SELECT * FROM " . $tabla . " WHERE " . $condicion;
      $resultado = $this->db->query($consulta);

      while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)) {
         $this->airports[] = $rows;
      }

      return $this->airports;
   }

   public function insert_airport($tabla, $data)
   {
      $consulta = "INSERT INTO " . $tabla . " VALUES(null, " . $data . ")";
      $result = $this->db->query($consulta);

      if ($result) {
         return true;
      } else {
         return false;
      }
   }

   public function update_airport($tabla, $data, $condicion)
   {
      $consulta = "update " . $tabla . " set " . $data . " where " . $condicion;
      $result = $this->db->query($consulta);
      if ($result) {
         return true;
      } else {
         return false;
      }
   }

   public function delete_airport($tabla, $condicion)
   {
      $consulta = "delete from " . $tabla . " where " . $condicion;
      $result = $this->db->query($consulta);
      if ($result) {
         return true;
      } else {
         return false;
      }
   }
}
