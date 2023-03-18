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
                    <h2 class="title">Modification du code journal</h2>
                    <?= form_open('c_codeJournal/updateValueCodeJournal') ?>
                        <input type="hidden" name="id" value="<?php echo $detail_codeJournal[0]['idcode_journal']; ?>">
                        <div class="input-group">
                            <input class="input--style-1" type="text" name="code" value="<?php echo $detail_codeJournal[0]['code']; ?>">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="INTITULE" name="intitule" value="<?php echo $detail_codeJournal[0]['intitule']; ?>">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Modifier</button>
                        </div>
                    </form>

                        <div class="p-t-20">
                            <a href="<?php echo site_url('c_codeJournal/codeJournal');?>"><button class="btn btn--radius btn--green" type="submit">Retour</button></a>
                        </div>
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
