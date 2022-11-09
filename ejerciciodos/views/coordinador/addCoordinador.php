<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../public/CSS/formulario.css">
</head>
<body>
    <!-- <h1>Añadir Alumno</h1>
    <form action="../../controlador/controladorCoordinador.php" method="post">
        nombre Coordinador: <input type="text" name="newName" id="newName"> <br>
        Lugar: <input type="text" name="newApe" id="newApe"> <br>
        Descripcion: <textarea name="newtext" id="newtext" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="newCord" id="newCord" value="Añadir">
        <br><a class='btn btn-outline-secondary' href='../../views/viewsCoordinador.php'>Volver</a>
    </form> -->

    <div class="login-card">
        <h2>Agregar Coordinador</h2>
        <h3>Ingrese los datos</h3> 

        <form class="login-form" action="../../controlador/controladorCoordinador.php" method="POST">
            <input type="text" placeholder="Nombre" name="newName" id="newName" required>
            <input type="text" placeholder="Lugar" name="newApe" id="newApe" required>
            <input type="text" placeholder="Descripción" name="newtext" id="newtext" required>
    
            <div class="botones">
                <input class="btnsubmit" type="submit" name="newCord" id="newCord" value="Agregar">
                <input class="btnsubmit  btnsubmit__link" type="reset" value="Limpiar">
            </div>
            
            <a href="../../views/viewsCoordinador.php">Regresar</a>
            <!-- <button>LOGIN</button> -->
        </form>
    </div>
</body>
</html>