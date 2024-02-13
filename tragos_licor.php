<?php
require_once 'header.php'; 
?> 

<<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav">
    <div class="container justify-content-center">
        <a class="navbar-brand m-0" href="/nochepueba"><img src="assets/img/logoo.png" alt="..." /></a>
    </div>
</nav>
<body>
    <div class="fondoo7 d-flex justify-content-center align-items-center">
        <h1 class="bordeado">Tragos con Licor</h1>
    </div>
<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- Toasted Almond-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#toastedalmond">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/toastedalmond.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Toasted Almond</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- Toasted Almond-->

        </div> 
    </div>           
    
</section>

<!-- MODAL Rob Roy-->
<?php
require_once 'modal-licor/toasted-almond.php';
?>

</body>
<?php
require_once 'footer.php';
?>