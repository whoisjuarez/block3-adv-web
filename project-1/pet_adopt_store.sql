-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2023 at 08:00 PM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andre69_pet_adopt`
--

-- --------------------------------------------------------

--
-- Table structure for table `age`
--

CREATE TABLE `age` (
  `ageID` int(11) NOT NULL,
  `ageName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `age`
--

INSERT INTO `age` (`ageID`, `ageName`) VALUES
(1, 'Kitten/Puppy'),
(2, 'Young'),
(3, 'Adult'),
(4, 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `breed`
--

CREATE TABLE `breed` (
  `breedID` int(11) NOT NULL,
  `breedName` varchar(256) NOT NULL,
  `breedSpeciesID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `breed`
--

INSERT INTO `breed` (`breedID`, `breedName`, `breedSpeciesID`) VALUES
(1, 'Mixed', 1),
(2, 'Rottweiler', 2);

-- --------------------------------------------------------

--
-- Table structure for table `coat-length`
--

CREATE TABLE `coat-length` (
  `coatLengthID` int(11) NOT NULL,
  `coatLengthName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `coat-length`
--

INSERT INTO `coat-length` (`coatLengthID`, `coatLengthName`) VALUES
(1, 'Short'),
(2, 'Medium'),
(3, 'Long');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `colorID` int(11) NOT NULL,
  `colorName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`colorID`, `colorName`) VALUES
(1, 'Orange/Red'),
(2, 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `genderID` int(11) NOT NULL,
  `genderName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderID`, `genderName`) VALUES
(1, 'Female'),
(2, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `neutered`
--

CREATE TABLE `neutered` (
  `neuteredID` int(11) NOT NULL,
  `neuteredName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `neutered`
--

INSERT INTO `neutered` (`neuteredID`, `neuteredName`) VALUES
(1, 'No'),
(2, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petID` int(11) NOT NULL,
  `petName` varchar(256) NOT NULL,
  `petSpeciesID` int(11) NOT NULL,
  `petBreedID` int(11) NOT NULL,
  `petGenderID` int(11) NOT NULL,
  `petAgeID` int(11) NOT NULL,
  `petColorID` int(11) NOT NULL,
  `petCoatLengthID` int(11) NOT NULL,
  `petVaccinesID` int(11) NOT NULL,
  `petNeuteredID` int(11) NOT NULL,
  `petToySpeciesID` int(11) NOT NULL,
  `petDescription` varchar(2000) NOT NULL,
  `petFee` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petID`, `petName`, `petSpeciesID`, `petBreedID`, `petGenderID`, `petAgeID`, `petColorID`, `petCoatLengthID`, `petVaccinesID`, `petNeuteredID`, `petToySpeciesID`, `petDescription`, `petFee`) VALUES
(3, 'Zoom', 1, 1, 2, 1, 1, 1, 2, 1, 1, 'Friendly, Gentle, Smart, Good with Other animals, House-Trained', 85),
(4, 'Lola', 2, 2, 1, 3, 2, 1, 3, 2, 2, 'Friendly, Protective, Energetic, Good with children and other dogs, House-Trained', 200);

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `speciesID` int(11) NOT NULL,
  `speciesName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `species`
--

INSERT INTO `species` (`speciesID`, `speciesName`) VALUES
(1, 'Feline'),
(2, 'Canine');

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `toyID` int(11) NOT NULL,
  `toyName` varchar(256) NOT NULL,
  `toyDescription` varchar(500) NOT NULL,
  `toySpeciesID` int(11) NOT NULL,
  `toyQty` int(11) NOT NULL,
  `toyPrice` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`toyID`, `toyName`, `toyDescription`, `toySpeciesID`, `toyQty`, `toyPrice`) VALUES
(1, 'Soft foam rubber ball', 'Soft and Lightweight, easy to chase carry or toss in the air.', 1, 27, 1.99),
(2, 'X-large plush bear', 'Soft on the outside but strong on the inside, these wild bears will satisfy your dog\'s hunter instincts. They contain minimal filling and make an irresistible squeaking sound.', 2, 12, 26.99);

-- --------------------------------------------------------

--
-- Table structure for table `toy_species`
--

CREATE TABLE `toy_species` (
  `toySpeciesID` int(11) NOT NULL,
  `toySpeciesName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `toy_species`
--

INSERT INTO `toy_species` (`toySpeciesID`, `toySpeciesName`) VALUES
(1, 'Feline'),
(2, 'Canine');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `vaccineID` int(11) NOT NULL,
  `vaccineName` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`vaccineID`, `vaccineName`) VALUES
(1, 'None'),
(2, 'Some'),
(3, 'All');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age`
--
ALTER TABLE `age`
  ADD PRIMARY KEY (`ageID`);

--
-- Indexes for table `breed`
--
ALTER TABLE `breed`
  ADD PRIMARY KEY (`breedID`),
  ADD KEY `breedSpeciesID` (`breedSpeciesID`);

--
-- Indexes for table `coat-length`
--
ALTER TABLE `coat-length`
  ADD PRIMARY KEY (`coatLengthID`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`colorID`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`genderID`);

--
-- Indexes for table `neutered`
--
ALTER TABLE `neutered`
  ADD PRIMARY KEY (`neuteredID`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petID`),
  ADD KEY `petBreedID` (`petBreedID`),
  ADD KEY `petGenderID` (`petGenderID`),
  ADD KEY `petAgeID` (`petAgeID`),
  ADD KEY `petColorID` (`petColorID`),
  ADD KEY `petCoatLengthID` (`petCoatLengthID`),
  ADD KEY `petVaccinesID` (`petVaccinesID`),
  ADD KEY `petNeuteredID` (`petNeuteredID`),
  ADD KEY `petSpeciesID` (`petSpeciesID`),
  ADD KEY `petToySpeciesID` (`petToySpeciesID`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`speciesID`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`toyID`),
  ADD KEY `toySpeciesID` (`toySpeciesID`);

