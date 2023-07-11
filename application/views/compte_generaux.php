    <section class="body_page">
        <div class="body_list">

            <div class="body_title">
                <h2>Plans Comptables Generaux</h2>
            </div>

            <table class="table align-middle mb-0 bg-white">
                <tbody>
                    <?= form_open('c_compteGeneraux/addCompteGeneraux') ?>
                        <tr style="text-align: center;">
                            <td>
                                <div class="input-group" style="margin-left: 5px;">
                                    <input class="input--style-1" type="number" placeholder="NUMERO DE COMPTE" name="numero_compte" style="text-align: center;">
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

                    <?php for($i = 0; $i < count($compteGeneraux); $i++) { ?>
                        <tr>
                            <td>    
                                <p class="fw-normal mb-1"><?php echo $compteGeneraux[$i]['numero']; ?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $compteGeneraux[$i]['intitule']; ?></p>
                            </td>

                            <td style="text-align: center;">
                                <a href="<?php echo site_url("c_compteGeneraux/modifCompteG/".$compteGeneraux[$i]['idcompte_generaux']);?>" class="link-modif"><i class="far fa-edit"></i></a>
                                <a href="<?php echo site_url("c_compteGeneraux/deleteCompteGeneraux/".$compteGeneraux[$i]['idcompte_generaux']);?>" class="link-supp"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php  } ?>


                </tbody>
              </table>
        </div>
    </section>

