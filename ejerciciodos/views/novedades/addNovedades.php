<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/CSS/formulario.css">
</head>
<body>
    <!-- <h1>Añadir Novedad</h1>
    <form action="../../controlador/controladorNovedades.php" method="post">
        Rol: <input type="text" name="addRol" id="addRol"> <br>
        Nombre y Apellido: <input type="text" name="addNap" id="addNap"> <br>
        Programa: <input type="text" name="addPro" id="addPro"> <br>
        Tipo Novedad: <input type="text" name="addTipo" id="addTipo"> <br>
        Descripción: <textarea name="addDep" id="addDep" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" name="addNov" id="addNov" value="Añadir">
        <br><a class='btn btn-outline-secondary' href='../../views/viewsNovedades.php'>Volver</a>
    </form>  -->

    <div class="login-card">
        <h2>Agregar Novedad</h2>
        <h3>Ingrese los datos</h3> 

        <form class="login-form" action="../../controlador/controladorNovedades.php" method="POST">
            <input type="text" placeholder="Rol" name="addRol" id="addRol" required>
            <input type="text" placeholder="Nombre y Apellido" name="addNap" id="addNap" required>
            <input type="text" placeholder="Programa" name="addPro" id="addPro" required>
            <input type="text" placeholder="Tipo Novedad" name="addTipo" id="addTipo" required>
            <input type="text" placeholder="Descripción" name="addDep" id="addDep" required>
    
            <div class="botones">
                <input class="btnsubmit" type="submit" name="addNov" id="addNov" value="Agregar">
                <input class="btnsubmit  btnsubmit__link" type="reset" value="Limpiar">
            </div>
            
            <a href="../../views/viewsNovedades.php">Regresar</a>
        </form>
    </div>
</body>
</html>