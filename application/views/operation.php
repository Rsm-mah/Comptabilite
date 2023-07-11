<section class="body_page">
        <div class="body_list">
            <?= form_open('c_operation/adddetailfacture') ?>
                <div class="info_facture">
                    <div class="name_societe">
                        <h3>Entreprise : Dimpex</h3>
                    </div>

                    <div class="contact">
                        <i class="fas fa-envelope"> mmmm@gmail.com</i>
                        <i class="fas fa-phone"> 0320000000</i>
                        <hr class="hr">
                    </div>

                    <div class="objet_facture">
                        <h4>Facture</h4>
                        <div class="info_objet_facture">
                            <?php for ($i=0; $i < count($maxidfacture); $i++) { ?>
                                <p>DPX/<?php echo $maxidfacture[$i]['date_facture'] ;?>/000<?php echo $maxidfacture[$i]['idfacture'] ;?></p>

                                <div class="detail-client">
                                    <p style="margin-top: 3%;">Client : <?php echo $clientById[0]['intitule'] ;?></p>
                                    <input type="hidden" name="client" id="client" value="<?php echo $clientById[0]['idcompte_tiers'] ;?>">

                                </div>

                                <div class="detail-ref-bc">
                                    <p style="margin-top: 3%;">Ref BC : <?php echo $maxidfacture[$i]['ref_bc']?></p>
                                </div>

                                <div class="detail-objet">
                                    <p style="margin-top: 3%;">Objet : <?php echo $maxidfacture[$i]['objet']?></p>
                                </div>   

                            <?php } ?>
                        </div>
                    </div>
                </div>
            
                <?php for ($i=0; $i < count($maxidfacture); $i++) { ?>
                    <input type="hidden" name="idfacture" id="idfacture" value="<?php echo $maxidfacture[$i]['idfacture'] ;?>">
                <?php } ?>

                <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                    <tbody>
                        <tr>
                            <td>
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="DESIGNATION" name="designation" id="designation" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="margin-top: 5px;">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="unite" id="unite">
                                            <option value="">UNITE</option>
                                            <?php  for ($i=0; $i < count($allUnite); $i++) { ?>
                                                <option value="<?php echo $allUnite[$i]['idunite'] ;?>"><?php echo $allUnite[$i]['unite'] ;?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="number" placeholder="NOMBRE" name="nombre" id="nombre" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="number" placeholder="PRIX UNITAIRE" name="prix_unitaire" id="prix_unitaire" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="number" placeholder="MONTANT HORS TAXE" name="montant_ht" id="montant_ht" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <button class="button-ajout" type="submit">Ajouter</button>
                            </td>
                        </tr>
            </form>
                        <tr>
                            <th>DESIGNATION</th>
                            <th>UNITE</th>
                            <th>NOMBRE</th>
                            <th>PRIX UNITAIRE</th>
                            <th>MONTANT HORS-TAXE</th>
                        </tr>
                    
                        <!-- PHP -->
                        <?php for ($i=0; $i < count($detailfacture); $i++) { ?>
                            <tr>
                                <td>    
                                    <p class="fw-normal mb-1"><?php echo $detailfacture[$i]['designation'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $detailfacture[$i]['idunite'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $detailfacture[$i]['nombre'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $detailfacture[$i]['prix_unitaire'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $detailfacture[$i]['montant_ht'] ;?></p>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
        </div>

        <div class="Total">
            <h4>Total HT = <?php echo $total_HT[0]['TotalHT'];?> Ar</h4>
            <h4>Taxe 20% = <?php echo $total_taux20 ;?> Ar</h4>
            <h4>Total TTC = <?php echo $total_TTC ;?> Ar</h4>
            <h4>Nette à payer = <?php echo $total_TTC ;?> Ar</h4>
        </div>

        <div class="button-list">
            <?php for ($i=0; $i < count($maxidfacture); $i++) { ?>
                <button type="submit" class="button-annuler"><a href="<?php echo site_url("c_facture/deletedetailfacture/".$maxidfacture[$i]['idfacture']);?>">Annuler</a></button>
            <?php } ?>

            <button type="submit" class="button-valider"><a href="<?php echo site_url("c_listfacture/listefacture");?>" id="insertfacture">Valider</a></button>
        </div>
    </section>

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            var date_facture = document.getElementById('date_facture')
            var idcompte_tiers = document.getElementById('idcompte_tiers');
            var objet = document.getElementById('objet');
            var designation = document.getElementById('designation');
            var idunite = document.getElementById('unite');
            var nombre = document.getElementById('nombre');
            var prix_unitaire = document.getElementById('prix_unitaire');
            var montant_ht = document.getElementById('montant_ht');

            var lien = document.getElementById('insertfacture');

            lien.addEventListener('click', function(event) {
                var v_date_facture = date_facture.value;
                var v_idcompte_tiers = idcompte_tiers.value;
                var v_objet = objet.value;
                var v_designation = designation.value;
                var v_idunite = idunite.value;
                var v_nombre = nombre.value;
                var v_prix_unitaire = prix_unitaire.value;
                var v_montant_ht = montant_ht.value;

                lien.href = "c_listefacture/addFacture?date_facture="+encodeURIComponent(v_date_facture)+"&idcompte_tiers="+encodeURIComponent(v_idcompte_tiers)+"&objet="+encodeURIComponent(v_objet)+
                "&designation="+encodeURIComponent(v_designation)+"&idunite="+encodeURIComponent(v_idunite)+"&nombre="+encodeURIComponent(v_nombre)+
                "&prix_unitaire="+encodeURIComponent(v_prix_unitaire)+"&montant_ht="+encodeURIComponent(v_montant_ht);
            })
        })
    </script> -->

