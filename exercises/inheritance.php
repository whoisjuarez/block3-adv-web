<!--  EXERCISES -->
<?php
   ini_set('display_errors', 1);

   //////////////////////// 
   // 1 - Write a php class called Animal with a method called makeSound(). Create a subclass called Cat that overrides the makeSound() method to bark.

   class Animal{
      public function makeSound(){
         echo "🐶 Woof!";
      }
   }

   class Cat extends Animal{
      public function makeSound(){
         echo "😼 Meooooooooooow!";
      }
   }

   $dog = new Animal();
   $cat = new Cat();

   $dog->makeSound();
   echo "<br>";
   $cat->makeSound();
   echo "<br><br><br>";

   //////////////////////// 
   // 2 - Write a php class called Vehicle with a method called drive(). Create a subclass called Car that overrides the drive() method to print "Repairing a car".

   class Vehicle{
      public function drive() {
         echo "🚘 Drive";
      }
   }

   class Car extends Vehicle{
      public function drive(){
         echo "👨🏻‍🔧 Repairing a car";
      }
   }

   $vehicle = new Vehicle();
   $car = new Car();

   $vehicle->drive();
   echo "<br>";
   $car->drive();
   echo "<br><br><br>";

   //////////////////////// 
   // 3 - Write a php class called Shape with a method called getArea(). Create a subclass called Rectangle that overrides the getArea() method to calculate the area of a rectangle.

   class Shape{
      public function getArea() {
         echo "Area of a Triangle";
      }
   }

   class Rectangle extends Shape{
      public function getArea(){
         echo "Area of a Rectangle";
      }
   }

   $shape = new Shape();
   $rectangle = new Rectangle();

   $shape->getArea();
   echo "<br>";
   $rectangle->getArea();
   echo "<br><br><br>";

   //////////////////////// 
   // 4 - Write a php class called Employee with methods called work() and getSalary(). Create a subclass called HRManager that overrides the work() method and adds a new method called addEmployee().

   class Employee{
      public function work(){
         echo "👷🏼‍♀️👷🏽‍♂️ You better work!";
      }
      public function getSalary(){
         echo "💵 Show me the money!";
      }
   }

   class HRManager extends Employee {
      public function work() {
         echo "🤖 HR Manager";
      }
      public function addEmployee() {
         echo "👷🏿 New employee";
      }
   }

   $employee = new Employee();
   $hrManager = new HRManager();

   $employee->work();
   echo "<br>";
   $employee->getSalary();
   echo "<br>";
   $hrManager->work();
   echo "<br>";
   $hrManager->addEmployee();
   echo "<br><br><br>";

   //////////////////////// 
   // 5 - Write a php class known as "BankAccount" with methods called deposit() and withdraw(). Create a subclass called SavingsAccount that overrides the withdraw() method to prevent withdrawals if the account balance falls below one hundred.

   class BankAccount{
      public function __construct(protected $balance){
         $this->balance = $balance;
      }

      public function deposit(){
         echo "💰 Deposit";
      }

      public function withdraw(){
         echo "💸 Give me, it's mine!";
      }
   }

   class SavingsAccount extends BankAccount{
      public function withdraw(){
         if ($this->balance < 100){
            echo "🚫 No money for you, you poor!";
         }else{
            echo "💸 Give me, it's mine!";
         }
      }
   }

   $savingsAccountMore = new SavingsAccount(150);
   $savingsAccountLess = new SavingsAccount(50);

   $savingsAccountMore->withdraw();
   echo "<br>";
   $savingsAccountLess->withdraw();
   echo "<br><br><br>";

   //////////////////////// 
   // 6 - Write a php class called Animal with a method named move(). Create a subclass called Cheetah that overrides the move() method to run.

   class Animal2{
      public function move(){
         echo "🕊️ Fly!";
      }
   }

   class Cheetah extends Animal{
      public function move(){
         echo "🐆 Run, Forrest. Run!";
      }
   }

   $animal2 = new Animal2();
   $cheetah = new Cheetah();

   $animal2->move();
   echo "<br>";
   $cheetah->move();
   echo "<br><br><br>";

   //////////////////////// 
   // 7 - Write a php class known as Person with methods called getFirstName() and getLastName(). Create a subclass called Employee that adds a new method named getEmployeeId() and overrides the getLastName() method to include the employee's job title.

   class Person{
      public function __construct(
         protected $firstName, 
         protected $lastName
      ){}

      public function getFirstName(){
         echo $this->firstName;
      }

      public function getLastName(){
         echo $this->lastName;
      }
   }

   class Employee2 extends Person{
      public function __construct(
         protected $firstName, 
         protected $lastName, 
         protected $employeeID,
         protected $jobTitle,
      ){
         parent::__construct($firstName, $lastName);
      }

      public function getEmployeeId(){
         echo $this->employeeID;
      }

      public function getJobTitle(){
         echo $this->jobTitle;
      }

      public function getLastName(){
         echo $this->lastName . ", Employee ID: " . $this->employeeID . ", Job Title: " . $this->jobTitle;
      }
   }

   $person = new Person("🏃💨 Forrest ", "Gump");
   $employee2 = new Employee2("🌹 Rose ", "Bud", "69", "Stretching Specialist");

   $person->getFirstName() . $person->getLastName();
   echo "<br>";
   $employee2->getFirstName() . $employee2->getLastName();
   echo "<br><br><br>";

   //////////////////////// 
   // 8 - Write a php class called Shape with methods called getPerimeter() and getArea(). Create a subclass called Circle that overrides the getPerimeter() and getArea() methods to calculate the area and perimeter of a circle.

   class Shape2{
      public function getPerimeter(){
         echo "Perimeter of a Rectangle";
      }
      public function getArea(){
         echo "Area of a Rectangle";
      }
   }

   class Circle extends Shape2{
      public function getPerimeter(){
         echo "Perimeter of a Circle";
      }
      public function getArea(){
         echo "Area of a Circle";
      }
   }

   $shape2 = new Shape2();
   $circle = new Circle();

   $shape2->getPerimeter(); 
   echo "<br>";
   $shape2->getArea();
   echo "<br>";
   $circle->getPerimeter();
   echo "<br>";
   $circle->getArea();
   echo "<br><br><br>";

   //////////////////////// 
   // 9 - Write a php vehicle class hierarchy. The base class should be Vehicle, with subclasses Truck, Car and Motorcycle. Each subclass should have properties such as make, model, year, and fuel type. Implement methods for calculating fuel efficiency, distance traveled, and maximum speed.

   class Vehicle2{
      public function __construct(
         protected $make, 
         protected $model, 
         protected $year, 
         protected $fuelType
         ) {}
      public function fuelEfficiency(){
         echo "Fuel Efficiency set";
      }
      public function distanceTraveled(){
         echo "Distance Traveled set";
      }
      public function maximumSpeed(){
         echo "Maximum Speed set";
      }
   }

   class Truck extends Vehicle2{
      public function fuelEfficiency(){
         parent::fuelEfficiency();
         echo " - 🛻 Truck";
      }
      public function distanceTraveled(){
         parent::distanceTraveled();
         echo " - 🛻 Truck";
      }
      public function maximumSpeed(){
         parent::maximumSpeed();
         echo " - 🛻 Truck";
      }
   }
   class Car2 extends Vehicle2{
      public function fuelEfficiency(){
         parent::fuelEfficiency();
         echo " - 🚙 Car";
      }
      public function distanceTraveled(){
         parent::distanceTraveled();
         echo " - 🚙 Car";
      }
      public function maximumSpeed(){
         parent::maximumSpeed();
         echo " - 🚙 Car";
      }
   }
   class Motorcycle extends Vehicle2{
      public function fuelEfficiency(){
         parent::fuelEfficiency();
         echo " - 🛵 Motorcycle";
      }
      public function distanceTraveled(){
         parent::distanceTraveled();
         echo " - 🛵 Motorcycle";
      }
      public function maximumSpeed(){
         parent::maximumSpeed();
         echo " - 🛵 Motorcycle";
      }
   }

   $vehicle2 = new Vehicle2("Royal Enfield", "Himalayan", 2024, "Gas");
   $truck = new Truck("Ford", "F-150 Lightning", 2023, "Diesel");
   $car2 = new Car2("Aston Martin", "Vanquish", 2024, "Gas");
   $motorcycle = new Motorcycle("Royal Enfield", "Himalayan", 2024, "Gas");

   $vehicle2->fuelEfficiency();
   echo "<br>";
   $vehicle2->distanceTraveled();
   echo "<br>";
   $vehicle2->maximumSpeed();
   echo "<br>+<br>";

   $truck->fuelEfficiency();
   echo "<br>";
   $truck->distanceTraveled();
   echo "<br>";
   $truck->maximumSpeed();
   echo "<br>+<br>";

   $car2->fuelEfficiency();
   echo "<br>";
   $car2->distanceTraveled();
   echo "<br>";
   $car2->maximumSpeed();
   echo "<br>+<br>";

   $motorcycle->fuelEfficiency();
   echo "<br>";
   $motorcycle->distanceTraveled();
   echo "<br>";
   $motorcycle->maximumSpeed();
   echo "<br><br><br>";

   //////////////////////// 
   // 10 - Write a php ca class hierarchy for employees of a company. The base class should be Employee, with subclasses Manager, Developer, and Programmer. Each subclass should have properties such as name, address, salary, and job title. Implement methods for calculating bonuses, generating performance reports, and managing projects.

   class Employee3 {
      public function __construct(
         protected $name, 
         protected $address, 
         protected $salary, 
         protected $jobTitle
         ){}
      public function calcBonus(){
         echo "Calculating Bonuses";
      }
      public function performanceRep(){
         echo "Generating Report";
      }
      public function manageProjects(){
         echo "Managing Projects";
      }
   }

   class Manager extends Employee3{
      public function calcBonus(){
         parent::calcBonus();
         echo " - 👨🏽‍💼 Manager";
      }
      public function performanceRep(){
         parent::performanceRep();
         echo " - 👨🏽‍💼 Manager";
      }
      public function manageProjects(){
         parent::manageProjects();
         echo " - 👨🏽‍💼 Manager";
      }
   }

   class Developer extends Employee3{
      public function calcBonus(){
         parent::calcBonus();
         echo " - 👩🏼‍💻 Developer";
      }
      public function performanceRep(){
         parent::performanceRep();
         echo " - 👩🏼‍💻 Developer";
      }
      public function manageProjects(){
         parent::manageProjects();
         echo " - 👩🏼‍💻 Developer";
      }
   }

   class Programmer extends Employee3{
      public function calcBonus(){
         parent::calcBonus();
         echo " 👩🏻‍💻 Programmer";
      }
      public function performanceRep(){
         parent::performanceRep();
         echo " - 👩🏻‍💻 Programmer";
      }
      public function manageProjects(){
         parent::manageProjects();
         echo " - 👩🏻‍💻 Programmer";
      }
   }

   $employee3 = new Employee3("Andres Hamburger", "69-1024 Lachine st, almost Ontario", "150,000", "Manager");
   $manager = new Manager("Andres Hamburger", "69-1024 Lachine st, almost Ontario", "150,000", "Manager");
   $developer = new Developer("Maiko Matsuoka", "1769 St Michel st, Montreal", "87,000", "Developer");
   $programmer = new Programmer("Aleksandra Petrukova", "8888 Downtown st, Montreal", "73,000", "Programmer");

   $employee3->calcBonus();
   echo "<br>";
   $employee3->performanceRep();
   echo "<br>";
   $employee3->manageProjects();
   echo "<br>+<br>";

   $manager->calcBonus();
   echo "<br>";
   $manager->performanceRep();
   echo "<br>";
   $manager->manageProjects();
   echo "<br>+<br>";

   $developer->calcBonus();
   echo "<br>";
   $developer->performanceRep();
   echo "<br>";
   $developer->manageProjects();
   echo "<br>+<br>";

   $programmer->calcBonus();
   echo "<br>";
   $programmer->performanceRep();
   echo "<br>";
   $programmer->manageProjects();
   echo "<br><br><br>";
?>