<section class="body_page">
        <div class="body_list">
            <div class="body_title">
                <h2>Balance</h2>
            </div>

            <table class="table align-middle mb-0 bg-white">
                <tbody>
                    <tr>
                        <th>NUMERO COMPTE</th>
                        <th>INTITULE DES COMPTES</th>
                        <th>DEBIT</th>
                        <th>CREDIT</th>
                    </tr>

                    <?php for ($i=0; $i < count($allbalance); $i++) { ?>
                        <tr>
                            <td>    
                                <p class="fw-normal mb-1"><?php echo $allbalance[$i]['num_compte'] ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allbalance[$i]['intitule'] ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allbalance[$i]['debit'] ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo $allbalance[$i]['credit'] ;?></p>
                            </td>
                        </tr>
                    <?php } ?>
                    
                        <tr>
                            <td>    
                                <p class="fw-normal mb-1"></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><strong>TOTAL</strong></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo intval($sumdebitBalance[0]['sumDebit']) ;?></p>
                            </td>

                            <td>
                                <p class="fw-normal mb-1"><?php echo intval($sumcreditBalance[0]['sumCredit']) ;?></p>
                            </td>
                        </tr>
                </tbody>
              </table>
        </div>

        <div class="body_button_grandLivre">
            <?php if ($sumdebitBalance[0]['sumDebit'] != $sumcreditBalance[0]['sumCredit']) { ?>
                <p class="fw-normal mb-1" style="color: red;">La balance n'est pas encore equilibrée</p>
                <a href=""><button class="button-grandlivre" disabled style="background: rgb(172, 169, 169);">Grand Livre</button></a>
            <?php }else { ?>
                <p class="fw-normal mb-1" style="color: green;">La balance est maintenant equilibrée</p>
                <a href="<?php echo site_url('c_grand_livre/grandlivre');?>"><button class="button-grandlivre" style="background: rgb(59, 58, 58);">Grand Livre</button></a>
            <?php } ?>       
        </div>
</section>

