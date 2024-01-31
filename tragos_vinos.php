<?php
require_once 'header.php'; 
?> 

<<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
    <div class="container justify-content-center">
        <a class="navbar-brand m-0" href="/nochepueba"><img src="assets/img/logoo.png" alt="..." /></a>
    </div>
</nav>
<body>
    <div class="fondoo4 d-flex justify-content-center align-items-center">
        <h1 class="bordeado">Tragos con Vinos</h1>
    </div>
<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- SANGRIA-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#sangria">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/sangria.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Sangia</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- SANGRIA-->

             <!-- BELLINI-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#bellini">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/bellini.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bellini</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- BELLINI-->

             <!-- CLERICO-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#clerico">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/clerico.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Clérico </div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- CLERICO-->

            <!-- MARGARITA DE VINO-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#margaritadevino">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/margaritadevino.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Margarita de vino</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!--  MARGARITA DE VINO-->

            <!-- VINO CALIENTE-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#vinocaliente">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/vinocaliente.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading"> Vino caliente</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!--  VINO CALIENTE-->

        </div> 
    </div>           
    
</section>

<!-- MODAL SANGRIA-->
<?php
require_once 'modal-vino/sangria.php';
?>

<!-- MODAL BELLINI-->
<?php
require_once 'modal-vino/bellini.php';
?>

<!-- MODAL CLERICO-->
<?php
require_once 'modal-vino/clerico.php';
?>

<!-- MODAL MARGARITA DE VINO-->
<?php
require_once 'modal-vino/margarita-de-vino.php';
?>

<!-- MODAL VINO CALIENTE-->
<?php
require_once 'modal-vino/vino-caliente.php';
?>

</body>
<?php
require_once 'footer.php';
?>