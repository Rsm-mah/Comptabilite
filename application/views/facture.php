<section class="body_page">
    <?= form_open('c_facture/addFacture') ?>
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
                    <h4>
                        Facture du 
                        <div class="input-date-facture">
                            <div class="input-group" style="">
                                <input class="input--style-1 js-datepicker" type="text" placeholder="DATE" name="date_facture">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                    </h4>
                    <div class="info_objet_facture">
                        <p>DPX/Mois/Année/001</p>
                        <div class="client">
                            <p style="margin-top: 3%;">
                                Client :
                                <div class="input-group" style="width: 10rem; margin-top: 5px; margin-left: 2rem;">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="client">
                                            <option selected>CLIENT</option>
                                            <?php  for ($i=0; $i < count($client); $i++) { ?>
                                                <option value="<?php echo $client[$i]['idcompte_tiers'] ;?>"><?php echo $client[$i]['intitule'] ;?></option>
                                            <?php } ?> 
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </p>
                        </div>
                        <br>

                        <div class="ref-bc">
                            <p style="margin-top: 3%;">
                                Ref BC :
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="text" placeholder="REF BC" name="ref_bc" style="text-align: center;">
                                </div>
                            </p>
                        </div>
                        <br>

                        <div class="objet">
                            <p style="margin-top: 3%;">
                                Objet :
                                <div class="input-group" style="">
                                    <input class="input--style-1" type="text" placeholder="OBJET" name="objet" style="text-align: center;">
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-list">
            <button type="submit" class="button-valider">Valider</button>
        </div>
    </form>
    </section>

