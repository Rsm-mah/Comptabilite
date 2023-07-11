<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Identité de l'entreprise</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
 

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/datepicker/daterangepicker.css');?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Inscription</h2>
                    <form action="<?php echo site_url('c_inscription/inscriptionprofil');?>" method="post">

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NOM" name="nom" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="PRENOM" name="prenom">
                        </div>

                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="genre">
                                    <?php for($i = 0; $i < count($genre); $i++) { ?>
                                        <option value="<?php echo $genre[$i]['idgenre']; ?>"><?php echo $genre[$i]['nomgenre']; ?></option>
                                  <?php  } ?>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="date" name="date_naissance" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="EMAIL" name="email" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="MOT DE PASSE" name="mot_de_passe" required>
                        </div>
                        

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green suivant" type="submit">suivant</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datepicker/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datepicker/daterangepicker.js');?>"></script>
    <script src="<?php echo base_url('assets/js/parsley.js');?>"></script>
    <script src="<?php echo base_url('assets/js/global.js');?>"></script>
    

</body>

</html>
