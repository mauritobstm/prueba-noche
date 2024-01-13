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
    <div class="fondoo d-flex justify-content-center align-items-center">
        <h1 class="bordeado">Tragos con Vodka</h1>
    </div>
<section class="page-section bg-dark" id="portfolio">
    <div class="container mt-2">
        <div class="row justify-content-center">
            <!-- VODKA MARTINI-->
            <div class="col-lg-4 col-sm-6 mb-4 ">

                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#vodkamartini">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/martinivodka.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Vodka Martini</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- VODKA MARTINI-->

            <!-- BLOODY MARY-->
            <div class="col-lg-4 col-sm-6 mb-4">
                        
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#bloodymary">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/bloodymary.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Bloody Mary</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- BLOODY MARY-->
            
            <!-- COSMOPOLITAN-->
            <div class="col-lg-4 col-sm-6 mb-4">
                        
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#cosmopolitan">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/cosmopolitan.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Cosmopolitan</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- COSMOPOLITAN-->

            <!-- WHITE RUSSIAN-->
            <div class="col-lg-4 col-sm-6 mb-4">
                        
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#whiterussian">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/whiterussian.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">White Russian</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- WHITE RUSSIAN-->

            <!-- SCREWDRIVER-->
            <div class="col-lg-4 col-sm-6 mb-4">
                        
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#screwdriver">
                        <div class="portfolio-hover bg-dark bg-opacity-50">
                            <div class="portfolio-hover-content"><h2>Ver Receta</h2></div>
                        </div>
                        <img class="img-fluid" src="assets/img/portfolio/screwdriver.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Screwdriver</div>
                        <div class="portfolio-caption-subheading text-muted">Receta</div>
                    </div>
                </div>
            </div>
            <!-- SCREWDRIVER-->
        </div> 
    </div>           
    
</section>

<!-- MODAL VODKA MARTINI-->
<div class="portfolio-modal modal fade" id="vodkamartini" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- detalles del proyecto-->
                                <h2 class="text-uppercase">Vodka Martini</h2>
                                <img class="img-fluid d-block mx-auto mt-5" src="assets/img/portfolio/martinivodka.jpg" alt="..." />
                                
                                <ul class="list-inline"><strong>Ingredientes</strong>
                                    <li>Vodka: 50 ml</li>
                                    <li>Martini (cualquier marca): 15 ml</li>
                                    <li>Limón: una rodaja</li>
                                    <li>Aceituna verde: hasta 3 (opcional)</li>
                                </ul>
                                
                                <ul class="list-inline"><strong>Preparación</strong>
                                    <li>Llena una coctelera o un vaso con hielo.</li>
                                    <li>Agrega 50 ml de Vodka (1 medida).</li>
                                    <li>Añade 15 ml de Martini (1/3 medida).</li>
                                    <li>Agrega una pizca de limón.</li>
                                    <li>Agrega una aceituna verde.</li>
                                    <li>Agita enérgicamente durante 15 segundos.</li>
                                    <li>Sirve en una copa de cóctel previamente enfriada.</li>
                                    <li><strong>Espero que te guste. ¡Salud!</strong> 🍹</li>
                                </ul>
                                <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- MODAL VODKA MARTINI-->

<!-- MODAL BLOODY MARY-->
<div class="portfolio-modal modal fade" id="cosmopolitan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- detalles del proyecto-->
                                <h2 class="text-uppercase">Cosmopolitan</h2>
                                <img class="img-fluid d-block mx-auto mt-5" src="assets/img/portfolio/cosmopolitan.jpg" alt="..." />
                                
                                <ul class="list-inline"><strong>Ingredientes</strong>
                                    <li>Vodka: 50 ml</li>
                                    <li>Jugo de tomate: 120 ml</li>
                                    <li>Jugo de limón: 15 ml</li>
                                    <li>Salsa picante: 2 gotas</li>
                                    <li>Sal de apio: 1 pizca</li>
                                    <li>Pimienta negra molida: 1 pizca</li>
                                </ul>
                                
                                <ul class="list-inline"><strong>Preparación</strong>
                                <li>Llena una coctelera o vaso con hielo.</li>
                                <li>Agrega 50 ml de vodka (1 medida).</li>
                                <li>Añade 120 ml de jugo de tomate (2 de 1/2 medidas).</li>
                                <li>Agrega 15 ml de jugo de limón (1/3 medida).</li>
                                <li>Agrega 2 gotas de salsa picante.</li>
                                <li>Añade 1 pizca de sal de apio.</li>
                                <li>Agrega 1 pizca de pimienta negra molida.</li>
                                <li>Agita bien para combinar y enfriar la mezcla.</li>
                                <li>Cuela la mezcla en un vaso alto lleno de hielo fresco.</li>
                                <li>(opcional) Decora con un tallo de apio, una aceituna verde y un gajo de limón.</li>
                                <li><strong>Espero que te guste. ¡Salud!</strong> 🍹</li>
                                </ul>
                                <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- MODAL BLOODY MARY-->

