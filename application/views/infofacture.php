<section class="body_page">
        <div class="body_list">
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
                            <?php for ($i=0; $i < count($facture); $i++) { ?>
                                <p>DPX/<?php echo $facture[$i]['date_facture'] ;?>/000<?php echo $facture[$i]['idfacture'] ;?></p>

                                <div class="detail-client">
                                    <p style="margin-top: 3%;">Client : <?php echo $clientById[0]['intitule'] ;?></p>
                                    <input type="hidden" name="client" id="client" value="<?php echo $clientById[0]['idcompte_tiers'] ;?>">

                                </div>

                                <div class="detail-ref-bc">
                                    <p style="margin-top: 3%;">Ref BC : <?php echo $facture[$i]['ref_bc']?></p>
                                </div>

                                <div class="detail-objet">
                                    <p style="margin-top: 3%;">Objet : <?php echo $facture[$i]['objet']?></p>
                                </div>   

                            <?php } ?>
                        </div>
                    </div>
                </div>

                <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                    <tbody>
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
            
        </div>
    </section>

