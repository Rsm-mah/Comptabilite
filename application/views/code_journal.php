<section class="body_page">
        <div class="body_list">

            <div class="body_title">
                <h2>Codes Journals</h2>
            </div>

            <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                <tbody>

                    <tr>
                        <td>
                            <div class="input-group" style="margin-left: 5px;">
                                <input class="input--style-1" type="number" placeholder="CODE JOURNAL" name="code_journal" style="text-align: center;">
                            </div>
                        </td>

                        <td>
                            <div class="input-group" style="margin-left: 5px;">
                                <input class="input--style-1" type="text" placeholder="INTITULE" name="intitule" style="text-align: center;">
                            </div>
                        </td>
                        
                        <td>
                            <a href=""><button class="button-ajout">Ajouter</button></a>
                        </td>
                    </tr>


                    <tr>
                        <td>    
                            <p class="fw-normal mb-1">AC</p>
                        </td>

                        <td>
                            <p class="fw-normal mb-1">Achat</p>
                        </td>

                        <td>
                            <a href="<?php echo site_url('plan_comptable/modif_plan_comptable');?>"><button class="button-modif">Modifier</button></a>
                            <a href=""><button class="button-supp">Supprimer</button></a>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <p class="fw-normal mb-1">VL</p>
                        </td>

                        <td>
                            <p class="fw-normal mb-1">Ventes locales</p>
                        </td>

                        <td>
                            <a href="<?php echo site_url('plan_comptable/modif_plan_comptable');?>"><button class="button-modif">Modifier</button></a>
                            <a href=""><button class="button-supp">Supprimer</button></a>
                        </td>
                    </tr>


                </tbody>
              </table>
        </div>
    </section>

