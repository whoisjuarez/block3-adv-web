<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class connectionObject {
   public function __construct(public $host, public $username, public $password, public $database) {
   }
}

class speciesModel {
   private $mysqli;
   private $connectionObject;
   public function __construct($connectionObject) {
      $this->connectionObject = $connectionObject;
   }
   public function connect() {
      try {
         $mysqli = new mysqli(
               $this->connectionObject->host, 
               $this->connectionObject->username,
               $this->connectionObject->password, 
               $this->connectionObject->database
            );

         if($mysqli->connect_error) {
            throw new Exception('Could not connect');
         }
         return $mysqli;
      } catch(Exception $e) {
         return false;
      }
   }
   public function selectSpecies(){
      $mysqli = $this->connect();
      if($mysqli) {
         $result = $mysqli->query("SELECT * FROM species");
         while($row = $result->fetch_assoc()) {
               $results[] = $row;
         }
         $mysqli->close();
         return $results;
      } else {
         return false;
      }
   }
   public function insertSpecies($speciesName) {
      $mysqli = $this->connect();
      if($mysqli) {
         $mysqli->query("INSERT INTO species (speciesName) VALUES ('$speciesName')");
         $mysqli->close();
         return true;
      } else {
         return false;
      }
   }
}

?>