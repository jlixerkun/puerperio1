<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];
        $mensaje = $_POST["mensaje"];
        $enviadoPor = "proyectococuyo@gmail.com";

        $to = "afpera@gmail.com";
        $subject = "Entrada de Formulario en puerperio.org";

        $message = "Nombre: $nombre\n..";
        $message .= "Correo: $correo\n..";
        $message .= "Mensaje:\n..$mensaje";

        $headers = "From: $enviadoPor\r\n..";
        $headers .= "Reply-To: $enviadoPor\r\n..";

        if (mail($to, $subject, $message, $headers)) {
            $response = "¡Hemos recibido tu mensaje. Pronto podrás verlo publicado!";
        } else {
            $response = "Ha habido un error al enviar tu mensaje. Por favor intenta de nuevo o escribe directamente al correo proyectococuyo@gmail.com";
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

            <div class="row">
                <div class="col comments col-md-6">
                    <div class="row">
                        <div class="col-2 text-center" style="padding-bottom: 40px;"><img class="img-fluid avatar" src="../assets/img/art_ret/noavatar.svg"></div>
                        <div class="col-9">
                            <h5 class="text-start comAut">Laura Jiménez</h5>
                            <p class="fst-italic comBox">Me ha gustado la diversidad de encuentros entre arte y maternidad recogidas en esta exposición. Cada artista trae un mundo de sentido y aporta a la urgente reflexión sobre estos temas.</p>
                        </div>
                    </div>
                </div>

                <div class="col msgbox col-md-6">
                    <h5 class="fw-bold" style="color: var(--bs-secondary);padding-bottom: 4px;">Deja tú también un mensaje...</h5>
            
                    <form action="./contacto.php" method="post" name="mandelo" id="mandelo">
                        <input type="text" class="formInput" placeholder="Nombre" name="nombre">
                        <input type="email" class="formInput" placeholder="correo" name="correo">
                        <textarea class="formInput" placeholder="mensaje" rows="3" name="mensaje"></textarea>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Comentario</label></div>
                        <div class="form-check form-check-inline"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Correo</label></div>
                        <input class="btn btn-primary" type="submit">
                    </form>
            
                    <section class="main row">
                        <h2>
                            <?php
                            if ($response) {
                                echo $response;
                            }
                            ?>
                        </h2>
                    </section>

                </div>
            </div>
        </div>
    </section>

    
    <?php include 'pie.php' ?>
</body>
</html>