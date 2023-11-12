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


    <section class="d-flex align-items-center nara" style="min-height: 100vh;">
        <div class="container-lg">
            <div class="row" style="padding-bottom: 20px;padding-top: 20px;">
                <div class="col-md-6" id="comentarios">

<!-- Versión Dinámica no funcionando

                        <section class="response-msg">
                        <h3>
                            <?php
                            if ($response) {
                                echo $response;
                            }
                            ?>
                        </h3>
                    </section>

 -->                    
     <!-- Versión estática  para borrar cuando funcione lo anterior-->

                    <div class="row">
                        <div class="col-2 text-center" style="padding-bottom: 40px;"><img class="img-fluid avatar" src="../assets/img/art_ret/art_ret_CatMos_01.png"></div>
                        <div class="col-9">
                            <h5 class="text-start comAut">Laura Jiménez</h5>
                            <p class="fst-italic comBox">Me ha gustado la diversidad de encuentros entre arte y maternidad recogidas en esta exposición. Cada artista trae un mundo de sentido y aporta a la urgente reflexión sobre estos temas.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-center" style="padding-bottom: 40px;"><img class="img-fluid avatar" src="../assets/img/art_ret/art_ret_ClaNun_02.png"></div>
                        <div class="col-9">
                            <h5 class="text-start comAut">Sofía Fiorito</h5>
                            <p class="fst-italic comBox">Genial, me gustaría saber si pueden participar más artistas en esta exposición.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 text-center" style="padding-bottom: 40px;"><img class="img-fluid avatar" src="../assets/img/art_ret/art_ret_ClaNun_02.png"></div>
                        <div class="col-9">
                            <h5 class="text-start comAut">Maria Claudia Villate</h5>
                            <p class="fst-italic comBox">Inspirador conocer a las artistas desde sus obras y entrevistas!</p>
                        </div>
                    </div>

     <!-- borrar hasta aquí-->

                </div>
                <div class="col-md-6 align-self-end" id="form" style="padding: 20px;padding-bottom: 80px;">
                    <h5 class="fw-bold" style="color: var(--bs-secondary);padding-bottom: 4px;">Deja tú también un mensaje...</h5>

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
                </div>
            </div>
        </div>
    </section>
    
    <?php include 'pie.php' ?>

    <script src="../msj.js"></script>
</body>

</html>