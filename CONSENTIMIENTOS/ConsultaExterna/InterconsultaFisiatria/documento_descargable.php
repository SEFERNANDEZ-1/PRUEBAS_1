<?php
//Declaracion de variables que vienen desde index.php
require_once "conexion/conn.php";
$fecha = $_POST['fecha'];
$autorizacion = $_POST['autorizacion'];
$especialista = $_POST['especilista'];
$sql = "SELECT firma, cedula, registro_p, nombre FROM fisiatria WHERE cedula = '$especialista'";
$result = mysqli_query($connexion, $sql);

if ($result) {
    // Suponiendo que se espera obtener solo una fila
    $row = mysqli_fetch_array($result);
    // Luego puedes utilizar los datos obtenidos, por ejemplo:
    $firma = $row['firma'];
    $cedula = $row['cedula'];
    $registro_p = $row['registro_p'];
    $nombreEspecialista = $row['nombre'];
} else {
    // Manejar errores de consulta
    echo "Error: " . mysqli_error($conn);
}
mysqli_free_result($result);

$modalidad = $_POST['modalidad'];

if ($modalidad == "interconsultaEspecializada") {
    $modalidad = "INTERCONSULTA ESPECIALIZADA";
} else {
    $modalidad = "TELEXPERTICIA";
}

if ($autorizacion == "si" || $autorizacion == "SI") {

    $especialista = $_POST['especilista'];
    $nom_paciente = $_POST['NombrePaciente'];
    $num_ide = $_POST['documentoIdentidadPaciente'];
    $parentesco = $_POST['Parentesco'];
    $img = $_POST['img'];
    $huella = $_POST['imagen'];
    $firma = $row['firma'];
    $cedula = $row['cedula'];
    $registro_p = $row['registro_p'];
    $nombreEspecialista = $row['nombre'];
    $autorizacion = $_POST['autorizacion'];

    $autorizacionNO = "";
    $especialistaNoAutoriza = "";
    $nom_pacienteNoAutoriza = "";
    $num_ideNoAutoriza = "";
    $nombreEspecialistaNO = "";
    $parentescoNoAutoriza = "";
    $imgNoAutoriza = "";
    $huellaNoAutoriza = "";
    $cedulaNoAutoriza = "";
    $firmaNoAutoriza = "";
    $registro_pNoAutoriza = "";
} elseif ($autorizacion == "no" || $autorizacion == "NO") {
    $especialistaNoAutoriza = $_POST['especilista'];
    $nom_pacienteNoAutoriza = $_POST['NombrePaciente'];
    $num_ideNoAutoriza = $_POST['documentoIdentidadPaciente'];
    $parentescoNoAutoriza = $_POST['Parentesco'];
    $imgNoAutoriza = $_POST['img'];
    $huellaNoAutoriza = $_POST['imagen'];
    $firmaNoAutoriza = $firma;
    $cedulaNoAutoriza = $cedula;
    $registro_pNoAutoriza = $row['registro_p'];
    $nombreEspecialistaNO = $row['nombre'];
    $autorizacionNO = $_POST['autorizacion'];

    $especialista = "";
    $nom_paciente = "";
    $num_ide = "";
    $parentesco = "";
    $img = "";
    $huella = "";
    $registro_p = "";
    $firma = "";
    $cedula = "";
    $nombreEspecialista = "";
    $autorizacion = "";
}
//consulta a la base de datos por medio de un condicional, donde trae un valor por "firma_fisio"
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='estilos/estilos.css'> -->

    <title>Documento de consentimiento</title>
</head>

