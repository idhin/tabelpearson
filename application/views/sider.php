<body>
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="alpha-app">
            <div class="page-header">
                <nav class="navbar navbar-expand primary">
                    <section class="material-design-hamburger navigation-toggle">
                        <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse material-design-hamburger__icon">
                            <span class="material-design-hamburger__layer"></span>
                        </a>
                    </section>
                    <a class="navbar-brand" href="#">Admin Kuisioner</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline my-2 my-lg-0 search">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <label for="search" class="active"><i class="material-icons search-icon">search</i></label>
                            <a href="#" id="close-search-input"><i class="material-icons">close</i></a>
                        </form>
                        <ul class="navbar-nav ml-auto">
                            <li class="d-md-block d-lg-none nav-item">
                                <a class="nav-link search-link" href="#"><i class="material-icons">search</i></a>
                            </li>
                            <a href="<?= base_url(); ?>user/logout"><button type="button" class="btn btn-danger waves-effect waves-light">Keluar</button></a>
                        </ul>
                    </div>
                </nav>
            </div>
            </div>
           