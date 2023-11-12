<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $comentario = $_POST["comentario"];
    $correo = $_POST["correo"];

    $enviadoPor = "proyectococuyo@gmail.com";

    // Replace with your email address
    $to = "afpera@gmail.com";
    $subject = "Nuevo comentario o contacto desde puerperio";

    $message = "Nombre: $nombre\n..";
    $message .= "Correo: $correo\n..";
    $message .= "Mensaje:\n..$mensaje";
    $message .= "Comentario:\n..$comentario";
    $message .= "Correo:\n..$correo";


    $headers = "From: $enviadoPor\r\n..";
    $headers .= "Reply-To: $enviadoPor\r\n..";

    if (mail($to, $subject, $message, $headers)) {
        $response = "¡Hemos recibido tu mensaje. Pronto podrás verlo publicado!";
    } else {
        $response = "Ha habido un error al enviar tu mensaje. Por favor intenta de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="es">

<head>
    <title>Puerperio :: Exposición Virtual :: Contacto</title>
    <?php include '../scripts.php' ?>
</head>

<body>
    <?php include 'cabeza.php' ?>

    
    <section id="contacto" class="nara">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="color: var(--bs-secondary)">Contacto</h2>
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
                            <div class="col-md-6" id="comentarios">
                                
                            </div><!-- End: comentarios -->



                            <div class="col-md-6" style="padding: 20px;padding-bottom: 80px;">
                                <h5 class="fw-bold" style="color: var(--bs-secondary);padding-bottom: 4px;">Deja tú también un mensaje...</h5>
                                <!-- Start: formulario -->
                                <section class="response-msg">
                                    <h3>
                                        <?php
                                        if ($response) {
                                            echo $response;
                                        }
                                        ?>
                                    </h3>
                                </section>
                                <form action="./contacto.php" method="post" name="mandelo" id="mandelo">
                                    <input type="text" class="formInput" placeholder="Nombre" name="nombre">
                                    <input type="email" class="formInput" placeholder="correo" name="correo">
                                    <textarea class="formInput" placeholder="mensaje" rows="3" name="mensaje"></textarea>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="comentario" name="comentario" checked>
                                        <label class="form-check-label" for="formCheck-1" >Comentario</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="comentario" name="correo" checked>
                                        <label class="form-check-label" for="formCheck-2">Correo</label>
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Enviar">

                                </form>
                                <!-- End: formulario -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    
    <?php include 'pie.php' ?>

    <script src="../msj.js"></script>
</body>

</html>