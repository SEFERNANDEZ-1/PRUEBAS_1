<?php
//$cirugiaP = $_POST['cirugiaP'];
$fisiatria = $_POST['fisiatria'];
$MedicinaDolor = $_POST['MedicinaDolor'];
//$Ortopedia = $_POST['Ortopedia'];

if (isset($MedicinaDolor) or isset($fisiatria)) {
    header("Location: ../InterconsultaCirugiaPlastica/index.html");
    exit();
}
?>