--
-- Indexes for table `toy_species`
--
ALTER TABLE `toy_species`
  ADD PRIMARY KEY (`toySpeciesID`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`vaccineID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age`
--
ALTER TABLE `age`
  MODIFY `ageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `breed`
--
ALTER TABLE `breed`
  MODIFY `breedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coat-length`
--
ALTER TABLE `coat-length`
  MODIFY `coatLengthID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `colorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `genderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `neutered`
--
ALTER TABLE `neutered`
  MODIFY `neuteredID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `species`
--
ALTER TABLE `species`
  MODIFY `speciesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `toyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `toy_species`
--
ALTER TABLE `toy_species`
  MODIFY `toySpeciesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `vaccineID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `breed`
--
ALTER TABLE `breed`
  ADD CONSTRAINT `breedSpeciesID` FOREIGN KEY (`breedSpeciesID`) REFERENCES `species` (`speciesID`);

--
-- Constraints for table `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `petAgeID` FOREIGN KEY (`petAgeID`) REFERENCES `age` (`ageID`),
  ADD CONSTRAINT `petBreedID` FOREIGN KEY (`petBreedID`) REFERENCES `breed` (`breedID`),
  ADD CONSTRAINT `petCoatLengthID` FOREIGN KEY (`petCoatLengthID`) REFERENCES `coat-length` (`coatLengthID`),
  ADD CONSTRAINT `petColorID` FOREIGN KEY (`petColorID`) REFERENCES `color` (`colorID`),
  ADD CONSTRAINT `petGenderID` FOREIGN KEY (`petGenderID`) REFERENCES `gender` (`genderID`),
  ADD CONSTRAINT `petNeuteredID` FOREIGN KEY (`petNeuteredID`) REFERENCES `neutered` (`neuteredID`),
  ADD CONSTRAINT `petSpeciesID` FOREIGN KEY (`petSpeciesID`) REFERENCES `toy_species` (`toySpeciesID`),
  ADD CONSTRAINT `petToySpeciesID` FOREIGN KEY (`petToySpeciesID`) REFERENCES `toy_species` (`toySpeciesID`),
  ADD CONSTRAINT `petVaccinesID` FOREIGN KEY (`petVaccinesID`) REFERENCES `vaccines` (`vaccineID`);

--
-- Constraints for table `toys`
--
ALTER TABLE `toys`
  ADD CONSTRAINT `toySpeciesID` FOREIGN KEY (`toySpeciesID`) REFERENCES `toy_species` (`toySpeciesID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
