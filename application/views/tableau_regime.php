  <center>
   <button type="button" class="btn-ajouter"><a href="<?php echo site_url('c_ajout/ajout_regime');?>" class="link-ajouter">Ajouter</a></button>
  <table>
    <thead>
      <tr>
        <th>Objectif</th>
        <th>Plat</th>
        <th>Calorie</th>
        <th>Prix</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i=0; $i < count($plat); $i++) { ?>
        <tr>
            <td><?php echo $plat[$i]['objectif'] ;?></td>
            <td><?php echo $plat[$i]['plat'] ;?></td>
            <td class="alignement-chiffre"><?php echo $plat[$i]['calorie'] ;?></td>
            <td class="alignement-chiffre"><?php echo $plat[$i]['prix'] ;?></td>
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
  