<body>
    <header>
        <div class="tableFormat table">
            <table border="2">
                <tbody>
                    <tr>
                        <td>
                            <img src="dolormet.jpg" height="100" width="100">
                        <td>
                            <center>
                                CONSENTIMIENTO INFORMADO PARA INTERCONSULTA MEDICA ESPECIALIZADA/ TELEXPERTICIA
                            </center>
                        </td>
                        <td>
                            <table border="2">
                                <tr>
                                    <td>
                                        Código: F-TF-005
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Version:01
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Página:1/3
                                    </td>
                                </tr>
                            </table>
                        </td>
                        </td>
                    </tr>
                </tbody>
            </table> <br>
        </div>
    </header>

    <b><?php echo "$fecha" ?></b><br><br>

    Manifiesto que de manera detallada que el médico general tratante me ha dado información completa, suficiente y con un lenguaje sencillo y claro
    para mí, sobre la naturaleza, propósito y ventajas de la: <br><br>

    <b><?php echo "$modalidad" ?></b> <br><br>

    Entre otros aspectos, el médico me informó que la interconsulta especializada en CLÍNICA DOLORMED SAS, es la comunicación entre varios profesionales
    médicos, con diferentes áreas de experiencia, en donde el solicitante requiere la opinión sobre alguna patología del paciente a los médicos especialistas
    en <b>FISIATRIA</b> , quienes emiten su opinión sobre el caso. El médico especialista responde al solicitante emitiendo el juicio y las recomendaciones sobre
    la asistencia y el tratamiento a seguir respecto al problema consultado.<br><br>

    Por medio de este consentimiento de interconsulta especializada, se autoriza que el médico general acuda, exponga mi caso clínico y haga parte de Interconsulta,
    Junta médica o Teleconsulta con la especialidad que considere necesaria para complementar mi atención y específicamente definir en conjunto el diagnóstico,
    la conducta médica y tratamientos que se deberían ordenar teniendo en cuenta mis condiciones particulares como paciente. <br><br>

    <b><u>BENEFICIOS:</u></b>
    <ul>
        <li>
            Mejorar el acceso, continuidad, y oportunidad de la orientación médica y el seguimiento de los pacientes.
        </li>
        <li>
            Reducción de los tiempos de programación para la cita.
        </li>
    </ul>
    <b><u>POSIBLES RIESGOS:</u></b>
    <ul>
        <li>
            Que la información suministrada por el paciente sea incompleta e inexacta y ello genere deficiencias o inconsistencias en la indicación u orientación
            médica brindada.
        </li>
        <li>
            Dado el alto tráfico que presentan las redes, es probable que la comunicación se vea interrumpida o presente deficiencias en la calidad de
            audio o sonido prevista para la misma.
        </li>
    </ul>
    <b><u>RESPONSABILIDAD DEL PROFESIONAL:</u></b> Es responsabilidad del profesional de la salud brindar la orientación, asesoría o consejería
    en el marco del modelo de atención no presencial de acuerdo a la información que sea brindada por el paciente o usuario, y, con base en ello
    definir el manejo médico indicado. En caso de considerarlo necesario el profesional de la salud puede cancelar o abstenerse de realizar
    la atención justificando las razones de su decisión las cuales serán oportunamente informadas al paciente o usuario.<br><br>

    <b><u>RESPONSABILIDAD DEL PACIENTE O USUARIO: </u></b>
    <ul>
        <li>
            Brindar información completa, precisa y suficiente con el propósito de suministrar al profesional los datos clínicos y la información
            relevante y necesaria para ajustar la indicación u orientaciones a su condición clínica particular.
        </li>
    </ul>
    <div class="tableFormat table">
        <table border="2">
            <tbody>
                <tr>
                    <td>
                        <img src="dolormet.jpg" height="100" width="100">
                    <td>
                        <center>
                            CONSENTIMIENTO INFORMADO PARA INTERCONSULTA MEDICA ESPECIALIZADA/ TELEXPERTICIA
                        </center>
                    </td>
                    <td>
                        <table border="2">
                            <tr>
                                <td>
                                    Código: F-TO-005
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Version:01
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Página:2/3
                                </td>
                            </tr>
                        </table>
                    </td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <ul>
        <li>
            Atender las recomendaciones brindadas por el profesional de la salud y adherir a los planes de tratamiento que se hayan fijado.
        </li>
        <li>
            Informar oportunamente la imposibilidad de presentarse a la cita programada.
        </li>
    </ul>
    La interconsulta especializada se fundamenta entre otras, en el artículo 6 de la Ley Estatutaria No. 1751 de 2015, según el Artículo 6.
    Elementos y principios del derecho fundamental a la salud: disponibilidad (garantizar la existencia de servicios y tecnologías e instituciones
    de salud), aceptabilidad (Los establecimientos deberán prestar los servicios para mejorar el estado de salud de las personas dentro del respeto
    a la confidencialidad), accesibilidad (La accesibilidad comprende la no discriminación, la accesibilidad física, la asequibilidad económica y
    el acceso a la información), calidad e idoneidad profesional (Los establecimientos, servicios y tecnologías de salud deberán estar centrados en
    el usuario, ser apropiados desde el punto de vista médico y técnico y responder a estándares de calidad aceptados por las comunidades científicas.).<br><br>

    Se me ha manifestado que el riesgo es mínimo debido a que en la consulta no se realizarán intervenciones, procedimientos o modificaciones intencionadas
    de las variables: biológicas, fisiológicas, sicológicas o sociales del usuario y/o paciente.<br>

    Declaro que tuve el tiempo suficiente para consentir y que pude hacer las todas las preguntas acerca de la interconsulta especializada,
    las cuales se me respondieron de forma clara y satisfactoria. <br><br>
    Comprendo que el consentimiento otorgado no se restringe solamente a lo anotado en el presente documento, sino, principalmente, a los actos de voluntad
    como paciente, la entrevista con el personal médico y los registros complementarios que al respecto pudieran quedar en mi historia clínica y las notas de enfermería
    o interconsultas. <br><br>

    Igualmente declaro que se me ha informado que, para efectos de brindarme atención médica, autorizo expresamente a la <b>CLINICA DOLORMED S.A.S.</b> para recolectar,
    clasificar, almacenar, utilizar, archivar y cualquier otra modalidad de tratamiento a mis Datos Personales, incluyendo mis Datos Sensibles, conforme a las
    finalidades establecidas en la Política de Tratamiento de Datos Personales disponible para su consulta en la página web www.dolormed.co, la cual puede ser
    modificada por la institución sin previo aviso. Estas finalidades incluyen soportar la atención medico asistencial, remitir información a su entidad aseguradora,
    gestionar procesos de cobro, realizar encuestas de satisfacción, elaborar estudios estadísticos, científicos y/o investigativos; enviar por cualquier canal
    (correo electrónico, SMS, físico) suministrado resultados de exámenes diagnósticos, información empresarial, académica, comercial y/o promocional de la <b>CLINICA
    DOLORMED S.A.S.</b>, sus aliados comerciales y/o estratégicos siempre relacionada con su objeto social. <br><br>

    Teniendo en cuenta lo anterior, certifico que el contenido de este consentimiento me ha sido explicado en su totalidad, que lo he leído o me lo han leído y que entiendo perfectamente su contenido.
    Por lo tanto, en pleno y normal uso de mis facultades mentales, libre y voluntariamente decido:<br><br>

    <b>AUTORIZAR:</b> <b><?php echo "$autorizacion" ?></b><br>

    A <b><?php echo "$nombreEspecialista" ?></b> y a la IPS DOLORMED S.A.S, con Nit. 900.442.930-6, para que me realicen la actividad, intervención, procedimiento o
    tratamiento que requiero.<p>
    <div class="tableFormat table">
        <table border="2">
            <tbody>
                <tr>
                    <td>
                        <img src="dolormet.jpg" height="120" width="120">
                    <td>
                        <center>
                            CONSENTIMIENTO INFORMADO PARA INTERCONSULTA MEDICA ESPECIALIZADA/ TELEXPERTICIA
                        </center>
                    </td>
                    <td>
                        <table border="2">
                            <tr>
                                <td>
                                    Código: F-TO-005
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Version:01
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Página:3/3
                                </td>
                            </tr>
                        </table>
                    </td>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <table border="2">
        <tbody>
            <tr>
                <!--cuadro2  -->
                <td> Nombre y apellidos del Paciente o Represente Legal </td>
                <td> Documento de identificación No. </td>
            </tr>
            <tr>
                <td>
                    <b>
                        <center><img src="<?php echo "$img" ?>" height="120" width="120" aling="center"></center>
                    </b>
                </td>
                <td>
                    <b>
                        <?php echo "$num_ide" ?>
                    </b>
                </td>
            </tr>
            <tr>
                <td>Huella Del Paciente</td>
                <td> Parentesco </td>
            </tr>
            <tr>
                <td>
                    <center><img src="<?php echo "$huella" ?>" height="120" width="120" aling="center"></center>
                </td>
                <td>
                    <b>
                        <?php echo "$parentesco" ?>
                    </b>
                </td>
            </tr>
        </tbody>
    </table>
    <table border="2">
        <tbody>
            <tr>
                <td> Firma del Especialista </td>
                <td> Documento de identificación No. </td>
                <td> Registro profesional No </td>
            </tr>
            <tr>
                <!-- WHILE PARA TRAER INFORMACION-->
                <td>
                    <center><img src="<?php echo "$firma" ?>" height="120" width="120" aling="center"></center>
                </td>
                <!-- -->
                <td><b><?php echo "$cedula" ?></b></td>
                <td><b><?php echo "$registro_p" ?></b></td>
                <!-- FIN WHILE PARA TRAER INFORMACION-->
            </tr>
        </tbody>
    </table>

    <b>AUTORIZAR: <?php echo"$autorizacionNO"?></b>
    <p>
        A <b><?php echo"$nombreEspecialistaNO" ?></b> y a la IPS DOLORMED S.A.S, con Nit. 900.442.930-6,
        para que me realicen la actividad, intervención, procedimiento o tratamiento que requiero. Por lo tanto, dejo constancia que he sido instruido(a) amplia y suficientemente
        de las probables consecuencias sobre la salud y la vida, las cuales pueden ser:

    <table border="2">
        <tbody>
            <tr>
                <!--cuadro2  -->
                <td> Nombre y apellidos del Paciente o Represente Legal </td>
                <td> Documento de identificación No. </td>
            </tr>
            <tr>
                <td><b><?php echo "$nom_pacienteNoAutoriza" ?></b></td>
                <td><b><?php echo "$num_ideNoAutoriza" ?></b></td>
            </tr>
            <tr>
                <td>Huella del Paciente</td>
                <td> Parentesco </td>
            </tr>
            <tr>
                <td>
                    <center><img src="<?php echo "$huellaNoAutoriza" ?>" height="120" width="120" aling="center"></center>
                </td>
                <td><b><?php echo "$parentescoNoAutoriza" ?></b></td>
            </tr>
        </tbody>
    </table>
    <p>
    <p>
    <p>
    <table border="2">
        <tbody>
            <tr>
                <td> Firma del Firma del Especialista </td>
                <td> Documento de identificación No. </td>
                <td> Registro profesional No </td>
            </tr>
            <tr>
                <td>
                    <center><img src="<?php echo "$firmaNoAutoriza" ?>" height="120" width="120" aling="center"></center>
                </td>
                <td><?php echo "$cedulaNoAutoriza" ?></td>
                <td><?php echo "$registro_pNoAutoriza" ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>

<!-- PHP -->
<!-- PHP -->
<?php

// Guardamos el contenido de contenido.php en la variable html

$html = ob_get_clean();
// Jalamos las librerias de dompdf
require_once 'libreria/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Inicializamos dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled ', TRUE);
$pdf = new DOMPDF($options);
//se inicia la imagen
$pdf->set_Paper("letter", "portrait");
// Le pasamos el html a dompdf
$pdf->loadHtml($html);
// Colocamos als propiedades de la hoja

// Escribimos el html en el PDF
$pdf->render();
$pdf->stream("$fecha _ $cedula $cedulaNoAutoriza _ Fisiatria.pdf", array("Attachment" => false));
// Ponemos el PDF en el browser*/

?>