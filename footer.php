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
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
</footer>

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