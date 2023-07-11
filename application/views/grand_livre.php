<section class="body_page">
        <div class="body_list">
            <div class="body_title">
                <h2>Grand Livre</h2>
            </div>

            <?= form_open('c_grand_livre/getGrandLivreByNum_Compte') ?>

                <div class="body_choise_compte" style="margin-left: 10cm; margin-bottom: 65px;">
                    <div class="row row-space" style="max-width: 20cm;">
                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="num_compte">
                                        <option value="1" selected>TOUS</option>
                                        <?php  for ($i=0; $i < count($compteGeneraux); $i++) { ?>
                                            <option value="<?php echo $compteGeneraux[$i]['numero'] ;?>"><?php echo $compteGeneraux[$i]['numero'] ;?></option>
                                        <?php } ?> 
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-2">
                                <button class="btn btn--radius btn--green" type="submit">OK</button>
                        </div>
                    </div>
                </div>

            </form>
        
            
            
            <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                <tbody>
                            <tr>
                                <th>NUMERO COMPTE</th>
                                <th>DATE</th>
                                <th>NUMERO PIECE</th>
                                <th>REFERENCE PIECE</th>
                                <th>ECRITURE</th>
                                <th>DEBIT</th>
                                <th>CREDIT</th>
                            </tr>

                        <?php for ($i=0; $i < count($grandLivre); $i++) { ?>
                            <tr>
                                <td>    
                                    <p class="fw-normal mb-1"><?php echo $grandLivre[$i]['num_compte'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $grandLivre[$i]['date'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $grandLivre[$i]['num_piece'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $grandLivre[$i]['ref_piece'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $grandLivre[$i]['ecriture'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $grandLivre[$i]['debit'] ;?></p>
                                </td>

                                <td>
                                    <p class="fw-normal mb-1"><?php echo $grandLivre[$i]['credit'] ;?></p>
                                </td>
                                
                            </tr>
                        <?php } ?>


                </tbody>
              </table>
        </div>
</section>

