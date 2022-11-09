<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coordinador</title>
    <link rel="stylesheet" href="../../public/CSS/actFormulario.css">
</head>
<body>


<?php 
    require_once("../../modelos/classCoordinador.php");
    $id = $_REQUEST['id'];
    
    $coordinador = new Coordinador();
    $datos = $coordinador -> consultarCoordinadorXId($id);

while($data = $datos -> fetch(PDO::FETCH_ASSOC)){
 print('
    <!--<form action="../../controlador/controladorCoordinador.php" method="post">
        <input type="hidden" value="'.$data["Id_Coordinador"].'" name="actId" id="actId"/>
        <input type="text" value="'.$data["Nombre"].'" name="nameact" id="nameact">
        <input type="text" value="'.$data["Lugar"].'" name="lastact" id="lastact"> 
        <input type="text" value="'.$data["Descripcion"].'" name="textact" id="textact"> 
        <input class="btn btn-outline-secondary" type="submit" name="actCord" id="actCord" value="Actualizar">
        <br><a class="btn btn-outline-secondary" href="../../views/viewsCoordinador.php">Volver</a>
    </form>-->

    <div class="login-card">
        <h2>Actualizar Coordinador</h2>
        <h3>Actualiza los datos</h3> 

        <form class="login-form" action="../../controlador/controladorCoordinador.php" method="POST">

            <input type="hidden" value="'.$data["Id_Coordinador"].'" name="actId" id="actId" />
            <input type="text" placeholder="Nombre" value="'.$data["Nombre"].'"  name="nameact" id="nameact" required>
            <input type="text" placeholder="Apellido" value="'.$data["Lugar"].'" name="lastact" id="lastact" required>
            <input type="text" placeholder="Email" value="'.$data["Descripcion"].'" name="textact" id="textact" required>

            <div class="boton-bu">
                <input class="btnsubmit" type="submit" name="actCord" id="actCord" value="Actualizar">
                <a class="btnback" href="../../views/viewsCoordinador.php">Regresar</a>
            </div>
        </form>
    </div>
 ');   
}

?>
    
</body>
</html>