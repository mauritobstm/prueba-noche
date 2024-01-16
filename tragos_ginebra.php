<?php
require_once 'header.php'; 
?> 

<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="/nochepueba"><img src="assets/img/logoo.png" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="sombra nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="sombra nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="sombra nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="sombra nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="sombra nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<body>
    <div class="fondogin d-flex justify-content-center align-items-center">
        <h1 class="bordeado">Tragos con Ginebra</h1>
    </div>

<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- GIN TONIC-->
            <div class="col-lg-4 col-sm-6 mb-4 ">
                
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#gintonic">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/gintonic.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Gin Tonic</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- GIN TONIC-->

            <!-- NEGRONI-->
            <div class="col-lg-4 col-sm-6 mb-4 ">
                
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#negroni">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/negroni.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Negroni</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- NEGRONI-->

            <!-- TOM COLLINS-->
            <div class="col-lg-4 col-sm-6 mb-4 ">
                
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#tomcollins">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/tomcollins.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Tom Collins</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- TOM COLLINS-->

            <!-- DRY MARTINI-->
            <div class="col-lg-4 col-sm-6 mb-4 ">
                
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#drymartini">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/drymartini.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Dry Martini</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- DRY MARTINI-->

            <!-- BRAMBLE-->
            <div class="col-lg-4 col-sm-6 mb-4 ">
                
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#bramble">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/bramble.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bramble</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- BRAMBLE-->

            <!-- GINLET-->
            <div class="col-lg-4 col-sm-6 mb-4 ">
                
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#ginlet">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/ginlet.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Ginlet</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- GINLET-->
        </div> 
    </div>           
    
</section>

<!-- GIN TONIC-->
<?php
require_once 'modal-ginebra/gin-tonic.php';
?>

<!-- NEGRONI-->
<?php
require_once 'modal-ginebra/negroni.php';
?>

<!-- TOM COLLINS-->
<?php
require_once 'modal-ginebra/tom-collins.php';
?>

<!-- DRY MARTINI-->
<?php
require_once 'modal-ginebra/dry-martini.php';
?>

<!-- BRAMBLE-->
<?php
require_once 'modal-ginebra/bramble.php';
?>

<!-- GINLET-->
<?php
require_once 'modal-ginebra/ginlet.php';
?>

</body>
<?php
require_once 'footer.php';
?>