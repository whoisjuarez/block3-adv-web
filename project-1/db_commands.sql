-- CATS & DOGS ADOPTION STORE SQL COMMANDS

-- TABLE SPECIES
CREATE TABLE `andre69_pet_adopt`.`species` (`speciesID` INT NOT NULL AUTO_INCREMENT , `speciesName` VARCHAR(256) NOT NULL , PRIMARY KEY (`speciesID`)) ENGINE = InnoDB;

INSERT INTO `species` (`speciesID`, `speciesName`) VALUES (NULL, 'Feline'), (NULL, 'Canine')

-- Select all species information
SELECT * FROM species


--------------------------
-- TABLE BREED
CREATE TABLE `andre69_pet_adopt`.`breed` (`breedID` INT NOT NULL AUTO_INCREMENT , `breedName` VARCHAR(256) NOT NULL , `breedSpeciesID` INT NOT NULL , PRIMARY KEY (`breedID`)) ENGINE = InnoDB;

INSERT INTO `breed` (`breedID`, `breedName`, `breedSpeciesID`) VALUES (NULL, 'Mixed', ''), (NULL, 'Rottweiler', '')

ALTER TABLE `breed` ADD CONSTRAINT `breedSpeciesID` FOREIGN KEY (`breedSpeciesID`) REFERENCES `species`(`speciesID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- Select all breed information with species name
SELECT breed.*, species.speciesName
FROM breed
INNER JOIN species ON breed.breedSpeciesID = species.speciesID;


--------------------------
-- TABLE GENDER
CREATE TABLE `andre69_pet_adopt`.`gender` (`genderID` INT NOT NULL AUTO_INCREMENT , `genderName` VARCHAR(256) NOT NULL , PRIMARY KEY (`genderID`)) ENGINE = InnoDB;

INSERT INTO `gender` (`genderID`, `genderName`) VALUES (NULL, 'Female'), (NULL, 'Male')

-- Select all gender information
SELECT * FROM gender


--------------------------
-- TABLE AGE
CREATE TABLE `andre69_pet_adopt`.`age` (`ageID` INT NOT NULL AUTO_INCREMENT , `ageName` VARCHAR(256) NOT NULL , PRIMARY KEY (`ageID`)) ENGINE = InnoDB;

INSERT INTO `age` (`ageID`, `ageName`) VALUES (NULL, 'Kitten/Puppy'), (NULL, 'Young'), (NULL, 'Adult'), (NULL, 'Senior')

-- Select all age information
SELECT * FROM age


--------------------------
-- TABLE COLOR
CREATE TABLE `andre69_pet_adopt`.`color` (`colorID` INT NOT NULL AUTO_INCREMENT , `colorName` VARCHAR(256) NOT NULL , PRIMARY KEY (`colorID`)) ENGINE = InnoDB;

INSERT INTO `color` (`colorID`, `colorName`) VALUES (NULL, 'Orange/Red'), (NULL, 'Black')

-- Select all color information
SELECT * FROM color


--------------------------
-- TABLE COAT LENGTH
CREATE TABLE `andre69_pet_adopt`.`coat-length` (`coatLengthID` INT NOT NULL AUTO_INCREMENT , `coatLengthName` VARCHAR(256) NOT NULL , PRIMARY KEY (`coatLengthID`)) ENGINE = InnoDB;

INSERT INTO `coat-length` (`coatLengthID`, `coatLengthName`) VALUES (NULL, 'Short'), (NULL, 'Medium'), (NULL, 'Long')

-- Select all coat-length information
SELECT * FROM `coat-length`


--------------------------
-- TABLE VACCINES
CREATE TABLE `andre69_pet_adopt`.`vaccines` (`vaccineID` INT NOT NULL AUTO_INCREMENT , `vaccineName` VARCHAR(256) NOT NULL , PRIMARY KEY (`vaccineID`)) ENGINE = InnoDB;

INSERT INTO `vaccines` (`vaccineID`, `vaccineName`) VALUES (NULL, 'None'), (NULL, 'Some'), (NULL, 'All')

-- Select all vaccine information
SELECT * FROM vaccines


--------------------------
-- TABLE NEUTERED
CREATE TABLE `andre69_pet_adopt`.`neutered` (`neuteredID` INT NOT NULL AUTO_INCREMENT , `neuteredName` VARCHAR(256) NOT NULL , PRIMARY KEY (`neuteredID`)) ENGINE = InnoDB; 

INSERT INTO `neutered` (`neuteredID`, `neuteredName`) VALUES (NULL, 'No'), (NULL, 'Yes')

-- Select all neutered information
SELECT * FROM neutered


--------------------------
-- TABLE PETS
CREATE TABLE `andre69_pet_adopt`.`pet` (`petID` INT NOT NULL AUTO_INCREMENT , `petName` VARCHAR(256) NOT NULL , `petSpeciesID` INT NOT NULL , `petBreedID` INT NOT NULL , `petGenderID` INT NOT NULL , `petAgeID` INT NOT NULL , `petColorID` INT NOT NULL , `petCoatLengthID` INT NOT NULL , `petVaccinesID` INT NOT NULL , `petNeuteredID` INT NOT NULL , `petToySpeciesID` INT NOT NULL , `petDescription` VARCHAR(2000) NOT NULL , `petFee` DECIMAL(5,2) NOT NULL , PRIMARY KEY (`petID`)) ENGINE = InnoDB;

ALTER TABLE `pet` ADD CONSTRAINT `petSpeciesID` FOREIGN KEY (`petSpeciesID`) REFERENCES `species`(`speciesID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petBreedID` FOREIGN KEY (`petBreedID`) REFERENCES `breed`(`breedID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petGenderID` FOREIGN KEY (`petGenderID`) REFERENCES `gender`(`genderID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petAgeID` FOREIGN KEY (`petAgeID`) REFERENCES `age`(`ageID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petColorID` FOREIGN KEY (`petColorID`) REFERENCES `color`(`colorID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petCoatLengthID` FOREIGN KEY (`petCoatLengthID`) REFERENCES `coat-length`(`coatLengthID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petVaccinesID` FOREIGN KEY (`petVaccinesID`) REFERENCES `vaccines`(`vaccineID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petNeuteredID` FOREIGN KEY (`petNeuteredID`) REFERENCES `neutered`(`neuteredID`) ON DELETE RESTRICT ON UPDATE RESTRICT; ALTER TABLE `pet` ADD CONSTRAINT `petToySpeciesID` FOREIGN KEY (`petToySpeciesID`) REFERENCES `toy_species`(`toySpeciesID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `pet` (`petID`, `petName`, `petSpeciesID`, `petBreedID`, `petGenderID`, `petAgeID`, `petColorID`, `petCoatLengthID`, `petVaccinesID`, `petNeuteredID`, `petToySpeciesID`, `petDescription`, `petFee`) VALUES (NULL, 'Zoom', '1', '1', '2', '1', '1', '1', '2', '1', '1', 'Friendly, Gentle, Smart, Good with Other animals, House-Trained', '85.00'), (NULL, 'Lola', '2', '2', '1', '3', '2', '1', '3', '2', '2', 'Friendly, Protective, Energetic, Good with children and other dogs, House-Trained', '200.00')

-- Select all pet information with species, breed, gender, age, color, coat-length, vaccines, neutered, toy_species
SELECT pet.*, 
species.speciesName, 
breed.breedName,
gender.genderName, 
age.ageName, 
color.colorName, 
`coat-length`.coatLengthName, 
vaccines.vaccineName,
neutered.neuteredName, 
toy_species.toySpeciesName
FROM pet
INNER JOIN species ON pet.petSpeciesID = species.speciesID
INNER JOIN breed ON pet.petBreedID = breed.breedID
INNER JOIN gender ON pet.petGenderID = gender.genderID
INNER JOIN age ON pet.petAgeID = age.ageID
INNER JOIN color ON pet.petColorID = color.colorID
INNER JOIN `coat-length` ON pet.petCoatLengthID = `coat-length`.coatLengthID
INNER JOIN vaccines ON pet.petVaccinesID = vaccines.vaccineID
INNER JOIN neutered ON pet.petNeuteredID = neutered.neuteredID
INNER JOIN toy_species ON pet.petToySpeciesID = toy_species.toySpeciesID;


--------------------------
-- TABLE TOYS/SPECIES ASSOCIATION
CREATE TABLE `andre69_pet_adopt`.`toy_species` (`toySpeciesID` INT NOT NULL AUTO_INCREMENT , `toySpeciesName` VARCHAR(256) NOT NULL , PRIMARY KEY (`toySpeciesID`)) ENGINE = InnoDB;

INSERT INTO `toy_species` (`toySpeciesID`, `toySpeciesName`) VALUES (NULL, 'Feline'), (NULL, 'Canine')

-- Select all toy species information
SELECT * FROM toy_species


--------------------------
-- TABLE TOYS
CREATE TABLE `andre69_pet_adopt`.`toys` (`toyID` INT NOT NULL AUTO_INCREMENT , `toyName` VARCHAR(256) NOT NULL , `toyDescription` VARCHAR(500) NOT NULL , `toySpeciesID` INT NOT NULL , `toyQty` INT NOT NULL , `toyPrice` DECIMAL(5,2) NOT NULL , PRIMARY KEY (`toyID`)) ENGINE = InnoDB;

ALTER TABLE `toys` ADD CONSTRAINT `toySpeciesID` FOREIGN KEY (`toySpeciesID`) REFERENCES `toy_species`(`toySpeciesID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

INSERT INTO `toys` (`toyID`, `toyName`, `toyDescription`, `toySpeciesID`, `toyQty`, `toyPrice`) VALUES (NULL, 'Soft foam rubber ball', 'Soft and Lightweight, easy to chase carry or toss in the air.', '1', '27', '1.99'), (NULL, 'X-large plush bear', "Soft on the outside but strong on the inside, these wild bears will satisfy your dog's hunter instincts. They contain minimal filling and make an irresistible squeaking sound.", '2', '12', '26.99')

-- Select all toy information with species and toys species
SELECT *
FROM toys
NATURAL JOIN toy_species
INNER JOIN species ON toys.toySpeciesID = species.speciesID;