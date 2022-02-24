 <!-- Start Navigation -->
            <div class="header">
                <!-- Main header -->
                <div class="main_header">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-3 col-sm-4 col-4">
                                <a class="nav-brand" href="<?php echo base_url() ?>">
                                    <img src="<?php echo base_url() ?>assets/img/logo2.png" class="logo" alt="" />
                                </a>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-4 col-8">
                                <!-- Show on Mobile & iPad -->
                                <div class="blocks shop_cart d-xl-none d-lg-none">

                                    <div class="single_shop_cart">
                                        <div class="ss_cart_left">
                                            <a href="javascript:void(0)" class="cart_box"><i class="lni lni-phone"></i></a>
                                        </div>
                                        <div class="ss_cart_content">
                                            <strong>Contactez-nous:</strong>
                                            <span>+225 01 11 11 56 / 01 77 44 44</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Show on Desktop -->
                                <div class="blocks shop_cart d-none d-xl-block d-lg-block">

                                <div class="single_shop_cart">

                                        <div class="ss_cart_content" >
                                            <span  class="sample">Les délices Assamelan !!!</span>
                                        </div>
                                    </div>

                                    <div class="single_shop_cart">
                                        <div class="ss_cart_left">
                                            <a href="javascript:void(0)" class="cart_box"><i class="lni lni-phone"></i></a>
                                        </div>
                                        <div class="ss_cart_content">
                                            <strong>Contactez-nous:</strong>
                                            <span>+225 01 11 11 56 / 01 77 44 44</span>
                                        </div>
                                    </div>
                                    <div class="single_shop_cart">
                                        <div class="ss_cart_left">
                                            <a href="#"  class="cart_box"><i class="ti-shopping-cart"></i></a>
                                        </div>
                                        <div class="ss_cart_content">
                                            <strong>Ecrivez-nous</strong>
                                            <span>info@delissa-ci.com</span>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

                <div class="header_nav">
                    <div class="container">
                        <div class="row align-item-center">


                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <nav id="navigation" class="navigation navigation-landscape">
                                    <div class="nav-header">
                                        <div class="nav-toggle"></div>
                                    </div>
                                    <div class="nav-menus-wrapper" style="transition-property: none;">
                                        <ul class="nav-menu">

                                            <li class="active"><a href="<?php echo base_url() ?>">Accueil<span class="submenu-indicator"></span></a>

                                            </li>

                                            <li><a href="#"> Produits référencés par catégories<span class="submenu-indicator"></span></a>
                                                <ul class="nav-dropdown nav-submenu">
                    <?php if ($categorie != null) :  ?>
                      <?php foreach ($categorie as $row) :  ?>
                                                    <li><a href="<?php echo base_url() ?>produit/liste/<?php echo $row->id; ?>"><?php echo $row->titre_actu; ?> </a></li>

                  <?php endforeach ?>
                <?php endif ?>
                                                </ul>
                                            </li>



                                            <li><a href="<?php echo base_url() ?>presentation/pre/1">Qui sommes nous ?</a>

                                            </li>


                                            <li><a href="<?php echo base_url() ?>presentation/pre/2">Notre vision de la qualité</a>

                                            </li>




                                            </li>
                                            <li><a href="<?php echo base_url() ?>presentation/pre/3">Pays déservis</a>

                                            </li>


                                            <li><a href="<?php echo base_url() ?>contact">Contacts</a>


                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End Navigation -->