
<form action="">
    <select name="" id="">
        <option value="">Select a species</option>

        <?php
            if($species) {
               foreach($species as $species_name) {
                  echo "<option value=" .  $species_name['speciesID'] . ">" . $species_name['speciesName'] . "</option>";
               }
            } else {
               echo 'No species found';
            }
        ?>

   </select>
</form>