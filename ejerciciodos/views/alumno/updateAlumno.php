<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/CSS/actFormulario.css">
</head>

<body>

<?php
    require_once("../../modelos/classAlumno.php");
    $id = $_REQUEST['id'];
    $alumno = new Alumno();
    $datos = $alumno -> consultarAlumnoXId($id);
while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
    print('

        <div class="login-card">
        <h2>Actualizar Alumno</h2>
        <h3>Actualiza los datos del Alumno</h3> 

        <form class="login-form" action="../../controlador/controladorAlumno.php" method="POST">

            <input type="hidden" value="'.$data["Id_Alumno"].'" name="actAlumno" id="actAlumno" />
            <input type="text" placeholder="Nombre" value="'.$data["Nombre"].'"  name="actname" id="actname" required>
            <input type="text" placeholder="Apellido" value="'.$data["Apellido"].'" name="actlast" id="actlast" required>
            <input type="email" placeholder="Email" value="'.$data["Correo"].'"  name="actemail" id="actemail" required>
            <input type="number" placeholder="Teléfono" value="'.$data["Telefono"].'" name="actphone" id="actphone" required>
            <input type="text" placeholder="Programa" value="'.$data["Programa"].'"  name="actprog" id="actprog" required>

            <div class="boton-bu">
                <input class="btnsubmit" type="submit" name="actualizarAlumno" id="actualizarAlumno" value="Actualizar">
                <a class="btnback" href="../../views/viewsAlumno.php">Regresar</a>
            </div>
            
            
        </form>
    </div>
    ');

}
?>
    
</body>

</html>