<?php
session_start();

if (isset($_SESSION['Correo'])) {
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <link rel="stylesheet" href="CSS/signin.css">
  <link rel="icon" href="CSS/IMG/logo-health_up.png">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <form action="" method="POST" id="form">
    <div class="form">
      <h1>Sign up</h1>
      <div class="grupo">
        <input type="text" class="Nombres formu" name="Nombres" required><span class="barra"></span>
        <label for="">Nombres</label>
        <i class="uil uil-user user"></i>
      </div>
      <div class="grupo">
        <input type="text" class="Nombres formu" name="Apellidos" required><span class="barra"></span>
        <label for="">Apellidos</label>
        <i class="uil uil-user user"></i>
      </div>
      <div class="grupo">
        <input type="date" class="Fecha formu" name="Fecha_nacimiento" required><span class="barra"></span>

      </div>
      <div class="grupo">
        <select name="Genero" class="formu" required>
          <option value=""></option>
          <option value="1">Femenino</option>
          <option value="2">Masculino</option>
        </select>
        <label for="">Genero</label>
      </div>
      <div class="grupo">
        <input type="email" class="Email-input formu" name="Correo" required><span class="barra"></span>
        <label for="" class="Email-text">Correo Electronico</label>
        <i class="uil uil-envelope email-icon"></i>
      </div>
      <div class="grupo">
        <input type="password" name="Contrase??a" class="Contrase??a formu" required><span class="barra"></span>
        <label for="">Contrase??a</label>
        <i class="uil uil-eye-slash ShowHidePw"></i>
      </div>
      <div class="tyc">
        <input type="checkbox" class="check" name="" id="" required>Acepto <a href="" data-bs-toggle="modal" data-bs-target="#terminos" class="termino">terminos y condiciones</a>
      </div>
      <button type="submit" name="Registrarse" class="sign-up">registrarme</button>
      <a href="signin.php" class="pass">tengo una cuenta</a>
    </div>
  </form>

  <!--terminos y condiciones-->
  <div class="modal fade" id="terminos" tabindex="-1" aria-labelledby="terminos" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Terminos y condiciones</h5>
        </div>
        <div class="modal-body">
          GENERALIDADES

          Sena gestiona este sitio web. En todo el sitio, los t??rminos "nosotros", "nos" y "nuestro" se refieren en lo sucesivo a Sena. Sena ofrece esta p??gina web, incluida toda la informaci??n, las herramientas y los servicios que se ponen en este sitio a disposici??n suya, el usuario, siempre y cuando acepte la totalidad de los t??rminos, condiciones, pol??ticas y avisos contemplados aqu??.
          Al visitar nuestro sitio y/o comprarnos algo, usted interact??a con nuestro "Servicio" y reconoce como vinculantes los siguientes t??rminos y condiciones (denominados en lo sucesivo "T??rminos del servicio", "T??rminos"), incluidos aquellos t??rminos y condiciones adicionales y las pol??ticas que se mencionan aqu?? y/o disponibles por medio de hiperv??nculo. Estos T??rminos del servicio se aplican a todos los usuarios del sitio, incluyendo de manera enunciativa mas no limitativa los usuarios que son navegadores, proveedores, clientes, comerciantes y/o que aporten contenido.
          Lea estos T??rminos del servicio detenidamente antes de acceder o utilizar nuestra p??gina web. Al acceder o utilizar cualquier parte del sitio, usted acepta estos T??rminos del servicio. Si no acepta la totalidad de los t??rminos y condiciones de este acuerdo, no podr?? acceder al sitio web ni utilizar ning??n servicio. Si estos T??rminos del servicio se considerasen una oferta, la aceptaci??n se limita expresamente a los presentes T??rminos del servicio.
          Las nuevas funciones o herramientas que se agreguen a la tienda actual tambi??n estar??n sujetas a los T??rminos del servicio. Puede revisar la versi??n m??s reciente de los T??rminos del servicio en cualquier momento en esta p??gina. Nos reservamos el derecho de actualizar, cambiar o reemplazar cualquier parte de los presentes T??rminos del servicio mediante la publicaci??n de actualizaciones o cambios en nuestra p??gina web. Es su responsabilidad revisar esta p??gina peri??dicamente para ver los cambios. Su uso de la p??gina web o el acceso a ella de forma continuada despu??s de la publicaci??n de cualquier cambio constituye la aceptaci??n de dichos cambios.
          Nuestra tienda est?? alojada en Shopify Inc. Nos proporcionan la plataforma de comercio electr??nico en l??nea que nos permite venderle nuestros productos y servicios.
          SECCI??N 1: T??RMINOS DE LA TIENDA ONLINE
          Al aceptar los presentes T??rminos del servicio, usted declara que tiene la mayor??a de edad en su estado o provincia de residencia, o que es mayor de edad en su estado o provincia de residencia y que nos ha dado su consentimiento para permitir que cualquiera de las personas menores que dependen de usted utilice este sitio.
          No puede utilizar nuestros productos para ning??n fin ilegal o no autorizado ni puede, al hacer uso del Servicio, infringir las leyes de su jurisdicci??n (incluyendo de manera enunciativa m??s no limitativa, las leyes de derechos de autor).
          No transmitir?? ning??n gusano o virus inform??ticos ni ning??n c??digo de naturaleza destructiva.
          El incumplimiento o violaci??n de cualquiera de los T??rminos dar?? como resultado la rescisi??n inmediata de sus Servicios.
          SECCI??N 2: CONDICIONES GENERALES
          Nos reservamos el derecho de rechazar el servicio a cualquier persona, por cualquier motivo, en cualquier momento.
          Usted comprende que su contenido (sin incluir la informaci??n de la tarjeta de cr??dito) puede transferirse sin cifrar e implicar (a) transmisiones en varias redes; y (b) cambios para adaptarse a los requisitos t??cnicos de conexi??n de redes o dispositivos y cumplir con ellos. La informaci??n de la tarjeta de cr??dito siempre se cifra durante la transferencia a trav??s de las redes.
          Usted acepta no reproducir, duplicar, copiar, vender, revender ni aprovechar ninguna parte del Servicio, uso del Servicio o acceso al Servicio o cualquier contacto en el sitio web a trav??s de la cual se presta el servicio, sin nuestro permiso expreso por escrito.
          Los encabezados utilizados en este acuerdo se incluyen solo para facilitar la lectura y no limitar??n ni afectar??n los presentes T??rminos.
          SECCI??N 3: EXACTITUD, TOTALIDAD Y CRONOLOG??A DE LA INFORMACI??N
          No nos responsabilizamos si la informaci??n disponible en este sitio no es precisa, completa o actualizada. El material presentado en este sitio se proporciona solo para informaci??n general y no se debe confiar en ??l ni utilizarlo como la ??nica base para tomar decisiones sin consultar fuentes de informaci??n principales, m??s precisas, m??s completas o m??s recientes. Al confiar en cualquier material de este sitio lo hace por su cuenta y riesgo.
          Este sitio puede contener cierta informaci??n hist??rica. La informaci??n hist??rica, inevitablemente, no es actual y se proporciona ??nicamente como referencia. Nos reservamos el derecho de modificar el contenido de este sitio en cualquier momento, pero no tenemos la obligaci??n de actualizar ninguna informaci??n en nuestro sitio. Usted acepta que es su responsabilidad controlar los cambios en nuestro sitio.
          SECCI??N 4: MODIFICACIONES AL SERVICIO Y PRECIOS
          Los precios de nuestros productos est??n sujetos a cambios sin previo aviso.
          Nos reservamos el derecho de modificar o discontinuar el Servicio (o cualquier parte o contenido del mismo) sin previo aviso en cualquier momento.
          No seremos responsables ante usted ni ante ning??n tercero por ninguna modificaci??n, cambio de precio, suspensi??n o interrupci??n del Servicio.
          SECCI??N 5: PRODUCTOS O SERVICIOS (si corresponde)
          Ciertos productos o servicios pueden estar disponibles exclusivamente online a trav??s del sitio web. Estos productos o servicios pueden tener cantidades limitadas y est??n sujetos a devoluci??n o cambio solo de acuerdo con nuestra Pol??tica de devoluci??n.
          Hemos hecho todo lo viable para mostrar con la mayor precisi??n posible los colores y las im??genes de nuestros productos que aparecen en la tienda. No podemos garantizar que la visualizaci??n de cualquier color en el monitor de su computadora sea precisa.
          Nos reservamos el derecho, pero no estamos obligados, de limitar las ventas de nuestros productos o servicios a cualquier persona, regi??n geogr??fica o jurisdicci??n. Podemos ejercer este derecho caso por caso. Nos reservamos el derecho de limitar las cantidades de cualquier producto o servicio que ofrecemos. Todas las descripciones de los productos o los precios de los productos est??n sujetos a cambios en cualquier momento y sin previo aviso, a nuestra entera discreci??n. Nos reservamos el derecho de discontinuar cualquier producto en cualquier momento. Cualquier oferta de cualquier producto o servicio que se realice en este sitio no tiene validez donde dicho producto o servicio est?? prohibido.
          No garantizamos que la calidad de cualquier producto, servicio, informaci??n u otro material que usted haya comprado u obtenido cumplir?? con sus expectativas, o que cualquier error en el Servicio se corregir??.
          SECCI??N 6: EXACTITUD DE LA FACTURACI??N Y DE LA INFORMACI??N DE LA CUENTA
          Nos reservamos el derecho de rechazar cualquier pedido que realice en nuestra tienda. Podemos, a nuestro exclusivo criterio, limitar o cancelar las cantidades compradas por persona, por hogar o por pedido. Estas restricciones pueden incluir pedidos realizados con la misma cuenta de cliente, la misma tarjeta de cr??dito o pedidos que usen la misma direcci??n de facturaci??n o de env??o. En el caso de que realicemos un cambio o cancelemos un pedido, intentaremos notificarle v??a correo electr??nico o la direcci??n de facturaci??n / n??mero de tel??fono proporcionados en el momento en que se realiz?? el pedido. Nos reservamos el derecho de limitar o prohibir los pedidos que, a nuestra entera discreci??n, parezcan haber sido realizados por comerciantes, revendedores o distribuidores.
          Usted acepta suministrar informaci??n completa y precisa de la compra y cuenta actual, para todas las compras realizadas en nuestra tienda. Usted acepta actualizar r??pidamente su cuenta y dem??s informaciones, entre ellas, su direcci??n de correo electr??nico, los n??meros de tarjeta de cr??dito y las fechas de vencimiento, para que podamos completar sus transacciones y contactarlo seg??n sea necesario.
          Para obtener m??s informaci??n, consulte nuestra Pol??tica de devoluciones.
          SECCI??N 7: HERRAMIENTAS OPCIONALES
          Podemos proporcionarle acceso a herramientas de terceros que no supervisamos, ni tenemos ning??n control sobre ellas, ni tampoco contribuimos.
          Usted reconoce y acepta que brindamos acceso a dichas herramientas "tal como se encuentran" y "seg??n disponibilidad" sin garant??as, representaciones ni condiciones de ning??n tipo y sin ning??n tipo de respaldo. No tendremos ninguna responsabilidad como consecuencia del uso que haga de herramientas opcionales de terceros o en relaci??n a ellas.
          Cualquier uso que haga de las herramientas opcionales ofrecidas a trav??s del sitio es por su cuenta y riesgo, y debe asegurarse de estar familiarizado con los t??rminos seg??n los cuales los proveedores externos relevantes suministran dichas herramientas y aprobarlos.
          Tambi??n podemos, en el futuro, ofrecer nuevos servicios o funciones a trav??s del sitio web (incluido el lanzamiento de nuevas herramientas y recursos). Estas nuevas funciones o servicios tambi??n estar??n sujetos a los presentes T??rminos de servicio.
          SECCI??N 8: ENLACES DE TERCEROS
          Algunos contenidos, productos y servicios disponibles a trav??s de nuestro Servicio pueden incluir recursos de terceros.
          Los enlaces de terceros en este sitio pueden dirigirlo a p??ginas web de terceros que no est??n afiliados a nosotros. No somos responsables de examinar o evaluar el contenido o la exactitud, ni garantizamos ni asumiremos ninguna obligaci??n ni responsabilidad por los recursos o p??ginas web de terceros, ni por ning??n otro material, producto o servicio de terceros.
          No somos responsables de ning??n da??o o perjuicio relacionado con la compra o el uso de bienes, servicios, recursos, contenido o cualquier otra transacci??n realizada en conexi??n con sitios web de terceros. Revise cuidadosamente las pol??ticas y pr??cticas de terceros, y aseg??rese de comprenderlas antes de participar en cualquier transacci??n. Las quejas, reclamos, inquietudes o preguntas referentes a productos de terceros deben dirigirse a estos.
          SECCI??N 9: COMENTARIOS DE LOS USUARIOS, OPINIONES Y OTRAS COMUNICACIONES
          Si, a petici??n nuestra, usted env??a ciertas comunicaciones espec??ficas (por ejemplo, participaciones en un concurso) o, sin una solicitud nuestra, env??a ideas creativas, sugerencias, propuestas, planes u otros materiales, ya sea online, por correo electr??nico, por correo postal, o de otro modo (denominado en lo sucesivo y de manera colectiva, 'comentarios'), usted acepta que podemos, en cualquier momento, sin restricci??n: editar, copiar, publicar, distribuir, traducir y usar en cualquier medio cualquier comentario que usted nos env??e. No tenemos ni tendremos ninguna obligaci??n (1) de mantener ning??n comentario de manera confidencial; (2) pagar alguna compensaci??n por cualquier comentario; o (3) responder a cualquier comentario.
          Podemos, pero no tenemos la obligaci??n de monitorear, editar o eliminar contenido que a nuestra entera discreci??n determinemos que es ilegal, ofensivo, amenazante, calumnioso, difamatorio, pornogr??fico, obsceno u objetable, o que infrinja la propiedad intelectual de cualquiera de las partes o de los presentes T??rminos del servicio.
          Usted acepta que sus comentarios no infringir??n ning??n derecho de terceros, incluidos los derechos de autor, marca registrada, privacidad, personalidad u otro derecho personal o de propiedad. Adem??s, acepta que sus comentarios no contendr??n material difamatorio, ileg??timo, abusivo u obsceno, ni contendr??n ning??n virus inform??tico ni otro software da??ino que pueda afectar de cualquier manera el funcionamiento del Servicio o de cualquier sitio web relacionado. No puede utilizar una direcci??n de correo electr??nico falsa, simular ser otra persona o enga??arnos o enga??ar a terceros sobre el origen de los comentarios. Usted es el ??nico responsable de los comentarios que realice y de su exactitud. No asumimos ninguna responsabilidad ni ninguna obligaci??n por los comentarios publicados por usted o por un tercero.
          SECCI??N 10: INFORMACI??N PERSONAL
          El env??o de la informaci??n personal que haga a trav??s de la tienda se rige por nuestra Pol??tica de privacidad. Para ver nuestra Pol??tica de privacidad.
          SECCI??N 11: ERRORES, INEXACTITUDES Y OMISIONES
          Puede haber informaci??n en nuestro sitio o en el Servicio que, ocasionalmente, contenga errores tipogr??ficos, inexactitudes u omisiones que puedan relacionarse con descripciones de productos, precios, promociones, ofertas, cargos por env??o de productos, tiempos de tr??nsito y disponibilidad. Nos reservamos el derecho de corregir cualquier error, inexactitud u omisi??n, de cambiar o actualizar informaci??n, o cancelar pedidos si alguna informaci??n en el Servicio o en cualquier p??gina web relacionada es inexacta en cualquier momento sin previo aviso (incluso despu??s de haber enviado su pedido).
          No asumimos ninguna obligaci??n de actualizar, modificar o aclarar la informaci??n en el Servicio o en cualquier sitio web relacionado, incluyendo de manera enunciativa pero no limitativa, la informaci??n de precios, excepto cuando lo exija la ley. Ninguna actualizaci??n especificada o fecha de actualizaci??n aplicada en el Servicio o en cualquier sitio web relacionado debe tomarse para indicar que toda la informaci??n en el Servicio o en cualquier sitio web relacionado se modific?? o actualiz??.
          SECCI??N 12: USOS PROHIBIDOS
          Adem??s de las prohibiciones establecidas en los T??rminos del servicio, se le proh??be utilizar el sitio o su contenido (a) para cualquier prop??sito ilegal; (b) para solicitar a otros que realicen o participen en cualquier acto ilegal; (c) para infringir cualquier reglamento, norma, ley u ordenanza local internacional, federal, provincial o estatal; (d) para infringir o violar nuestros derechos de propiedad intelectual o los derechos de propiedad intelectual de otros; (e) acosar, abusar, insultar, da??ar, difamar, calumniar, denigrar, intimidar o discriminar por motivos de g??nero, orientaci??n sexual, religi??n, etnia, raza, edad, nacionalidad o discapacidad; (f) enviar informaci??n falsa o enga??osa;
          (g) cargar o transmitir virus o cualquier otro tipo de c??digo da??ino que afecte o pueda afectar a la funcionalidad o el funcionamiento del Servicio o de cualquier sitio web relacionado, de otros sitios web o de Internet; (h) recopilar o rastrear la informaci??n personal de otros; (i) enviar correo no deseado, phishing, pharm, pretexto, spider, rastrear o extraer; (j) para cualquier prop??sito obsceno o inmoral; o (k) para interferir o eludir las funciones de seguridad del Servicio o de cualquier sitio web relacionado, o de otros sitios web o de Internet. Nos reservamos el derecho de dar por terminado su uso del Servicio o de cualquier sitio web relacionado por infringir cualquiera de los usos prohibidos.
          SECCI??N 13: DESCARGO DE RESPONSABILIDAD DE GARANT??AS; LIMITACI??N DE RESPONSABILIDAD
          No garantizamos, representamos ni aseguramos que el uso que haga de nuestro servicio ser?? sin interrupciones, oportuno, seguro o sin errores.
          No garantizamos que los resultados que se puedan obtener del uso del servicio sean exactos o confiables.
          Usted acepta que peri??dicamente, podamos eliminar el servicio por lapsos de tiempo indefinidos o cancelar el servicio en cualquier momento, sin notificarle.
          Usted acepta expresamente que su uso del servicio o la imposibilidad de utilizarlo corre por su riesgo. El servicio y todos los productos y servicios que se le entregan a trav??s del servicio (salvo que as?? lo especifiquemos nosotros) se ofrecen "tal como est??n" y "seg??n disponibilidad" para su uso, sin ninguna representaci??n, garant??a o condici??n de ning??n tipo, ya sea expresa o impl??cita, entre las que se incluyen todas las garant??as impl??citas o condiciones de comerciabilidad, calidad comercial, idoneidad para un prop??sito particular, durabilidad, t??tulo y no violaci??n.
          En ning??n caso Sena, nuestros directores, funcionarios, empleados, afiliados, agentes, contratistas, pasantes, proveedores, proveedores de servicios o licenciantes ser??n responsables de cualquier lesi??n, p??rdida, reclamo o cualquier da??o directo, indirecto, incidental, punitivo, especial o consecuente de cualquier tipo, incluyendo de manera enunciativa m??s no limitativa; la p??rdida de beneficios, p??rdida de ingresos, p??rdida de ahorros, p??rdida de datos, costos de reemplazo o da??os similares, ya sea por contrato, perjuicio (incluida la negligencia), responsabilidad estricta o de otro tipo, que surjan del uso que haga de cualquiera de los servicios o de cualquier producto adquirido por medio del servicio, o para cualquier otro reclamo relacionado de alguna manera con su uso del servicio o de cualquier producto, incluidos, entre otros, cualquier error u omisi??n en cualquier contenido, o cualquier p??rdida o da??o de cualquier tipo en el que se haya incurrido como resultado del uso del servicio o de cualquier contenido (o producto) publicado, transmitido o puesto a disposici??n a trav??s del servicio, incluso si se informa de su posibilidad.
          Debido a que algunos estados o jurisdicciones no permiten la exclusi??n o la limitaci??n de la responsabilidad por da??os consecuentes o incidentales, en dichos estados o jurisdicciones, nuestra responsabilidad se limitar?? a la extensi??n m??xima de lo permitido por la ley.
          SECCI??N 14: INDEMNIZACI??N
          Usted acepta indemnizar, defender y mantener indemne a Sena y a nuestra empresa matriz, subsidiarias, afiliadas, asociados, funcionarios, directores, agentes, contratistas, licenciantes, proveedores de servicios, subcontratistas, proveedores, pasantes y empleados, de cualquier reclamo o demanda, incluidos los honorarios razonables de abogados, en los que un tercero haya incurrido debido a su incumplimiento de los presentes T??rminos del servicio o de los documentos que incorporan como referencia o que surjan por su incumplimiento de los mismos, o por la violaci??n de cualquier ley o derechos de un tercero que haga.
          SECCI??N 15: DIVISIBILIDAD
          En caso de que se determine que alguna disposici??n de los presentes T??rminos del servicio sea ilegal, nula o inaplicable, dicha disposici??n ser??, no obstante, ejecutable en la medida en que lo permita la legislaci??n aplicable, y la parte inaplicable se considerar?? separada de los presentes T??rminos del servicio, sin que dicha determinaci??n afecte a la validez y aplicabilidad de las dem??s disposiciones.
          SECCI??N 16: RESCISI??N
          Las obligaciones y responsabilidades de las partes incurridas antes de la fecha de rescisi??n seguir??n vigentes despu??s de la rescisi??n de este contrato a todos los efectos.
          Estos T??rminos del servicio se encuentran vigentes a menos que usted o nosotros los rescindamos. Puede rescindir los presentes T??rminos del servicio en cualquier momento al notificarnos que ya no desea utilizar nuestros Servicios o cuando cese de utilizar nuestro sitio.
          Si a nuestro juicio usted incumple, o sospechamos que ha incumplido con cualquier t??rmino o disposici??n de los presentes T??rminos del servicio, podemos rescindir igualmente este acuerdo en cualquier momento sin previo aviso y usted seguir?? siendo responsable de todos los importes adeudados, hasta la fecha de rescisi??n inclusive; y/o en consecuencia podemos denegarle el acceso a nuestros Servicios (o a parte de ellos).
          SECCI??N 17: ACUERDO COMPLETO
          El hecho de que no ejerzamos o hagamos valer alg??n derecho o disposici??n de los presentes T??rminos del Servicio no constituir?? una renuncia a dicho derecho o disposici??n.
          Estos T??rminos de servicio y cualquier pol??tica o regla de funcionamiento que hayamos publicado en este sitio o con respecto al Servicio constituye el acuerdo y el entendimiento completo entre usted y nosotros, y rigen su uso del Servicio, sustituyendo a cualquier acuerdo, comunicaci??n o propuesta anterior o contempor??nea, ya sea oral o escrita, entre usted y nosotros (incluyendo de manera enunciativa m??s no limitativa, las versiones anteriores de los T??rminos del servicio).
          Cualquier ambig??edad en la interpretaci??n de los presentes T??rminos del servicio no se interpretar?? en contra de la parte redactora.
          SECCI??N 18: LEY APLICABLE
          Los presentes T??rminos del servicio y cualquier acuerdo por separado por el cual le proporcionemos Servicios se regir??n e interpretar??n de acuerdo con las leyes de Ave Cra 30 #17-28, Bogot??, Bogota, CUN, 110111, Colombia.
          SECCI??N 19: CAMBIOS EN LOS T??RMINOS DEL SERVICIO
          Puede revisar la versi??n m??s reciente de los T??rminos del servicio en cualquier momento en esta p??gina.
          Nos reservamos el derecho, a nuestra entera discreci??n, de actualizar, cambiar o sustituir cualquier parte de los presentes T??rminos del servicio mediante la publicaci??n de actualizaciones y cambios en nuestro sitio web. Es su responsabilidad consultar nuestro sitio web peri??dicamente para ver los cambios. El uso que haga de nuestra p??gina web o del Servicio o su acceso a cualquiera de estos de forma continua despu??s de la publicaci??n de cualquier cambio en los presentes T??rminos del servicio, constituye la aceptaci??n de dichos cambios.
          SECTION 20: INFORMACI??N DE CONTACTO
          Las preguntas sobre los T??rminos del servicio se deben enviar a <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJqWgZxhlPhVNshxwccqGLqbrTVNSSKpvctCjrTnPTQltMQmJBwmpcZDvSCknShcMrtRntL">healthup98@gmail.com</a>.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <script src="js/password.js"></script>
  <script src="js/validacion.js"></script>
  <?php
  require 'registrar.php';
  ?>
</body>

</html>