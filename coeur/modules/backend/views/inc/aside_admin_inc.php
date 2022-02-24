<nav id="sidebar">
                <!-- Sidebar Scroll Container -->
                <div id="sidebar-scroll">
                    <!-- Sidebar Content -->
                    <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
                    <div class="sidebar-content">
                        <!-- Side Header -->
                        <div class="side-header side-content bg-white-op">
                        <img src="<?php echo base_url() ?>assets/admin/img/avatars/avatar1.jpg" style="max-width: 80px" class="img-circle" alt="<?php echo $this->session->userdata('libelle') ?>">
                        </div>
                        <!-- END Side Header -->

                        <!-- Side Content -->
                        <div class="side-content">

                            <ul class="nav-main">


                                <li class="nav-main-heading"><span class="sidebar-mini-hide">Menu principal</span></li>






                                        <li class="<?php if($this->uri->segment(3) == 'presentation_liste' or $this->uri->segment(3) == 'presentation_recup'  ) echo 'open' ?>">
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-th-list"></i><span class="sidebar-mini-hide">PRESENTATION</span></a>
                                            <ul>



                                              <?php if($this->session->userdata('niveau')==1 or $this->session->userdata('niveau')==3){ ?>
                                                    <li>
                                                        <a class="<?php if($this->uri->segment(3) == 'presentation_liste') echo 'active' ?>" href="<?php echo site_url('backend/presentation/presentation_liste'); ?>">Voir la liste</a>
                                                    </li>
                                              <?php } ?> <!-- / niveau 2 (admin standard) -->


                                            </ul>
                                        </li>




















                                        <li class="<?php if($this->uri->segment(3) == 'galerieevent_ajout' or $this->uri->segment(3) == 'galerieevent_liste' or $this->uri->segment(3) == 'galerieevent_recup'  ) echo 'open' ?>">
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-th-list"></i><span class="sidebar-mini-hide">PRODUITS PAR CATEGORIE</span></a>
                                            <ul>


                                              <?php if($this->session->userdata('niveau')==2 or $this->session->userdata('niveau')==3){ ?>
                                                    <li>
                                                        <a class="<?php if($this->uri->segment(3) == 'galerieevent_ajout') echo 'active' ?>" href="<?php echo site_url('backend/galerie/galerieevent_ajout'); ?>">Ajouter</a>
                                                    </li>
                                              <?php } ?> <!-- / niveau 2 (admin standard) -->


                                              <?php if($this->session->userdata('niveau')==1 or $this->session->userdata('niveau')==3){ ?>
                                                    <li>
                                                        <a class="<?php if($this->uri->segment(3) == 'galerieevent_liste') echo 'active' ?>" href="<?php echo site_url('backend/galerie/galerieevent_liste'); ?>">Voir la liste</a>
                                                    </li>
                                              <?php } ?> <!-- / niveau 2 (admin standard) -->


                                            </ul>
                                        </li>








                                        <li class="<?php if($this->uri->segment(3) == 'contact_ajout' or $this->uri->segment(3) == 'contact_liste' or $this->uri->segment(3) == 'contact_recup'  ) echo 'open' ?>">
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-th-list"></i><span class="sidebar-mini-hide">CONTACTS & ADRESSES</span></a>
                                            <ul>



                                              <?php if($this->session->userdata('niveau')==1 or $this->session->userdata('niveau')==3){ ?>
                                                    <li>
                                                        <a class="<?php if($this->uri->segment(3) == 'contact_liste') echo 'active' ?>" href="<?php echo site_url('backend/contact/contact_liste'); ?>">Voir la liste</a>
                                                    </li>
                                              <?php } ?> <!-- / niveau 2 (admin standard) -->


                                            </ul>
                                        </li>








                            </ul>
                        </div>
                        <!-- END Side Content -->
                    </div>
                    <!-- Sidebar Content -->
                </div>
                <!-- END Sidebar Scroll Container -->
            </nav>