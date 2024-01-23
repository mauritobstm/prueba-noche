<?php
require_once 'header.php'; 
?> 

<<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
    <div class="container justify-content-center">
        <a class="navbar-brand m-0" href="/nochepueba"><img src="assets/img/logoo.png" alt="..." /></a>
    </div>
</nav>
<body>
    <div class="fondoo3 d-flex justify-content-center align-items-center">
        <h1 class="bordeado">Tragos con Tequila</h1>
    </div>
<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- TEQUILA SUNRISE-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#tequilasunrise">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/tequilasunrise.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Tequila Sunrise</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- TEQUILA SUNRISE-->

            <!-- PALOMA-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#paloma">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/paloma.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Paloma</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- PALOMA-->

            <!-- EL DIABLO-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#eldiablo">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/eldiablo.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">El Diablo</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- EL DIABLO-->

            <!-- TEQUILA SMASH-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#tequilasmash">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/tequilasmash.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Tequila Smash</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- TEQUILA SMASH-->

        </div> 
    </div>           
    
</section>

<!-- MODAL TEQUILA SUNRISE-->
<?php
require_once 'modal-tequila/tequila-sunrise.php';
?>

<!-- MODAL PALOMA-->
<?php
require_once 'modal-tequila/paloma.php';
?>

<!-- MODAL EL DIABLO-->
<?php
require_once 'modal-tequila/el-diablo.php';
?>

<!-- MODAL TEQUILA SMASH-->
<?php
require_once 'modal-tequila/tequila-smash.php';
?>

</body>
<?php
require_once 'footer.php';
?>