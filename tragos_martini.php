<?php
require_once 'header.php'; 
?> 

<<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
    <div class="container justify-content-center">
        <a class="navbar-brand m-0" href="/nochepueba"><img src="assets/img/logoo.png" alt="..." /></a>
    </div>
</nav>
<body>
    <div class="fondoo8 d-flex justify-content-center align-items-center">
        <h1 class="bordeado">Tragos con Martini</h1>
    </div>
<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- MANHATTAN-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#manhattan">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/manhattan.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Manhattan</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- MANHATTAN-->

            <!-- SBAGLIATO-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#sbagliato">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/sbagliato.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Sbagliato</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- SBAGLIATO-->

            <!-- MARTINI NEGRONI-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#martininegroni">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/martininegroni.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Martini Negroni</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- MARTINI NEGRONI-->

        </div> 
    </div>           
    
</section>

<!-- MODAL MANHATTAN-->
<?php
require_once 'modal-martini/manhattan.php';
?>

<!-- MODAL SBAGLIATO-->
<?php
require_once 'modal-martini/sbagliato.php';
?>

<!-- MODAL  MARTINI NEGRONI-->
<?php
require_once 'modal-martini/martini-negroni.php';
?>

</body>
<?php
require_once 'footer.php';
?>