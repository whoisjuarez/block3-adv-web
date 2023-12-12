<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

    include_once 'models/model.php';
   
    class Controller {
        private $model;

        public function __construct($connection) {
            $this->model = new speciesModel($connection);
        }
        
        public function showSpecies() {
            $species = $this->model->selectSpecies();
            include 'views/home.php';
        }
        
        public function showForm() {
            include 'views/form.php';
        }
        
        public function add() {
            $speciesName = $_POST['speciesName'];

            if (!$speciesName) {
                echo "<p>Missing information</p><br>";
                $this->showForm();
                return;
            } else if($this->model->insertSpecies($speciesName)){
                echo "<p>Added species: $speciesName</p><br>";
                $this->showForm() . "<br>";
            } else {
                echo "<p>Could not add species</p><br>";
                $this->showForm() . "<br>";
            }

            $this->showSpecies();
        }
    }
    
    $connection2 = new connectionObject("localhost:3306", "andre69_pet_adopt_user", "Reez16!35", "andre69_pet_adopt");
    $controller = new Controller($connection2);

    // $controller->showSpecies();
    // $controller->showForm();
    // $controller->add();
    // if page gets information, add it
    // otherwise show form
    if(isset($_POST['submit'])) {
        $controller->add();
    } else {
        $controller->showForm();
    }

?>