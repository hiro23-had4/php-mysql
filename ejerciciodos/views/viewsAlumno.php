<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../public/CSS/estilos.css">
</head>

<body> 

<?php 

print('
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" style="color: #FF6712" href="../index.php">SENA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewsAlumno.php">Alumno</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewsCoordinador.php">Coordinador</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="viewsNovedades.php">Novedades</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="../controlador/controladorAlumno.php" method="post">
        <input class="btn btn-success" type="submit" value="Agregar" id="btnAlumno" name="btnAlumno"/>
    </form>'); 

// CONSULTAR ALUMNO
    require_once("../modelos/classAlumno.php");
    $alumno = new Alumno();
    $datos = $alumno -> consultarAlumno();

print('
<table id="example" class="table table-striped table-bordered " style="width:100%">
        
    <thead>
            <tr>
                <th>IdAlumno</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Programa</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
    </thead>
        <tbody>');

while ($data = $datos -> fetch(PDO::FETCH_ASSOC)){
        print ('<tr>
                    <td>' . $data["Id_Alumno"].'</td>
                    <td>' . $data ["Nombre"]. '</td>
                    <td>' . $data["Apellido"]. '</td>
                    <td>' . $data["Correo"]. '</td>
                    <td>' . $data["Telefono"]. '</td>
                    <td>' . $data["Programa"]. '</td>
                    <td>
                     <!--  <a href="../controlador/controladorAlumno.php?id=' . $data["Id_Alumno"]. '&value=Borrar"></a>-->
                            <input class="btn btn-danger" type="button" name="btnDelete" id="btnDelete" value="Delete" onclick="eliminar('.$data["Id_Alumno"]. ')" />
                       
                    </td>
                    <td>
                        <!-- <a href="../controlador/controladorAlumno.php?id="' .$data["Id_Alumno"]. '&value=Actualizar"></a>-->
                            <input class="btn btn-primary" name="btnUpdate" type="submit"  value="Actualizar" onclick="validar(' .$data["Id_Alumno"]. ')" />
                        
                    </td>
                </tr>
');}



print('
        </tbody>
    </table>');
?>

<script type="text/javascript">
    function validar(id){
        var dato = confirm("Seguro que quiere Actualizar el Alumno.?" + id);
        if(!dato){
        window.location.href="../views/viewsAlumno.php";
    }else{    
        window.location.href="../controlador/controladorAlumno.php?id=" + id + "&value=Actualizar";
    }
    }



    function eliminar(id){
        var dato = confirm("seguro que desea eliminar el Alumno.? " + id);
    if(!dato){
        window.location.href="../views/viewsAlumno.php";
    }else{    
        window.location.href="../controlador/controladorAlumno.php?id=" + id + "&value=Borrar";
    }
    }
</script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../js/app.js"></script>
</body>

</html>