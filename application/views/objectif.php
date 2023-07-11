<form action="<?php echo site_url('c_objectif');?>" method="post">

    <div class="container">
        <div class="row">
            <div class="select-option">
                <div class="input">
                    <select name="objectif">
                        <option value="" selected>Objectif</option>
                        <?php for ($i=0; $i < count($objectif); $i++) { ?>
                            <option value="<?php echo $objectif[$i]['idobjectif'];?>"><?php echo $objectif[$i]['nomobjectif'];?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="input">
                    <input type="text" placeholder="POID A PERDRE" name="poid">
                </div>

                <div class="input">
                    <button>ok</button>
                </div>
            </div>
        </div>
    </div>

    <section class="categories spad">
        <div class="container">
            <div class="row">
                <center><h2 style="margin-bottom : 20px ">Plats :</h2></center>
                <?php for ($i=0; $i < count($plat); $i++) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="plat set-bg">
                            <div class="">
                                <h4><?php echo $plat[$i]['plat'] ;?></h4>
                                <center><p><?php echo $plat[$i]['calorie'] ;?> Calories</p></center>
                                <center> <p>Durée : Prix :</p> </center>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="row">
                <center><h2 style="margin-bottom : 20px ">Sports :</h2></center>
                <?php for ($i=0; $i < count($sport); $i++) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="plat set-bg">
                            <div class="">
                                <h4><?php echo $sport[$i]['sport'] ;?></h4>
                                <center><p><?php echo $sport[$i]['calorieperdue'] ;?> Calories à perdre</p></center>
                                <center> <p>Durée : Prix :</p> </center>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        
    </section>


</form>