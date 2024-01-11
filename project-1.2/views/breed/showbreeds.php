<h3>Breeds</h3>

<article>
   <?php
      if($breeds) {
         foreach($breeds as $breed_solo) {
            echo "
            <section class='card'>
               <div class= 'wrapper'>
                  <div class='id'>
                     " . $breed_solo['breedID'] . "
                  </div>

                  <div class='name'>
                     " . $breed_solo['breedName'] . "
                  </div>

                  <div class='species'>
                     " . $breed_solo['speciesName'] . "
                  </div>
               </div>

               <div class='btn-flex'>
                  <form method='POST'>
                     <input type='hidden' name='breedID' value='" . $breed_solo['breedID'] . "'>

                     <div class='btn-flex'>
                        <button type='submit' name='editBreed' class='btn'><i class='fa-solid fa-pen-to-square'></i></button>

                        <button type='submit' name='deleteBreed' class='btn'><i class='fa-solid fa-trash-can'></i></button>
                     </div>
                  </form>
               </div>
            </section>
            ";
         }
      } else {
         echo "No breeds found";
      }
   ?>
</article>