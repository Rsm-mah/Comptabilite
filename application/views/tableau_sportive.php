<center>
<button type="button" class="btn-ajouter"><a href="<?php echo site_url('c_ajout/ajout_sportive');?>">Ajouter</a></button>
  <table>
    <thead>
      <tr>
        <th>Objectif</th>
        <th>Sport</th>
        <th>Calorie Perdue</th>
      </tr>
    </thead>
    <tbody>
        <?php for ($i=0; $i < count($sport); $i++) { ?>
            <tr>
                <td><?php echo $sport[$i]['objectif'] ;?></td>
                <td><?php echo $sport[$i]['sport'] ;?></td>
                <td class="alignement-chiffre"><?php echo $sport[$i]['calorieperdue'] ;?></td>
                <td class="place-button">
                <button type="button" class="btn-modifier">Modifier</button>
                <button type="button" class="btn-supprimer">Supprimer</button>
                </td>
            </tr>
        <?php } ?>
      <!-- Ajoutez d'autres lignes de données ici -->
    </tbody>
  </table>
  
</center>
  