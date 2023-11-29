# Pet Adoption Store, for cats and dogs

## Basic Info

### Type

| PetID | Species |
| ----- | ------- |
| C11   | Cat     |
| D101  | Dog     |
| C37   | Cat     |

### Cost

| PetID | Adoption-Fee |
| ----- | ------------ |
| C11   | 85.00        |
| D101  | 200.00       |
| C37   | 125.00       |


## Animal Physical info

### Basic info

| PetID | Breed         | Gender | Age    |
| ----- | ------------- | ------ | ------ |
| C11   | Mixed         | Male   | Young  |
| D101  | Rottweiler    | Female | Adult  |
| C37   | Tortoiseshell | Female | Kitten |

### Remarks

| PetID | Size   | Coat-Length | Color               |
| ----- | ------ | ----------- | ------------------- |
| C11   | Medium | Short       | Orange/Red          |
| D101  | Medium | Short       | Black               |
| C37   | Small  | Short       | Tortoiseshell/Black |


## Animal Abstract Info

### Personal Characteristics

| PetID | Name   | Personality                     |
| ----- | ------ | ------------------------------- |
| C11   | Zoom   | Friendly, Gentle, Smart         |
| D101  | Lola   | Friendly, Protective, Energetic |
| C37   | Turtle | Friendly, Loyal, Curious        |

### Health & Care

| PetID | Good_with     | Health                  | Care-Behavior |
| ----- | ------------- | ----------------------- | ------------- |
| C11   | Other animals | Vaccinations up to date | House-Trained |
| D101  | Other dogs    | Spayed/Neutered         | House-Trained |
| C37   | Other animals | Vaccinations up to date | House-Trained |


## Toys to sell

### Toys

| ToyID | ToyDesc               | ToyPrice |
| ----- | --------------------- | -------- |
| T213  | Soft foam rubber ball | 1.99     |
| T238  | Squeezz Dental Stick  | 18.49    |
| T729  | X-large plush bear    | 26.99    |
| T365  | Cat Play Treat Puzzle | 23.24    |

### Animal relation
<!-- Not a class, just db connection -->
| ToyID | Species |
| ----- | ------- |
| T213  | Cat     |
| T238  | Dog     |
| T729  | Dog     |
| T365  | Cat     |

