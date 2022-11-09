<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedad</title>
    <link rel="stylesheet" href="../../public/CSS/actFormulario.css">
</head>
<body>

<?php
    require_once("../../modelos/classNovedad.php");
    $id = $_REQUEST['id'];

    $novedad = new Novedad();
    $datos = $novedad -> consultarNovedadXId($id);

while ($data = $datos -> fetch(PDO::FETCH_ASSOC)){
    print('
       
        <div class="login-card">
        <h2>Actualizar Novedad</h2>
        <h3>Actualiza los datos</h3> 

        <form class="login-form" action="../../controlador/controladorNovedades.php" method="POST">

            <input type="hidden" value="'.$data["Id_Novedad"].'" name="actNov" id="actNov" />
            <input type="text" placeholder="Rol" value="'.$data["Rol"].'"  name="actRol" id="actRol" required>
            <input type="text" placeholder="Nombre y Apellido" value="'.$data["Nombre_Apellido"].'" name="actNom" id="actNom" required>
            <input type="text" placeholder="Programa" value="'.$data["Programa"].'"  name="actPro" id="actPro" required>
            <input type="text" placeholder="Tipo Novedad" value="'.$data["Tipo_Novedad"].'" name="actTipo" id="actTipo" required>
            <input type="text" placeholder="Descripción" value="'.$data["Descripcion"].'" name="actDepn" id="actDepn" required>

            <div class="boton-bu">
                <input class="btnsubmit" type="submit" name="actNovedad" id="actNovedad" value="Actualizar">
                <a class="btnback" href="../../views/viewsNovedades.php">Regresar</a>
            </div>
            
            
        </form>
    </div>
    ');
}
?>
    
</body>
</html>