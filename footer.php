<footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Noche Caribeña 2024</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#donacioness"><button type="button" class="btn btn-outline-dark">Donación QR</button></a>
                        
                        <a href='https://cafecito.app/nochecaribena' rel='noopener' target='_blank'>
                            <img srcset='https://cdn.cafecito.app/imgs/buttons/button_1.png 1x, 
                            https://cdn.cafecito.app/imgs/buttons/button_1_2x.png 2x,
                             https://cdn.cafecito.app/imgs/buttons/button_1_3.75x.png 3.75x' 
                             src='https://cdn.cafecito.app/imgs/buttons/button_1.png' 
                             alt='Invitame un café en cafecito.app' /></a>

                            <div id="donate-button-container" class="m-2">
                                <div id="donate-button"></div>
                                <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                                <script>
                                    PayPal.Donation.Button({
                                    env:'production',
                                    hosted_button_id:'TJJHV3MNZM7TQ',
                                    image: {
                                    src:'https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif',
                                    alt:'Donate with PayPal button',
                                    title:'PayPal - The safer, easier way to pay online!',
                                    }
                                    }).render('#donate-button');
                                </script>
                            </div>

                        <a class="portfolio-link" data-bs-toggle="modal" href="#contactoo"><button type="button" class="btn btn-outline-dark">Contacto</button></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
</footer>

    <!-- MODAL CONTACTO -->
<div class="portfolio-modal modal fade" id="contactoo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
            
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="modal-body">
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
                                                                <!-- Email input-->
                                                                <input class="form-control form-control-lg mb-2" id="email" type="email" placeholder="Correo *" data-sb-validations="required,email" />
                                                                <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un email.</div>
                                                                <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es válido.</div>
                                                        </div>
                                                        
                                                        </div>
                                                        <div class="col-md-6">
                                                        <div class="form-group form-group-textarea mb-md-0">
                                                                <!-- mensaje input-->
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
                                <div class="text-center"><button class="btn btn-danger btn-xl text-uppercase mt-1 text-center" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> 
</div>

<!-- MODAL DONACIONES-->
<div class="portfolio-modal modal fade" id="donacioness" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <!--<div class="modal-content p-0 bg-dark">-->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <section class="page-section" id="contact">
                                        <div class="container">
                                            <div class="d-flex flex-column align-items-center">
                                                <img class="" src="assets/img/logos/Codigo_QR.png" alt="" style="width: 300px; height: auto;">
                                            </div>
                                        </div>
                                </section>
                                <div class="text-center"><button class="btn btn-danger btn-xl text-uppercase mt-1" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--</div>-->
    </div> 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src="mini.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>