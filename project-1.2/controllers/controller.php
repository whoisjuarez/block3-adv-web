<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

   include_once ("models/model.php");

   class Controller {
      /** MENU **/
      public function showMenu() {
         include 'views/menu.php';
      }

      private $breedModel;
      private $colorModel;
      private $toyModel;
      private $petModel;


      public function __construct($connection) {
         $this->breedModel = new breedModel($connection);
         $this->colorModel = new colorModel($connection);
         $this->toyModel = new toyModel($connection);
         $this->petModel = new petModel($connection);
      }

      /** BREEDS **/
      // Show breeds
      public function showBreeds() {
         $breeds = $this->breedModel->selectBreeds();
         include 'views/showbreeds.php';
      }

      // Add breed
      public function showAddBreedForm() {
         $species = $this->breedModel->selectSpecies();
         include 'views/addbreed_form.php';
      }

      public function addBreed() {
         $breedName = $_POST['breedName'];
         $speciesID = $_POST['speciesID'];

         // // Fetch all species to show species name
         // $allSpecies = $this->breedModel->selectSpecies();
         // // Find the species with the matching ID
         // $speciesName = '';
         // foreach ($allSpecies as $species) {
         //    if ($species['speciesID'] == $speciesID) {
         //       $speciesName = $species['speciesName'];
         //       break;
         //    }
         // }

         $this->breedModel->addBreed($breedName, $speciesID);

         header("Location: ?page=breeds"); //to avoid resubmitting form when refreshing page
      }



      // Delete breed
      public function deleteBreed() {
         if(isset($_POST['deleteBreed'])) {
            $breedID = $_POST['breedID'];
            $this->breedModel->deleteBreed($breedID);
         }
      }

      // Edit/Update breed
      public function showEditBreedForm() {
         $breedID = $_POST['breedID'];
         // Add a method to fetch a breed by ID
         $breed = $this->breedModel->getBreedById($breedID); 
         // Show species in dropdown menu
         $species = $this->breedModel->selectSpecies();
         include 'views/editbreed_form.php';
      }

      public function updateBreed() {
         if(isset($_POST['updateBreed'])) {
            $breedID = $_POST['breedID'];
            $breedName = $_POST['breedName'];
            $speciesID = $_POST['speciesID'];

            $this->breedModel->updateBreed($breedID, $breedName, $speciesID);
         }
      }

      /** COLORS **/
      // Show colors
      public function showColors() {
         $colors = $this->colorModel->selectColors();
         include 'views/showcolors.php';
     }

      // Add color
      public function showAddColorForm() {
         include 'views/addcolor_form.php';
     }

     public function addColor() {
         $colorName = $_POST['colorName'];
         $this->colorModel->addColor($colorName);

         header("Location: ?page=colors"); //to avoid resubmitting form when refreshing page
      }

      // Delete color
      public function deleteColor() {
         if(isset($_POST['deleteColor'])) {
            $colorID = $_POST['colorID'];
            $this->colorModel->deleteColor($colorID);
         }
     }

      // Edit/Update color
      public function showEditColorForm() {
         $colorID = $_POST['colorID'];
         $color = $this->colorModel->getColorById($colorID); 
         include 'views/editcolor_form.php';
      }

      public function updateColor() {
         if(isset($_POST['updateColor'])) {
            $colorID = $_POST['colorID'];
            $colorName = $_POST['colorName'];
   
            $this->colorModel->updateColor($colorID, $colorName);
         }
      }

      /** TOYS **/
      // Show toys
      public function showToys() {
         $toys = $this->toyModel->selectToys();
         include 'views/showtoys.php';
      }

      // Add toy
      public function showAddToyForm() {
         $species = $this->toyModel->selectSpecies();
         include 'views/addtoy_form.php';
      }

      public function addToy() {
         $toyName = $_POST['toyName'];
         $toyDescription = $_POST['toyDescription'];
         $speciesID = $_POST['speciesID'];
         $toyQty = $_POST['toyQty'];
         $toyPrice = $_POST['toyPrice'];

         $this->toyModel->addToy($toyName, $toyDescription, $speciesID, $toyQty, $toyPrice);

         header("Location: ?page=toys"); //to avoid resubmitting form when refreshing page
      }

      // Delete toy
      public function deleteToy() {
         if(isset($_POST['deleteToy'])) {
            $toyID = $_POST['toyID'];
            $this->toyModel->deleteToy($toyID);
         }
      }

      // Edit/Update toy
      public function showEditToyForm() {
            $toyID = $_POST['toyID'];
            $toy = $this->toyModel->getToyById($toyID); 
            $species = $this->toyModel->selectSpecies(); 
            include 'views/edittoy_form.php';
      }

      public function updateToy() {
         if(isset($_POST['updateToy'])) {
            $toyID = $_POST['toyID'];
            $toyName = $_POST['toyName'];
            $toyDescription = $_POST['toyDescription'];
            $speciesID = $_POST['speciesID'];
            $toyQty = $_POST['toyQty'];
            $toyPrice = $_POST['toyPrice'];
   
            $this->toyModel->updateToy($toyID, $toyName, $toyDescription, $speciesID, $toyQty, $toyPrice);
         }
      }

      /** PETS **/
      // Show pets
      public function showPets() {
         $pets = $this->petModel->selectPets();
         include 'views/showpets.php';
      }

      // Add pet
      public function showAddPetForm() {
         $species = $this->petModel->selectSpecies();
         $breed = $this->petModel->selectBreed();
         $gender = $this->petModel->selectGender();
         $age = $this->petModel->selectAge();
         $color = $this->petModel->selectColor();
         $coatLength = $this->petModel->selectCoatLength();
         $vaccines = $this->petModel->selectVaccines();
         $neutered = $this->petModel->selectNeutered();
         $toySpecies = $this->petModel->selectToySpecies();
         include 'views/addpet_form.php';
   }

      public function addPet() {
         $petName = $_POST['petName'];
         $speciesID = $_POST['speciesID'];
         $breedID = $_POST['breedID'];
         $genderID = $_POST['genderID'];
         $ageID = $_POST['ageID'];
         $colorID = $_POST['colorID'];
         $coatLengthID = $_POST['coatLengthID'];
         $vaccinesID = $_POST['vaccinesID'];
         $neuteredID = $_POST['neuteredID'];
         $toySpeciesID = $_POST['toySpeciesID'];
         $petDescription = $_POST['petDescription'];
         $petFee = $_POST['petFee'];

         $this->petModel->addPet($petName, $speciesID, $breedID, $genderID, $ageID, $colorID, $coatLengthID, $vaccinesID, $neuteredID, $toySpeciesID, $petDescription, $petFee);

         header("Location: ?page=pets"); //to avoid resubmitting form when refreshing page
      }

      // Delete pet
      public function deletePet() {
         if(isset($_POST['deletePet'])) {
            $petID = $_POST['petID'];
            $this->petModel->deletePet($petID);
         }
     }

      // Edit/Update pet
      public function showEditPetForm() {
         // if (!isset($_POST['petID'])) {
         //    // Handle the error, e.g., show an error message or redirect to another page
         //    echo "Error: petID is not set.";
         //    return;
         // }
         $petID = $_POST['petID'];
         $pet = $this->petModel->getPetById($petID); 
         $species = $this->petModel->selectSpecies();
         $breed = $this->petModel->selectBreed();
         $gender = $this->petModel->selectGender();
         $age = $this->petModel->selectAge();
         $color = $this->petModel->selectColor();
         $coatLength = $this->petModel->selectCoatLength();
         $vaccines = $this->petModel->selectVaccines();
         $neutered = $this->petModel->selectNeutered();
         $toySpecies = $this->petModel->selectToySpecies();
         include 'views/editpet_form.php';
      }

      public function updatePet() {
         if(isset($_POST['updatePet'])) {
            $petID = $_POST['petID'];
            $petName = $_POST['petName'];
            $speciesID = $_POST['speciesID'];
            $breedID = $_POST['breedID'];
            $genderID = $_POST['genderID'];
            $ageID = $_POST['ageID'];
            $colorID = $_POST['colorID'];
            $coatLengthID = $_POST['coatLengthID'];
            $vaccinesID = $_POST['vaccinesID'];
            $neuteredID = $_POST['neuteredID'];
            $toySpeciesID = $_POST['toySpeciesID'];
            $petDescription = $_POST['petDescription'];
            $petFee = $_POST['petFee'];

            $this->petModel->updatePet($petID, $petName, $speciesID, $breedID, $genderID, $ageID, $colorID, $coatLengthID, $vaccinesID, $neuteredID, $toySpeciesID, $petDescription, $petFee);
         }
     }
   }

   include_once ("controllers/controller_connection.php");
   $connection = new connectionObject($host, $username, $password, $database);
   $controller = new Controller($connection);
   $controller->showMenu();

   // Controllers
   // Breeds
   if (isset($_POST['submitBreed'])) {
      $controller->addBreed();
   } else if (isset($_POST['deleteBreed'])) {
      $controller->deleteBreed();
   } else if (isset($_POST['editBreed'])) {
      $controller->showEditBreedForm();
   } else if (isset($_POST['updateBreed'])) {
      $controller->updateBreed();
   }
   // Colors
   else if (isset($_POST['submitColor'])) {
      $controller->addColor();
   } else if (isset($_POST['deleteColor'])) {
      $controller->deleteColor();
   } else if (isset($_POST['editColor'])) {
      $controller->showEditColorForm();
   } else if (isset($_POST['updateColor'])) {
      $controller->updateColor();
   }
   // Toys 
   else if (isset($_POST['submitToy'])) {
      $controller->addToy();
   } else if (isset($_POST['deleteToy'])) {
      $controller->deleteToy();
   } else if (isset($_POST['editToy'])) {
      $controller->showEditToyForm();
   } else if (isset($_POST['updateToy'])) {
      $controller->updateToy();
   }
   // Pets
   else if (isset($_POST['submitPet'])) {
      $controller->addPet();
   } else if (isset($_POST['deletePet'])) {
      $controller->deletePet();
   } else if (isset($_POST['editPet'])) {
      $controller->showEditPetForm();
   } else if (isset($_POST['updatePet'])) {
      $controller->updatePet();
   }

   // Pages - Menu
   if(isset($_GET['page'])) {
      // Breeds
      if($_GET['page'] == 'breeds') {
         $controller->showBreeds();
      } else if($_GET['page'] == 'addbreed') {
         $controller->showAddBreedForm();
      } 
      // Colors
      else if($_GET['page'] == 'colors') {
         $controller->showColors();
      } else if($_GET['page'] == 'addcolor') {
         $controller->showAddColorForm();
      }
      // Toys
      else if($_GET['page'] == 'toys') {
         $controller->showToys();
      } else if($_GET['page'] == 'addtoy') {
         $controller->showAddToyForm();
      }
      // Pets
      else if($_GET['page'] == 'pets') {
         $controller->showPets();
      } else if($_GET['page'] == 'addpet') {
         $controller->showAddPetForm();
      }
   }

   // Actions
   if(isset($_GET['action'])) {
      if($_GET['action'] == 'showbreeds') {
         $controller->showBreeds();
      } else if($_GET['action'] == 'showcolors') {
         $controller->showColors();
      } else if($_GET['action'] == 'showtoys') {
         $controller->showToys();
      } else if($_GET['action'] == 'showpets') {
         $controller->showPets();
      }
   }
?>