<!DOCTYPE html>
<html data-bs-theme="light" lang="es">
<head>
    <title>Puerperio :: Exposición Virtual :: Contacto</title>
    <?php include '../scripts.php' ?>    
</head>
<body>
    <?php include 'cabeza.php' ?>
    <div class="accordion accordion-flush" role="tablist" id="seccs" style="padding-top: 200px;">
        <!-- Start: contacto -->
        <div class="accordion-item cremita noMargin">
            <h2 class="accordion-header" role="tab"><button class="accordion-button butCremita SECCS" type="button" data-bs-toggle="collapse" data-bs-target="#seccs .seccs-1" aria-expanded="true" aria-controls="seccs .seccs-1">Contacto</button></h2>
            <div class="accordion-collapse collapse show seccs-1" role="tabpanel">
                <div class="accordion-body">
                    <div class="row">
                        <!-- Start: artBio_text -->
                        <div class="col-md-5 col-lg-6 offset-md-1 offset-xxl-2 desap">
                            <p>aquí va la info y formulario de contacto</p>
                        </div><!-- End: artBio_text -->
                    </div>
                </div>
            </div>
        </div><!-- End: contacto -->
        <!-- Start: chat -->
        <div class="accordion-item nara noMargin">
            <h2 class="accordion-header" role="tab"><button class="accordion-button butNara SECCS" type="button" data-bs-toggle="collapse" data-bs-target="#seccs .seccs-2" aria-expanded="true" aria-controls="seccs .seccs-2">Chat</button></h2>
            <div class="accordion-collapse collapse show seccs-2" role="tabpanel">
                <div class="accordion-body">
                    <div class="container-lg">
                        <div class="row" style="padding-bottom: 20px;padding-top: 20px;">
                            <!-- Start: comentarios -->
                            <div class="col-md-6">
                                <div class="row">
                                    <!-- Start: com_Ava -->
                                    <div class="col-2 text-center" style="padding-bottom: 40px;"><img class="img-fluid avatar" src="art_ret/art_ret_CatMos_02.jpg"></div><!-- End: com_Ava -->
                                    <div class="col-9">
                                        <!-- Start: comAut -->
                                        <h5 class="text-start comAut">Catalina Mosquera</h5><!-- End: comAut -->
                                        <!-- Start: comBox -->
                                        <p class="fst-italic comBox">Este es un mensaje que haya dejado alguien escrito con el formulario adjunto, el cual llega al correo de puerperio.</p><!-- End: comBox -->
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Start: com_Ava -->
                                    <div class="col-2 text-center" style="padding-bottom: 40px;"><img class="img-fluid avatar" src="art_ret/art_ret_ClaNun_01.jpg"></div><!-- End: com_Ava -->
                                    <div class="col-9">
                                        <!-- Start: comAut -->
                                        <h5 class="text-start comAut">Claudia Núñez</h5><!-- End: comAut -->
                                        <!-- Start: comBox -->
                                        <p class="fst-italic comBox">Aquí van quedando listados los mensajes que uds hayan recibido en el correo y seleccionen para subir manualmente a la página.</p><!-- End: comBox -->
                                    </div>
                                </div>
                            </div><!-- End: comentarios -->
                            <!-- Start: formulario -->
                            <div class="col-md-6" style="padding: 20px;padding-bottom: 80px;">
                                <h5 class="fw-bold" style="color: var(--bs-secondary);padding-bottom: 4px;">Deja tú también un mensaje...</h5><input type="text" class="formInput" placeholder="Nombre"><input type="email" class="formInput" placeholder="correo"><textarea class="formInput" placeholder="mensaje" rows="3"></textarea><input class="btn btn-primary" type="submit">
                            </div><!-- End: formulario -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End: chat -->
    </div>
    <?php include 'pie.php' ?>
</body>
</html>