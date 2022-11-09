<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php 

class Coordinador {
    public $Id_Coordinador;
    public $nombre;
    public $lugar;
    public $descripcion;


    public function borrarCord($idCordinador){

        require_once("../dao/conectar.php");
        $conn = conectar();
        $sql = "delete from coordinador where Id_Coordinador = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idCordinador));
        $conn = null;
        header("location:../views/viewsCoordinador.php");
    }
    public function addCoordinador( $nombre, $lugar, $descripcion){

        require_once("../dao/conectar.php");
        $conn = conectar();
        $sql = "insert into coordinador (nombre, lugar, descripcion) values (?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre, $lugar, $descripcion));
        $conn = null;
        print("El Campo $nombre, $lugar, $descripcion ha sido Agregado");
        header("location:../views/viewsCoordinador.php");
    }
    // --------------------------------------------------------------------------------------------------------------
    public function actCoordinador($nombre, $lugar, $descripcion, $id){
       require_once("../dao/conectar.php");

       $conn = conectar();
       $sql = "UPDATE coordinador SET Nombre = ?, Lugar =?, Descripcion =? 
       WHERE Id_Coordinador =?";
       $consulta = $conn -> prepare($sql);
       $consulta -> execute(Array($nombre, $lugar, $descripcion, $id));
       $conn = null;
       header("location:../views/viewsCoordinador.php");
    }

    public function consultarCoordinador(){
        require_once("../dao/conectar.php");

        $conn = conectar();
        $sql = "select * from coordinador";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }
    public function consultarCoordinadorXId($id){
        require_once("../../dao/conectar.php");

        $conn = conectar();
        $sql = "select * from coordinador where Id_Coordinador = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
}
?>