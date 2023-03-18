<section class="body_page">
        <div class="body_list">

            <div class="body_title">
                <h2>Codes Journals</h2>
            </div>

            <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                <tbody>
                    <?= form_open('c_codeJournal/addCodeJournal') ?>
                    <tr>
                        <td>
                            <div class="input-group" style="margin-left: 5px;">
                                <input class="input--style-1" type="text" placeholder="CODE JOURNAL" name="code" style="text-align: center;">
                            </div>
                        </td>

                        <td>
                            <div class="input-group" style="margin-left: 5px;">
                                <input class="input--style-1" type="text" placeholder="INTITULE" name="intitule" style="text-align: center;">
                            </div>
                        </td>
                        
                        <td>
                            <button class="button-ajout" type="submit">Ajouter</button>
                        </td>
                    </tr>
                    </form>


                    <?php for($i = 0; $i < count($allCodeJournal); $i++) { ?>
                        <tr>
                            <td>    
                                <p class="fw-normal mb-1"><?php echo $allCodeJournal[$i]['code']; ?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allCodeJournal[$i]['intitule']; ?></p>
                            </td>

                            <td>
                                <a href="<?php echo site_url('c_codeJournal/modifCodeJournal/'.$allCodeJournal[$i]['idcode_journal']);?>"><button class="button-modif">Modifier</button></a>
                                <a href="<?php echo site_url('c_codeJournal/deleteCodeJournal/'.$allCodeJournal[$i]['idcode_journal']);?>"><button class="button-supp">Supprimer</button></a>
                            </td>
                        </tr>
                    <?php } ?>
                    

                </tbody>
              </table>
        </div>
    </section>

