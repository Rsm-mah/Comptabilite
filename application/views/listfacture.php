<section class="body_page">
        <div class="body_list">
            <div class="body_title">
                <h2>Listes des Factures</h2>
            </div>

                <div class="list-button-search">
                    <div class="ajout-facture">
                        <button type="submit" class="button-ajout-facture"><a href="<?php echo site_url("c_facture/facture");?>" style="color: white;"><i class="fas fa-plus"></i>Ajouter Facture</a></button>
                    </div>

                    <div class="search">
                        <div class="input-search-numfacture">
                            <div class="input-group" style="margin-left: 2rem;">
                                <input class="input--style-1" type="text" placeholder="NUM FACTURE" name="num_facture" style="text-align: center;">
                            </div>
                        </div>
                        
                        <div class="input-search-date">
                            <div class="input-group" style="margin-left: 2rem;">
                                <input class="input--style-1 js-datepicker" type="text" placeholder="DATE" name="date_facture">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>

                        <div class="select-search-client">
                            <div class="input-group" style="width: 10rem; margin-top: 5px; margin-left: 2rem;">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="annee">
                                        <option selected>CLIENT</option>
                                            <option value="2023">TOVO</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-search-objet">
                            <div class="input-group" style="margin-left: 2rem;">
                                <input class="input--style-1" type="text" placeholder="OBJET" name="objet" style="text-align: center;">
                            </div>
                        </div>

                        <div class="button-search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
                

            <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                <tbody>
                    <tr>
                        <th>NUM FACTURE</th>
                        <th>DATE</th>
                        <th>CLIENT</th>
                        <th>REF_BC</th>
                        <th>OBJET</th>
                    </tr>
                
                    <!-- PHP -->
                    <?php for ($i=0; $i < count($allFacture); $i++) { ?>
                        <tr>
                            <td>    
                                <p class="fw-normal mb-1"><?php echo $allFacture[$i]['idfacture'] ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allFacture[$i]['date_facture'] ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allFacture[$i]['client'] ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allFacture[$i]['ref_bc'] ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allFacture[$i]['objet'] ;?></p>
                            </td>

                            <td>
                                <a href="<?php echo site_url("c_infofacture/infofacture/".$allFacture[$i]['idfacture']."/".$allFacture[$i]['idcompte_tiers']) ;?>"><i class="fas fa-info" style="color: rgba(27, 102, 223, 0.991);"></i></a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
              </table>
        </div>
    </section>

