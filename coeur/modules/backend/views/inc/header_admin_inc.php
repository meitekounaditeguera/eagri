<header id="header-navbar" class="content-mini content-mini-full">
                <!-- Header Navigation Right -->
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                                <img src="<?php echo base_url() ?>assets/admin/img/avatars/avatar1.jpg" alt="<?php echo $this->session->userdata('libelle') ?>">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
<!--
                                <li>
                                    <a tabindex="-1" href="<?php echo site_url('backend/profile') ?>">
                                        <i class="si si-user pull-right"></i>
                                        Profile
                                    </a>
                                </li>
 -->
                                <?php if($this->session->userdata('niveau') == 3){ ?>
                                <li>
                                    <a tabindex="-1" href="<?php echo site_url('backend/admin_liste') ?>">
                                        <i class="si si-user pull-right"></i>
                                        Les comptes ADMIN
                                    </a>
                                </li>
                                <?php } ?>



                                <li>
                                    <a tabindex="-1" href="<?php echo site_url('login/logout') ?>">
                                        <i class="si si-logout pull-right"></i>Déconnexion
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li>
                        Layout API, functionality initialized in App() -> uiLayoutApi()
                        <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                            <i class="fa fa-tasks"></i>
                        </button>
                    </li>-->
                </ul>
                <!-- END Header Navigation Right -->

                <!-- Header Navigation Left -->
                <ul class="nav-header pull-left">
                    <li class="hidden-md hidden-lg">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                            <i class="fa fa-navicon"></i>
                        </button>
                    </li>
                    <li class="hidden-xs hidden-sm">
                        <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                        <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>
                    </li>
                   <!--  <li>
                       Opens the Apps modal found at the bottom of the page, before including JS code
                       <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                           <i class="si si-grid"></i>
                       </button>
                   </li> -->
                    <li class="visible-xs">
                        <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                        <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </li>

                </ul>
                <!-- END Header Navigation Left -->
            </header>