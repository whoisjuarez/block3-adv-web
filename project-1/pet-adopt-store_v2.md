# Pet Adoption Store

## Pet
### Species
- speciesID - Primary Key
- speciesName

### Breed
- breedID - Primary Key
- breedName
- speciesID - Foreign Key

### Gender
- genderID
- genderName

### Age
- ageID
- ageName

### Color
- colorID
- colorName

### Coat Length
- coatLengthID
- coatLengthName

### Vaccines
- vaccinesID
- vaccinesName (None, Some, All)

### Neutered
- neuteredID
- neuteredName (yes or no)

### Pet
- petID - Primary Key
- petName
- speciesID - Foreign key
- breedID - Foreign key
- genderID - Foreign key
- ageID - Foreign key
- colorID - Foreign key
- coatLengthID - Foreign key
- vaccinesID - Foreign key
- neuteredID - Foreign key
- petToySpeciesID - Foreign key
- petDescription
- petFee

## Toys
### Toys Description
- toyID - Primary Key
- toyName
- toyDescription
- toySpeciesID - Foreign Key
- toyQty
- toyPrice

### Toy-Species Association
- toySpeciesID - Primary Key
- toySpeciesName