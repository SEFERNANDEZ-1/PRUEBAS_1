<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' type='text/css' media='screen' href='../estilos/style.css'>
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Documento de consentimiento</title>
</head>

<body>
    <?php
    require("../conexion/conn.php");
    $sql = "SELECT nombre, cedula FROM firma_especialista";
    $result = mysqli_query($connexion, $sql);
    ?>
    <section class="form-register">
        <form action="b_ejecucion.php" method="POST" id='formulario' name="formulario">
            <div class="tableFormat table">
                <table border="2">
                    <tbody>
                        <tr>
                            <td>

                                <img src="../dolormet.jpg">

                            <td>
                                <center>
                                    BORRADO DE USUARIO
                                </center>
                            </td>
                            <td>
                                <table border="2">
                                    <tr>
                                        <td>
                                            Código: BORRADO 1.0
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Version:01
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Página:1/1
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            </td>
                        </tr>
                    </tbody>
                </table> <br>
            </div>
            <a href="../../../indexFormularios.html"><input type="button" value="IR AL MENÚ" class="input" /></a>
            <a href="../../../registro.html"><input type="button" value="VOLVER A MENU DE BORRADO Y REGISTRO"
                    class="input" /></a><br><br>

            <label for="borrado_espec">Seleccionar especialista a borrar:</label>
            <select id="borrado_espec" name="borrado_espec" class="input">
                <?php while ($consulta = mysqli_fetch_array($result)): ?>
                    <option value="<?php echo $consulta['cedula']; ?>"><?php echo $consulta['nombre']; ?></option>
                <?php endwhile; ?>
            </select>
            </select>

            <!-- botones nuevos -->
            <!-- <button id="save" class="button" type="button">ENVIAR</button>  -->
            <input type="submit" value="ENVIAR" class="button">
        </form>
    </section>
</body>

</html>