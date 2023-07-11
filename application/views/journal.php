<section class="body_page">
        <div class="body_list">
            <div class="body_title">
                <h2>Journal <?php echo $detail_codeJournal[0]['intitule']; ?></h2>
            </div>

            <?= form_open('c_journal/addJournal') ?>

                <div class="body_choise_mois">
                    <div class="row row-space" style="max-width: 20cm;">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="mois">
                                        <option selected>CHOISIR LE MOIS</option>
                                        <?php  for ($i=0; $i < count($mois); $i++) { ?>
                                            <option value="<?php echo $mois[$i]['numMois'] ;?>"><?php echo $mois[$i]['mois'] ;?></option>
                                        <?php } ?> 
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>

                            <div class="col-2">
                            <div class="input-group" style="width: 23em;">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="annee">
                                        <option selected>CHOISIR L' ANNEE</option>
                                            <option value="2023">2023</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            

            <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                <tbody>
                        <tr>
                            <input type="hidden" value="<?php echo $idcode_journal ;?>" name="idcode_journal">
                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="number" placeholder="JOUR" name="jour">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="number" placeholder="NUMERO PIECE" name="num_piece" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="text" placeholder="REFERENCE PIECE" name="ref_piece" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="number" placeholder="NUMERO COMPTE" name="num_compte" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="text" placeholder="ECRITURE" name="ecriture" style="text-align: center;">
                                </div>
                            </td>

                            

                            <td>
                                <div class="input-group" style="margin-top: 5px;">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="devise">
                                                <option value="AUCUNE">AUCUNE</option>
                                                <option value="DOLLAR">DOLLAR</option>
                                                <option value="EURO">EURO</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </td>

                            

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="number" placeholder="QUANTITE" name="quantite" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="text" placeholder="MONTANT DEVISE" name="montant_devise" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="text" placeholder="DEBIT" name="debit" style="text-align: center;">
                                </div>
                            </td>

                            <td>
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="text" placeholder="CREDIT" name="credit" style="text-align: center;">
                                </div>
                            </td>

                            
                            <td>
                                <button class="button-ajout" type="submit">Ajouter</button>
                            </td>
                        </tr>
                    </form>

                            <tr>
                                <th>JOUR</th>
                                <th>NUMERO PIECE</th>
                                <th>REFERENCE PIECE</th>
                                <th>NUMERO COMPTE</th>
                                <th>ECRITURE</th>
                                <th>DEVISE</th>
                                <th>QUANTITE</th>
                                <th>MONTANT DEVISE</th>
                                <th>DEBIT</th>
                                <th>CREDIT</th>
                            </tr>
                        <?php for ($i=0; $i < count($journalById); $i++) { ?>
                            <tr>
                                <td>    
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['jour'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['num_piece'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['ref_piece'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['num_compte'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['ecriture'] ;?></p>
                                </td>

                                

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['devise'] ;?></p>
                                </td>



                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['quantite'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['montant_devise'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['debit'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $journalById[$i]['credit'] ;?></p>
                                </td>

                                <td>
                                    <a href="<?php echo site_url();?>"><i class="far fa-edit"></i></a>
                                    <a href="<?php echo site_url();?>"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        <?php } ?>


                </tbody>
              </table>
        </div>

        <div class="body-solde" style="margin-top: 50px;">
            <h4><?php echo $solde ;?> = <?php echo $valeur_solde;?></h4>
        </div>
    </section>

