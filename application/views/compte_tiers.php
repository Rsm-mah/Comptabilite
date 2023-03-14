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
    <title>Inscription</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css');?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/datepicker/daterangepicker.css');?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/css/main.css');?>" rel="stylesheet" media="all">
</head>

<body>
    <section class="body_page">
        <div class="body_list">

            <div class="body_title">
                <h2>Comptes Tiers</h2>
            </div>

            <table class="table align-middle mb-0 bg-white" style="text-align: center;">
                <tbody>

                    <tr>
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
                            <a href=""><button>Ajouter</button></a>
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
                            <a href="<?php echo site_url('plan_comptable/modif_plan_comptable');?>"><button>Modifier</button></a>
                            <a href=""><button>Supprimer</button></a>
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
                            <a href="<?php echo site_url('plan_comptable/modif_plan_comptable');?>"><button>Modifier</button></a>
                            <a href=""><button>Supprimer</button></a>
                        </td>
                    </tr>


                </tbody>
              </table>
        </div>
    </section>
</body>

</html>
