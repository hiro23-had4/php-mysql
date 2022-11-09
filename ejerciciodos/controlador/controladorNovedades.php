<?php
   include_once('../modelos/classNovedad.php');

if(!isset($_REQUEST['id'])){
      $_REQUEST['id'] = 0;
}

if(!isset($_REQUEST["deleteNovedad"])){
   if(($_REQUEST['id']!=null) && ($_REQUEST['value'] == 'Borrar')){
      $id = $_REQUEST['id'];
      $novedad = new Novedad();
      $novedad -> borraNovedad( $id );

}elseif(isset($_REQUEST['btnNovedad'])){
   header("location:../views/novedades/addNovedades.php");
}elseif(($_REQUEST['addNov']) && ($_REQUEST['addNov'] != null)){   
   
   $Rol = $_REQUEST["addRol"];
   $Nombre_Apellido = $_REQUEST["addNap"];
   $Programa = $_REQUEST["addPro"];
   $Tipo_Novedad = $_REQUEST["addTipo"];
   $Descripcion = $_REQUEST["addDep"];

   $novedad = new Novedad();
   $novedad -> addNovedad($Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion);
   
   //---------------------------------------------------------------------------------------------

}elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualizar")){
   header("location:../views/novedades/uptNovedades.php?id=".$_REQUEST['id']);

}elseif(isset($_REQUEST['updateNovedad']) && ($_REQUEST['updateNovedad'] != null)){ // actualizar
   
   $id = $_REQUEST['actNovd'];
   $Rol = $_REQUEST["actRol"];
   $Nombre_Apellido = $_REQUEST["actNom"];
   $Programa = $_REQUEST["actPro"];
   $Tipo_Novedad = $_REQUEST["actTipo"];
   $Descripcion = $_REQUEST["actDepn"];

   $novedad = new Novedad();
   $novedad -> updateNovedad($Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion, $id);

}elseif(isset($_REQUEST["actNovedad"])){ // actualizar
   
   $id = $_REQUEST['actNov'];
   $Rol = $_REQUEST["actRol"];
   $Nombre_Apellido = $_REQUEST["actNom"];
   $Programa = $_REQUEST["actPro"];
   $Tipo_Novedad = $_REQUEST["actTipo"];
   $Descripcion = $_REQUEST["actDepn"];

   $novedad = new Novedad();
   $novedad -> updateNovedad($Rol, $Nombre_Apellido, $Programa, $Tipo_Novedad, $Descripcion, $id);
}
}
?>