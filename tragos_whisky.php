<?php
require_once 'header.php'; 
?> 

<<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
    <div class="container justify-content-center">
        <a class="navbar-brand m-0" href="/nochepueba"><img src="assets/img/logoo.png" alt="..." /></a>
    </div>
</nav>
<body>
    <div class="fondoo5 d-flex justify-content-center align-items-center">
        <h1 class="bordeado">Tragos con Whisky</h1>
    </div>
<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- Rob Roy-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#robroy">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/robroy.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Rob Roy</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- Rob Roy-->

            <!-- John Collins-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#johncollins">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/johncollins.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">John Collins</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- John Collins-->

            <!-- Godfather-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#godfather">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/godfather.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Godfather</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- Godfather-->

            <!-- Old Fashioned-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#oldfashioned">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/oldfashioned.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Old Fashioned</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- Old Fashioned-->

        </div> 
    </div>           
    
</section>

<!-- MODAL Rob Roy-->
<?php
require_once 'modal-whisky/robroy.php';
?>

<!-- MODAL John Collins-->
<?php
require_once 'modal-whisky/johncollins.php';
?>

<!-- MODAL Godfather-->
<?php
require_once 'modal-whisky/godfather.php';
?>

<!-- MODAL Old Fashioned-->
<?php
require_once 'modal-whisky/oldfashioned.php';
?>

</body>
<?php
require_once 'footer.php';
?>