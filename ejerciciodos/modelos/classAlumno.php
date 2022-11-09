<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php 

class Alumno{
    public $Id_Alumno;
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;

   
    public function borrarAlumno($idAlumno){
        
        require_once("../dao/conectar.php");
        $conn = conectar();
        $sql = "delete from alumno where Id_Alumno = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idAlumno));
        $conn = null;
        header("location:../views/viewsAlumno.php");
    } 
    public function addAlumno($nombre, $apellido, $correo, $telefono, $programa){
        
        require_once("../dao/conectar.php");
        $conn = conectar();
        $sql = "insert into alumno (nombre, apellido, correo, telefono, programa) values (?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $apellido, $correo, $telefono, $programa));
        $conn = null;
        print("El Alumno $nombre, $apellido, $correo, $telefono, $programa ha sido Agregado");
        // print("<br><a class='btn btn-outline-secondary' href='../views/viewsAlumno.php'>Regresar</a>");
        header("location:../views/viewsAlumno.php");
    }
    public function actAlumno($nombre, $apellido, $correo, $telefono, $programa, $id){

        require_once("../dao/conectar.php");
        $conn = conectar();
        $sql = "UPDATE alumno SET Nombre = ?, Apellido = ?, Correo = ?,
        Telefono = ?, Programa = ? WHERE Id_Alumno = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $apellido, $correo, $telefono, $programa, $id));
        $conn = null;
        header("location:../views/viewsAlumno.php");
        
    }

    public function consultarAlumno(){
        require_once("../dao/conectar.php");

        $conn = conectar();
        $sql = "select * from alumno";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    public function consultarAlumnoXId($id){
        require_once("../../dao/conectar.php");

        $conn = conectar();
        $sql = "select * from alumno where Id_Alumno = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
        
}
?> 


<!-- public function addsAlumno($idAlumno)
    {
        print("El Alumno $idAlumno Se ha Agregado.");
        print("<br><a class='btn btn-outline-secondary' href='../views/viewsAlumno.php'>Regresar</a>");
    } 
public function UpdateAlumno($idAlumno) {
        print("El Alumno $idAlumno ha sido Actualizado...");
        print("<br><a class='btn btn-outline-secondary' href='../views/viewsAlumno.php'>Regresar</a>");
    } -->