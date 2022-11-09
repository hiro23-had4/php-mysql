<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php 

class Novedad {
    public $Id_Novedad;
    public $Rol;
    public $Nombre_Apellido;
    public $Programa;
    public $Tipo_Novedad;
    public $Descripcion;
    

    public function borraNovedad($idNovedad){

        require_once("../dao/conectar.php");
        $conn = conectar();
        $sql = "delete from novedades where Id_Novedad = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($idNovedad));
        $conn = null;
        header("location:../views/viewsNovedades.php");
    }
    public function addNovedad($Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion){
        
        require_once("../dao/conectar.php");
        $conn = conectar();
        $sql = "insert into novedades (Rol, Nombre_Apellido, Programa, Tipo_Novedad, Descripcion) values (?,?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion));
        $conn = null;
        // print("La Novedad $Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion ha sido Agregado");
        header("location:../views/viewsNovedades.php");   
    }
    public function updateNovedad($Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion, $id){
        
        require_once("../dao/conectar.php");

        $conn = conectar();
        $sql = "UPDATE novedades SET Rol =?, Nombre_Apellido = ?, Programa =?, 
        Tipo_novedad =?, Descripcion =? WHERE Id_Novedad =?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion, $id));
        $conn = null;
        header("location:../views/viewsNovedades.php");
    }

    public function consultarNovedad(){
        require_once("../dao/conectar.php");

        $conn = conectar();
        $sql = "select * from novedades";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute();
        return $consulta;
        $conn = null;
    }

    public function consultarNovedadXId($id){
        require_once("../../dao/conectar.php");

        $conn = conectar();
        $sql = "select * from novedades where Id_Novedad = ?";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($id));
        return $consulta;
        $conn = null;
    }
}

?>