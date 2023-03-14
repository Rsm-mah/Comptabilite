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
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

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
                    <h2 class="title">Information de votre Societe</h2>
                    <form method="POST">

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NOM" name="nom">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="OBJET" name="objet">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="SIEGE" name="siege">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="EMAIL" name="email">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="MOT DE PASSE" name="mot_de_passe">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="CAPITAL" name="capital">
                        </div>

                        <div class="row row-space">
                            <div class="col-2">                
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="TELEPHONE" name="telephone">
                                </div>
                            </div>

                            <div class="col-2">                
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="TELECOPIE" name="telecopie">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1 js-datepicker" type="text" placeholder="DATE CREATION" name="date_creation">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1 js-datepicker" type="text" placeholder="DATE DEBUT" name="date_debut">
                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="DIRIGEANT" name="dirigeant">
                                </div>
                            </div>

                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="number" placeholder="NOMBRE EMPLOYE" name="nombre_employe">
                                </div>
                            </div>
                        </div>


                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="NIF" name="nif">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="NF" name="nf">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="NRCS" name="nrcs">
                        </div>


                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="class">
                                    <option disabled="disabled" selected="selected">TENU DE COMPTE</option>
                                    <option>ARIARY</option>
                                    <option>EURO</option>
                                    <option>DOLLAR</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                            
                        
                        <div class="input-checkbox" style="display: flex;">
                            <input class="" type="checkbox">
                            <p>EURO</p>

                            <input class="" type="checkbox">
                            <p>DOLLAR</p>

                            <input class="" type="checkbox">
                            <p>MUR</p>
                        </div>

                        

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">OK</button>
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

    <script src="<?php echo base_url('assets/js/global.js');?>"></script>

</body>

</html>
