<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="public/CSS/estilos.css">
    <!-- <link rel="stylesheet" href="http://localhost/ejercicio2/public/CSS/estilos.css"> -->
</head>
<body>

    <?php 

    print('
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                <a class="navbar-brand" style="color: #FF6712" href="index.php">SENA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> 
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./views/viewsAlumno.php?id==1">Alumno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./views/viewsCoordinador.php">Coordinador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./views/viewsNovedades.php">Novedades</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>

        <header class="header contenedor">

            <div class="header__grid">
                <img class="header__imagen" src="public/img/sena_logo.png" alt="logo SENA">

                <div class="contenido">
                    <h2>SENA Centro de Biotecnología Agropecuaria <span>(CBA)</span></h2>
                    <p>Bienvenido al Portal SENA</p>
                    <a href="https://www.sena.edu.co/es-co/Paginas/default.aspx">Más Informacion</a>
                </div>
            </div>
        </header>')
    ?>
</body>
</html>


