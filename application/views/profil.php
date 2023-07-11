<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodeiblog | Template</title>

    <!-- Google Font -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet"> -->

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elegant-icons.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css');?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Header Section Begin -->
    <?php
        if ($this->session->userdata('isadmin') != 1) { ?>
            <header class="header">
                <div class="header__top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                                <div class="header__humberger">
                                    <i class="fa fa-bars humberger__open"></i>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-10 order-md-2 order-3">
                                <nav class="header__menu">
                                    <ul>
                                        <li><a href="<?php echo site_url('c_accueil');?>">Accueil</a></li>
                                            <div class="header__megamenu__wrapper">
                                                
                                            </div>
                                        </li>
                                        <li><a href="<?php echo site_url('c_objectif');?>">Objectif</a></li>
                                        <li><a href="<?php echo site_url('c_profil');?>">Profil</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                                <div class="header__search">
                                    <i class="fa fa-search search-switch"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header__logo">
                                <a href="./index.html"><img src="<?php echo base_url('assets/img/REZIME.png');?>" alt=""></a>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </header> 
        <?php } else { ?>
                <header class="header">
                <div class="header__top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                                <div class="header__humberger">
                                    <i class="fa fa-bars humberger__open"></i>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-10 order-md-2 order-3">
                                <nav class="header__menu">
                                    <ul>
                                        <li><a href="">Statistique</a></li>
                                        <li class="dropdown"><a href="">Crud</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="<?php echo site_url('c_tableau/tableau_regime');?>">Régimes</a></li>
                                                <li><a href="<?php echo site_url('c_objectif/tableau_sportive');?>">Activités sportives</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url('c_objectif');?>">Objectif</a></li>
                                        <li><a href="<?php echo site_url('c_profil');?>">Profil</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                                <div class="header__search">
                                    <i class="fa fa-search search-switch"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header> 
        <?php }?>
    <!-- Header Section End -->

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0" style="width:70%;">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <h2><?php echo $user['nom'];?></h2>
              <h3><?php echo $user['prenom'];?></h3>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                    <div class="col-6 mb-3">
                    <h6>Date de naissance</h6>
                    <p class="text-muted"><?php echo $user['datedenaissance'];?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $user['email'];?></p>
                  </div>
                </div>

                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Taille</h6>
                    <p class="text-muted"><?php echo $user['taille'];?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Poids</h6>
                    <p class="text-muted"><?php echo $user['poids'];?></p>
                  </div>
                </div>

                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Monnaie</h6>
                    <p class="text-muted"></p>
                  </div>
                  <div class="col-6 mb-3">
                    <button><a href="">Rajouter</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
    
    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.sticky.js');?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/main.js');?>"></script>

</body>

</html>