<!-- MODAL COSMOPOLITAN-->
<div class="portfolio-modal modal fade" id="bloodymary" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- detalles del proyecto-->
                                <h2 class="text-uppercase">Bloody Mary</h2>
                                <img class="img-fluid d-block mx-auto mt-5" src="assets/img/portfolio/bloodymary.jpg" alt="..." />
                                
                                <ul class="list-inline"><strong>Ingredientes</strong>
                                    <li>Vodka: 45 ml</li>
                                    <li>Licor Bols Triple sec: 15 ml</li>
                                    <li>Jugo de lima o limón: 15 ml</li>
                                    <li>Jugo de arándanos rojos: 30 ml</li>
                                </ul>
                                
                                <ul class="list-inline"><strong>Preparación</strong>
                                <li>Llena una coctelera o vaso con hielo.</li>
                                <li>Agrega 45 ml de vodka (1 medida).</li>
                                <li>Añade 15 ml de Licor Bols triple sec (1/3 medida).</li>
                                <li>Agrega 15 ml de jugo de lima o limón (1/3 medida).</li>
                                <li>Añade 30 ml de jugo de arándanos rojos (2/3 medida).</li>
                                <li>Agita enérgicamente durante 15 segundos.</li>
                                <li>Sirve en una copa previamente enfriada.</li>
                                <li>(opcional) Decora con una piel de lima.</li>
                                <li><strong>Espero que te guste. ¡Salud!</strong> 🍹</li>
                                </ul>
                                <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- MODAL COSMOPOLITAN-->

<!-- MODAL WHITE RUSSIAN-->
<div class="portfolio-modal modal fade" id="whiterussian" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- detalles del proyecto-->
                                <h2 class="text-uppercase">White Russian</h2>
                                <img class="img-fluid d-block mx-auto mt-5" src="assets/img/portfolio/whiterussian.jpg" alt="..." />
                                
                                <ul class="list-inline"><strong>Ingredientes</strong>
                                    <li>45 ml de vodka</li>
                                    <li>30 ml de licor de café</li>
                                    <li>30 ml de crema de leche</li>
                                </ul>
                                
                                <ul class="list-inline"><strong>Preparación</strong>
                                <li>Agrega en una coctelera o un vaso el vodka, el licor de café y la crema de leche.</li>
                                <li>Agita bien para combinar y enfriar la mezcla.</li>
                                <li>Cuela la mezcla en un vaso lleno de hielo fresco.</li>
                                <li>(opcional) Decora con una pizca de canela en polvo.</li>
                                <li><strong>Espero que te guste. ¡Salud!</strong> 🍹</li>
                                </ul>
                                <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- MODAL WHITE RUSSIAN-->

<!-- MODAL SCREWDRIVER-->
<div class="portfolio-modal modal fade" id="screwdriver" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- detalles del proyecto-->
                                <h2 class="text-uppercase">Screwdriver</h2>
                                <img class="img-fluid d-block mx-auto mt-5" src="assets/img/portfolio/screwdriver.jpg" alt="..." />
                                
                                <ul class="list-inline"><strong>Ingredientes</strong>
                                    <li>45 ml de vodka</li>
                                    <li>120 ml de jugo de naranja</li>
                                </ul>
                                
                                <ul class="list-inline"><strong>Preparación</strong>
                                <li>Llena un vaso alto con hielo.</li>
                                <li>Agrega el vodka y el jugo de naranja.</li>
                                <li>Mezcla bien y decora con una rodaja de naranja.</li>
                                <li><strong>Espero que te guste. ¡Salud!</strong> 🍹</li>
                                </ul>
                                <button class="btn btn-danger btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<!-- MODAL SCREWDRIVER-->

</body>
<?php
require_once 'footer.php';
?>