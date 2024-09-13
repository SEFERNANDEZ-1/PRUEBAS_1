<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='estilos/style.css'>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <!-- Api para consultar la Fecha actual -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Api para Firma en CANVAS -->
    <script type="text/javascript" src='app.js'></script>
    <script type="text/javascript" src="js/fecha.js"></script>
    <script type="text/javascript" src="js/img.js"></script>
    <script type="text/javascript" src="js/limpiarcanvas.js"></script>
    <script type="text/javascript" src="JsConsultas/consulta.js"></script> -->
    <script type="text/javascript" src="JsConsultas/consultasFisiatria.js"></script> -->
    <script type="text/javascript" src="../ListaOpciones/js/DatosPaciente.js"></script>
    <script type="text/javascript" src="js/llenarCampos.js"></script>
    <title>Documento de consentimiento</title>
</head>

<body>
    <?php
    //conexion a la bse de datos
    include_once("../conexion/conn.php");
    //consulta a la base de datos sobre la modalidad de especialista
    //donde se distinguen si hay varios especialistas con la misma especialidad

    //consulta a la base de datos de especialidades
    $consultEspe = "SELECT cedula, firma, nombre, registro_p FROM  ortopedia";
    $resultEsp = mysqli_query($connexion, $consultEspe);
    ?>
    <section class="form-register">
        <form action=documento_descargable.php method="POST" id='formulario' name="formulario">
            <!-- comienzo del formulario -->
            <!-- encabezado -->
            <div>
                <table border="2">
                    <tbody>
                        <tr>
                            <td class="img">
                                <img src="dolormet.jpg">
                            </td>
                            <td>
                                <div class="titulo">
                                    CONSENTIMIENTO INFORMADO PARA INTERCONSULTA MEDICA ESPECIALIZADA/TELEXPERTICIA
                                </div>
                            </td>
                            <td>
                                <table border="2">
                                    <tr>
                                        <td>
                                            Código: F-ME-002
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Version:03
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Página:1/2
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table> <br>
            </div>
            <center>
                <h1>Consentimiento Informado Oortopedia Y Traumatologia </h1>
            </center>

            <a href="../indexFormularios.html"><input type="button" value="Ir al menú" class="input" /></a><br><br>
            <b>Fecha Actual:<input type="date" id="fecha" name="fecha" class="input" /> <br></b><br>
            <div class="espacioEntreLinea">
                <p>
                    Manifiesto que de manera detallada que el médico general tratante me ha dado información completa,
                    suficiente y con un lenguaje sencillo y claro para mí, sobre la naturaleza, propósito y ventajas de
                    la:
                </p>
                <p>
                    <select name="modalidad" id="modalidad" class="input">
                        <option value="">Seleccione</option>
                        <option value="interconsultaEspecializada">INTERCONSULTA ESPECIALIZADA</option>
                        <option value="telexperticia">TELEXPERTICIA</option>
                    </select>
                </p>
                <p>
                    Entre otros aspectos, el médico me informó que la interconsulta especializada en CLÍNICA DOLORMED
                    SAS,es la comunicación entre varios profesionales médicos, con diferentes áreas de experiencia, en
                    donde el solicitante requiere la opinión sobre alguna patología del paciente a los médicos
                    especialistas en <b>ORTOPEDIA Y TRAUMATOLOGIA</b>, quienes emiten su opinión sobre el caso. El médico
                    especialista responde al solicitante emitiendo el juicio y las recomendaciones sobre la asistencia y
                    el tratamiento a seguir respecto al problema consultado.
                </p>
                <p>
                    Por medio de este consentimiento de interconsulta especializada, se autoriza que el médico general
                    acuda, exponga mi caso clínico y haga parte de Interconsulta, Junta médica o Teleconsulta con la
                    especialidad que considere necesaria para complementar mi atención y específicamente definir en
                    conjunto el diagnóstico, la conducta médica y tratamientos que se deberían ordenar teniendo en
                    cuenta mis condiciones particulares como paciente.
                </p><br>
                <p class="negriya"><b><u>BENEFICIOS</u></b></p>
                <p>
                <ul>
                    <li>
                        Mejorar el acceso, continuidad, y oportunidad de la orientación médica y el seguimiento de los
                        pacientes.
                    </li>
                    <li>
                        Reducción de los tiempos de programación para la cita.
                    </li>
                </ul>
                </p><br>
                <p class="negriya">
                    <b>
                        <u>POSIBLES RIESGOS:</u>
                    </b>
                    Algunos de los posibles riesgos son, pero sin limitarse a:
                </p>
                <p>
                <ul>
                    <li>
                        Que la información suministrada por el paciente sea incompleta e inexacta y ello genere
                        deficiencias o inconsistencias en la indicación u orientación médica brindada.</li>
                    <li>
                        Dado el alto tráfico que presentan las redes, es probable que la comunicación se vea
                        interrumpida o presente deficiencias en la calidad de audio o sonido prevista para la misma.
                    </li>
                </ul>
                </p><br>
                <p class="negriya">
                    <b>
                        <u>RESPONSABILIDAD DEL PROFESIONAL:</u>
                    </b>
                    El usuario deberá:
                </p>
                <p>
                <ul>
                    <li>
                        Brindar información completa, precisa y suficiente con el propósito de suministrar al
                        profesional los datos clínicos y la información relevante y necesaria para ajustar la indicación
                        u orientaciones a su condición clínica particular.
                    </li>
                    <li>
                        Atender las recomendaciones brindadas por el profesional de la salud y adherir a los planes de
                        tratamiento que se hayan fijado.
                    </li>
                    <li>
                        Informar oportunamente la imposibilidad de presentarse a la cita programada.
                    </li>
                </ul>
                </p>
                <p>
                    <b>
                        <u>
                            RESPONSABILIDAD DEL PACIENTE O USUARIO:
                        </u>
                    </b>
                    El usuario deberá:
                </p>
                <ul>
                    <li>
                        Brindar información completa, precisa y suficiente con el propósito de suministrar al
                        profesional los datos clínicos y la información relevante y necesaria para ajustar la indicación
                        u orientaciones a su condición clínica particular.
                    </li>
                    <li>Atender las recomendaciones brindadas por el profesional de la salud y adherir a los planes de
                        tratamiento que se hayan fijado.
                    </li>
                    <li>
                        Informar oportunamente la imposibilidad de presentarse a la cita programada.
                    </li>
                </ul>
                <br>
                <p>
                    La interconsulta especializada se fundamenta entre otras, en el artículo 6 de la Ley Estatutaria No.
                    1751 de 2015, según el Artículo 6. Elementos y principios del derecho fundamental a la salud:
                    disponibilidad (garantizar la existencia de servicios y tecnologías e instituciones de salud),
                    aceptabilidad (Los establecimientos deberán prestar los servicios para mejorar el estado de salud de
                    las personas dentro del respeto a la confidencialidad), accesibilidad (La accesibilidad comprende la
                    no discriminación, la accesibilidad física, la asequibilidad económica y el acceso a la
                    información), calidad e idoneidad profesional (Los establecimientos, servicios y tecnologías de
                    salud deberán estar centrados en el usuario, ser apropiados desde el punto de vista médico y técnico
                    y responder a estándares de calidad aceptados por las comunidades científicas. ). Se me ha
                    manifestado que el riesgo es mínimo debido a que en la consulta no se realizarán intervenciones,
                    procedimientos o modificaciones intencionadas de las variables: biológicas, fisiológicas,
                    sicológicas o sociales del usuario y/o paciente. Declaro que tuve el tiempo suficiente para
                    consentir y que pude hacer las todas las preguntas acerca de la interconsulta
                    especializada, las cuales se me respondieron de forma clara y satisfactoria.
                </p>
                <p>
                    Comprendo que el consentimiento otorgado no se restringe solamente a lo anotado en el presente
                    documento, sino, principalmente, a los actos de voluntad como paciente, la entrevista con el
                    personal médico y los registros complementarios que al respecto pudieran quedar en mi historia
                    clínica y las notas de enfermería o interconsultas. Igualmente declaro que se me ha informado que,
                    para efectos de brindarme atención médica, autorizo expresamente a la CLINICA DOLORMED S.A.S. para
                    recolectar, clasificar, almacenar, utilizar, archivar y cualquier otra modalidad de tratamiento a
                    mis Datos Personales, incluyendo mis Datos Sensibles, conforme a las finalidades establecidas en la
                    Política de Tratamiento de Datos Personales disponible para su consulta en la página web
                    www.dolormed.co, la cual puede ser modificada por la institución sin previo aviso. Estas finalidades
                    incluyen soportar la atención medico asistencial, remitir información a su entidad aseguradora,
                    gestionar procesos de cobro, realizar encuestas de satisfacción, elaborar estudios
                    estadísticos, científicos y/o investigativos; enviar por cualquier canal (correo electrónico, SMS,
                    físico) suministrado resultados de exámenes diagnósticos, información empresarial, académica,
                    comercial y/o promocional de la CLINICA DOLORMED S.A.S., sus aliados comerciales y/o estratégicos
                    siempre relacionada con su objeto social.
                </p><br>
                <h5>
                    Teniendo en cuenta lo anterior, certifico que el contenido de este consentimiento me ha sido
                    explicado en su totalidad, que lo he leído o me lo han leído y que entiendo perfectamente su
                    contenido. Por lo tanto, en pleno y normal uso de mis facultades mentales, libre y voluntariamente
                    decido:
                </h5>
                <br>
            </div>
            <b>Autorizacion:</b>
            <select name="autorizacion" id="autorizacion" class="input">
                <option value="">Seleccione</option>
                <option value="SI">Si</option>
                <option value="NO">No</option>
            </select>
            <br>
            A <select name="especilista" id="especilista" class="input" required>
                <?php
                // Imprimir opciones del primer select
                while ($row1 = mysqli_fetch_assoc($resultEsp)) {
                ?>
                    <option value="<?php echo $row1['cedula']; ?>"> <?php echo $row1['nombre']; ?> </option>
                <?php
                }
                ?>
            </select> y a la IPS DOLORMED S.A.S, con Nit. 900.442.930-6, para que me realicen la actividad,intervención, procedimiento o tratamiento que requiero.
            <table border="2">
                <tbody>
                    <tr>
                        <!--cuadro2  -->
                        <td> Nombre y apellidos del Paciente o Represente Legal </td>
                        <td> Documento de identificación No. </td>
                        <td> Parentesco <h6>(En caso de paciente menor de edad)</h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="NombrePaciente" id="NombrePaciente" class="input" autocomplete="off" placeholder="Nombre del Paciente" require>
                        </td>
                        <td>
                            <input type="text" id="documentoIdentidadPaciente" class="input" name="documentoIdentidadPaciente" autocomplete="off" placeholder="Numero de identificacion" required />
                        </td>
                        <td><input type="text" name="Parentesco" id="Parentesco" class="input" placeholder="Parentesco" autocomplete="off" required /></td>
                    </tr>
                </tbody>
            </table>
            <br>
            <p>
                <b>Firma del Paciente:</b>
            </p>
            <table border="2">
                <tbody>
                    <tr>
                        <td>
                            <div class="signature mb-2">
                                <canvas width="630" height="300" id="cvs"></canvas>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <button id="clear" type="button" class="input">Borrar Firma</button>
            <!-- Captura Huella -->
            <div>
                <label for="image_uploads">Cargue La Imagen de la Huella (PNG, JPG)</label>
                <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png" multiple="" class="input">
            </div>
            <div class="preview">
                <ol id="list">
                    <input type="hidden" name="imagen" id="imagen" class="input">
                </ol>
            </div>
            <!-- Fin Captura huella -->
            <button id="save" class="button" type="button" onclick="recorrerURL()">Enviar</button>
            <input type="hidden" id="img" name="img" display="none" />
        </form>
    </section>

</body>

</html>