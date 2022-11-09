<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Alumno</title>
    <link rel="stylesheet" href="../../public/CSS/formulario.css">
</head> 
<body>
    <!-- <h1>Añadir Alumno</h1>
    <form action="../../controlador/controladorAlumno.php" method="post">
        nombre: <input class="campo" type="text" name="newname" id="newname"> <br>
        Apellido: <input type="text" name="newlast" id="newlast"> <br>
        Correo: <input type="email" name="newemail" id="newemail"> <br>
        Telefono: <input type="number" name="newphone" id="newphone"> <br>
        Programa: <input type="text" name="newprog" id="newprog"> <br>

        <input type="submit" name="newAlumno" id="newAlumno" value="Añadir">
        <input type="reset" value="Limpiar">
        
        <br><a class='btn btn-outline-secondary' href='../../views/viewsAlumno.php'>Regresar</a>
    </form> -->

    <div class="login-card">
        <h2>Agregar Alumno</h2>
        <h3>Ingrese los datos del Alumno</h3> 

        <form class="login-form" action="../../controlador/controladorAlumno.php" method="POST">
            <input type="text" placeholder="Nombre" name="newname" id="newname" required>
            <input type="text" placeholder="Apellido" name="newlast" id="newlast" required>
            <input type="email" placeholder="Email" name="newemail" id="newemail" required>
            <input type="number" placeholder="Teléfono" name="newphone" id="newphone" required>
            <input type="text" placeholder="Programa" name="newprog" id="newprog" required>

            <div class="botones">
                <input class="btnsubmit" type="submit" name="newAlumno" id="newAlumno" value="Agregar">
                <input class="btnsubmit  btnsubmit__link" type="reset" value="Limpiar">
            </div> 
            
            <a href="../../views/viewsAlumno.php">Regresar</a>
            <!-- <button>LOGIN</button> -->
        </form>
    </div>
</body>
</html>