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
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="search-result-list user-search">
                                <li>
                                    <img src="<?= base_url(); ?>assets/images/avatars/avatar2.png" alt="">
                                    <p>Tom Manchester<br>(Works at <span class="search-input-value"></span>)</p>
                                </li>
                                <li>
                                    <img src="<?= base_url(); ?>assets/images/avatars/avatar1.png" alt="">
                                    <p>Luke Williams<br>(Lives in <span class="search-input-value"></span>)</p>
                                </li>
                                <li>
                                    <img src="<?= base_url(); ?>assets/images/avatars/avatar4.jpg" alt="">
                                    <p>People near:<br><span class="search-input-value"></span></p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="search-result-list social-search">
                                <li>
                                    <div class="social-search-icon facebook-icon-bg">
                                        <i class="fab fa-facebook-f"></i>
                                    </div>
                                    <div class="social-search-text">
                                        <p><span class="search-input-value"></span> on Facebook</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="social-search-icon twitter-icon-bg">
                                        <i class="fab fa-twitter"></i>
                                    </div>
                                    <div class="social-search-text">
                                        <p><span class="search-input-value"></span> on Twitter</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="social-search-icon google-icon-bg">
                                        <i class="fab fa-google-plus-g"></i>
                                    </div>
                                    <div class="social-search-text">
                                        <p><span class="search-input-value"></span> on Google+</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="search-result-list article-search">
                                <li>
                                    <p>Lorem ipsum dolor sit amet, consectetur <span class="search-input-value"></span> adipiscing elit, sunt in culpa quifdaasd quis.</p>
                                    <span class="search-article-date">06 Dec, 2018</span>
                                </li>
                                <li>
                                    <p>Duis non semper sapien. Morbi imperdiet velit in <span class="search-input-value"></span> bibendum lobortis. Integer arcu urna, elementum in pellentesque nec, finibus at nisi.</p>
                                    <span class="search-article-date">19 Nov, 2017</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Quick Search Results -->
            <div class="page-sidebar">
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="<?= base_url(); ?>assets/images/avatars/avatar1.png">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p><?= $this->session->userdata['pelangganLogin']['nama']; ?></p>
                                <span><?= $this->session->userdata['pelangganLogin']['email']; ?></span>
                            </a>
                        </div>
                    </div>
                    <div class="page-sidebar-menu">
                        <div class="page-sidebar-settings hidden">
                            <ul class="sidebar-menu list-unstyled">
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">inbox</i>Inbox</a></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred</a></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">history</i>History</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
                            </ul>
                        </div>
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
                                        <i class="material-icons">mode_edit</i>List Kuisioner
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-footer">
                        <p class="copyright">Stacks ©</p>
                        <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                    </div>
                </div>
            </div>