<!DOCTYPE html>
<html lang="en">
    <?php
        require_once 'header.php'; 
    ?>
    <body id="page-top">
        <!-- Navigation-->
        <?php
        require_once 'nav.php'; 
        ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="sombra masthead-subheading">¡Bienvenidos!</div>
                <div class="sombra masthead-heading text-uppercase">Disfruten de sus tragos</div>
                <a class="sombra btn btn-danger btn-xl text-uppercase" href="#portfolio">Leer Más</a>
            </div>
        </header>
        
        <!-- Portfolio Grid-->
        <section class="page-section bg-dark pt-5" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <!---->
                    <h3 class="section-subheading text-light pb-0">Aqui encontrarás recetas de tragos y cócteles para preparar en casa, hay muchas opciones para elegir. Puedes optar por bebidas frutales, con esencias, dulces o más exóticas. Algunas opciones clásicas son el Tequila Margarita o el Mojito, mientras que otras combinaciones más atrevidas incluyen el Bloody Mary. Si deseas buscar por tipo de licor, puedes revisar nuestras categorías. ¡Salud! 🍸</h3>
                <h2 class="section-heading text-light">. . .</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="tragos_vodka.php">
                                <div class="portfolio-hover bg-dark bg-opacity-50">
                                    <div class="portfolio-hover-content"><?php require 'fat.php'; ?></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/vodka.jpeg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tragos con Vodka</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="tragos_ginebra.php">
                                <div class="portfolio-hover bg-dark bg-opacity-50">
                                    <div class="portfolio-hover-content"><?php require 'fat.php'; ?></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/gin1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tragos con Ginebra</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="tragos_ron.php">
                                <div class="portfolio-hover bg-dark bg-opacity-50">
                                    <div class="portfolio-hover-content"><?php require 'fat.php'; ?></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/foto-ron.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tragos con Ron</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="tragos_tequila.php">
                                <div class="portfolio-hover bg-dark bg-opacity-50">
                                    <div class="portfolio-hover-content"><?php require 'fat.php'; ?></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/tequila.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Tragos con Tequila</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover bg-dark bg-opacity-50">
                                    <div class="portfolio-hover-content"><?php require 'fat.php'; ?></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/5.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover bg-dark bg-opacity-50">
                                    <div class="portfolio-hover-content"><?php require 'fat.php'; ?></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/6.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- tragos Scroll-->
        <section class="page-section bg-dark p-0" id="portfolio">
            <div class="carrusel">
            <h2 class="text-center section-heading text-white">Tragos Famosos</h2>
                <div class="carrusel-items">
                    <div class="carrusel-item">
                        <?php
                            require_once 'carrusel.php';
                        ?>
                    </div>
                </div>
            </div>
        <script src="carru.js"></script>
        </section>

        <!-- objetivos-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mb-5">Objetivos</h2>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/objetivos1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Variedad de Recetas</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Proporcionar una amplia gama de recetas de cócteles para satisfacer diferentes gustos y preferencias.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/objetivos2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Facilidad de Navegación</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Diseñar una interfaz de usuario intuitiva y fácil de navegar para que los visitantes encuentren rápidamente las recetas que están buscando.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/objetivos3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Eventos y Celebraciones</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Mantener a los usuarios informados sobre eventos relacionados con cócteles, festivales de bebidas y celebraciones especiales.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/objetivos4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="subheading">Información Sobre La Historia De Los Cócteles</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Nos gustaría ofrecerles la historia sobre los cocteles mas famosos y datos interesantes.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Sea Parte
                                <br />
                                De Nuestra
                                <br />
                                Historia!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section>

        <!-- donaciones-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">DONACIONES</h2>
                    <h3 class="section-subheading text-white">Ayudanos a tener nuestro propio dominio y a seguir creciendo.</h3>
                </div>

                <div class="d-flex flex-column align-items-center">
                    <a href="https://cafecito.app/nochecaribena" target="_blank" style="text-decoration: none;"><h3 class="text-white p-0">Cafecito</h3></a>
                    <a href="https://cafecito.app/nochecaribena" target="_blank"><img src="assets/img/logos/cafecito_logo.svg" alt="" style="width: 200px; height: auto; margin-bottom: 50px;"></a>
                    <a href="https://www.paypal.com/donate/?hosted_button_id=S6GYYSS9FENY2#" target="_blank" style="text-decoration: none;"><h3 class="text-white">Pay Pal</h3></a>
                    <a href="https://www.paypal.com/donate/?hosted_button_id=S6GYYSS9FENY2#" target="_blank" style="text-decoration: none;"><img class="" src="assets/img/logos/paypal_logo2.svg" alt="" style="width: 200px; height: auto;"></a>
                </div>
            </div>
        </section>

        <!-- Contact-->
        <section class="page-section mt-3 bg-info" id="contacto" style="background-color: #212529;background-image: url('assets/img/fondo-noche.png');background-repeat: no-repeat;background-position: center; background-size: cover;">
            <div class="container">
                <div class="text-center">
                    <h2 class="sombra section-heading text-uppercase text-white">Contacto</h2>
                    <h3 class="sombra section-subheading text-white">Contactate con nosotros si tienes alguna duda o sugerencia.</h3>
                </div>

                <form id="contact1Form" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control form-control-lg mb-2" id="name" type="text" placeholder="Nombre *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control form-control-lg mb-2" id="email" type="email" placeholder="Correo *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un email.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es válido.</div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control form-control-lg" id="message" placeholder="Mensaje *" data-sb-validations="required" rows="4"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact1-forms">https://startbootstrap.com/solution/contact1-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
