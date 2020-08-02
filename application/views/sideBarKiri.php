<!-- Page Header -->
<div class="search-results">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="search-results-header">
                                <h4>Quick Search Results</h4>
                                <a href="#" id="closeSearch"><i class="material-icons">close</i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Quick Searchh Results -->
            <div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="<?= base_url(); ?>assets/images/avatars/avatar1.png">
                        </div>
                        <div class="sidebar-profile-info">
                                <p><?= $this->session->userdata['pelangganLogin']['nama']; ?></p>
                                <span><?= $this->session->userdata['pelangganLogin']['email']; ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                        <div class="sidebar-accordion-menu">
                            <ul class="sidebar-menu list-unstyled">
                                <li>
                                    <a href="<?= base_url(); ?>Kuisioner/" class="waves-effect waves-grey">
                                        <i class="material-icons">settings_input_svideo</i>Dashboard
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="<?= base_url(); ?>Kuisioner/tambahKuisioner" class="waves-effect waves-grey">
                                        <i class="material-icons">mode_edit</i>Tambah Kuisioner
                                    </a>
                                </li>

                                <li>
                                    <a href="<?= base_url(); ?>Kuisioner/listKuisioner" class="waves-effect waves-grey">
                                        <i class="material-icons">mode_edit</i>Daftar Kuisioner
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer">
                        <p class="copyright">Form Pearson ©</p>
                    </div>
                </div>
            </div>