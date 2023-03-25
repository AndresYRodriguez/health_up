<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rutina Agotamiento Mental</title>
</head>

<body>
    <section class="service contenedor" id="servicios">

        <h2 class="subtitulo">Agotamiento mental</h2>
        <?php
        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Experimenta nuevas cosas'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-multimedia">
                    <div class="video">
                        <h2 class="muñtimedia">Video</h2>
                        <video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>
                    </div>
                    <div class="audio">
                        <h2 class="muñtimedia">Audio</h2>
                        <audio src="data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>" controls='controls' muted></audio>
                    </div>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Titulo']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span> Paso</h3>
                        <p class="text">El agotamiento mental es un estado en el cual la persona que lo padece se siente cansada sin razón aparente,esto debido a estar metido en la misma rutina y puede causar muchos problemas si estás padeciendo de este mal vamos a ayudarte a salir de esto.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Paso</h3>
                        <p class="text">Ya que sabemos que es el agotamiento mental,una forma de evitar tenerlo es el de experimentar cosas nuevas como lo pueden ser el mover tu cama de lugar, probar un nuevo lugar de comidas o un nuevo plato de comida.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">trata de salir de la rutina creada,intentar ser algo más impredecible con tus acciones para así no caer tan fácilmente otra vez en una rutina.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Eliminé la negatividad'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-multimedia">
                    <div class="video">
                        <h2 class="muñtimedia">Video</h2>
                        <video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>
                    </div>
                    <div class="audio">
                        <h2 class="muñtimedia">Audio</h2>
                        <audio src="data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>" controls='controls' muted></audio>
                    </div>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Titulo']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span> Paso</h3>
                        <p class="text">Los pensamientos pesimistas y negativos traen consigo dos potenciadores de la fatiga mental: el estrés y la ansiedad. Aprender a identificar cuándo llegan los pensamientos negativos para frenarlos le dará mayor vitalidad a tu mente.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> Paso</h3>
                        <p class="text">Trata de disfrutar de las pequeñas cosas de la vida como lo puede ser el día soleado,tus amistades,tu comida etc.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">3</span> paso</h3>
                        <p class="text">Trata de darse pequeños gustos a lo largo de tu semana por ejemplo el ir a comer a tu restaurante favorito,un chocolate,un café etc.</p>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php
        $consulta = "SELECT*FROM socioemocional WHERE Titulo='Revise su alimentación'";
        $resultado = mysqli_query($con, $consulta);

        while ($row = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="contenedor-servicio">
                <div class="contenedor-servicio-multimedia">
                    <div class="video">
                        <h2 class="muñtimedia">Video</h2>
                        <video src='data:Video/mp4;base64, <?php echo base64_encode($row['Videos']); ?>' controls='controls' autoplay muted height='250px' width='420px'></video>
                    </div>
                    <div class="audio">
                        <h2 class="muñtimedia">Audio</h2>
                        <audio src="data:Audio/mp3;base64, <?php echo base64_encode($row['Audios']); ?>" controls='controls' muted></audio>
                    </div>
                </div>
                <div class="checklist-servicio">
                    <div class="service">
                        <h2 class="subtitulo"><?php echo $row['Titulo']; ?></h2>
                        <h3 class="n-service"><span class="number">1</span>paso</h3>
                        <p class="text">Los alimentos son el combustible que le das a tu cuerpo para que funcione adecuadamente, por lo que debes revisar qué alimentos le aportan a tu mente.La principal fuente de energía es el agua. Debes tomar de 2 a 3 litros diarios, de lo contrario, la deshidratación hará que sientas agotamiento físico y mental. Recuerda que puedes estar deshidratado sin saberlo.</p>
                    </div>
                    <div class="service">
                        <h3 class="n-service"><span class="number">2</span> paso</h3>
                        <p class="text">Trata de comer de una manera saludable en la cual tu alimentación te aporte los nutrientes necesarios para estar estable a lo largo del día.</p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </section>
    <div class="checklist-servicio">
        <div class="service">
            <a href="./socioemocional.php">
                <h1 class="links">Fin de la rutina</h1>
            </a>
        </div>
    </div>
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">Healt up</h2>
                <p>somos expertos es crear tu mejor version</p>
            </div>
            <div class="social-media">
                <a href="https://www.facebook.com/Helath_up-103442115724138?_rdc=1&_rdr" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://www.instagram.com/healthup_oficial/" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://twitter.com/HEALTHUP14" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
</body>

</html>