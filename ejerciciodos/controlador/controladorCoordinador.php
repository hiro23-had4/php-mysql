<?php 
    @include_once("../modelos/classCoordinador.php");
if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}

if(!isset($_REQUEST["deleteCod"])){
    if(($_REQUEST['id']!=null) && ($_REQUEST['value'] == 'Borrar')){
        $id = $_REQUEST['id'];
        $coordinador = new Coordinador();
        $coordinador -> borrarCord( $id );

}elseif(isset($_REQUEST['btnCord'])){ // agregar
    header("location:../views/coordinador/addCoordinador.php");
}elseif(($_REQUEST['newCord']) && ($_REQUEST['newCord'] != null)){
    
    $nombre = $_REQUEST['newName'];
    $lugar = $_REQUEST['newApe'];
    $descripcion = $_REQUEST['newtext'];

    $coordinador = new Coordinador();
    $coordinador -> addCoordinador( $nombre, $lugar, $descripcion );

    //------------------------------------------------------------------------
}elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualiza")){ // actualizar
    header("location:../views/coordinador/updCoordinador.php?id=".$_REQUEST['id']);

}elseif(isset($_REQUEST['updateCord']) && ($_REQUEST['updateCord'] != null)){

    $id = $_REQUEST['actId'];
    $nombre = $_REQUEST['nameact'];
    $lugar = $_REQUEST['lastact'];
    $descripcion = $_REQUEST['textact'];

    $coordinador = new Coordinador();
    $coordinador -> actCoordinador($nombre, $lugar, $descripcion, $id );

}elseif(isset($_REQUEST['actCord'])){
    
    $id = $_REQUEST['actId'];
    $nombre = $_REQUEST['nameact'];
    $lugar = $_REQUEST['lastact'];
    $descripcion = $_REQUEST['textact'];

    $coordinador = new Coordinador();
    $coordinador -> actCoordinador($nombre, $lugar, $descripcion, $id );

}
}
?>