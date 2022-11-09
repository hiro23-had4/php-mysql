<?php
   include_once('../modelos/classAlumno.php');

if(!isset($_REQUEST['id'])){
   $_REQUEST['id'] = 0;
}

if(!isset($_REQUEST["btnDelete"])){
   if(($_REQUEST['id']!=null) && ($_REQUEST['value'] == 'Borrar')){
      $id = $_REQUEST['id'];
      $alumno = new Alumno();
      $alumno -> borrarAlumno( $id );

}elseif(isset($_REQUEST['btnAlumno'])){ // agregar alumno
   header("location:../views/alumno/addAlumno.php");

}elseif(($_REQUEST['newAlumno']) && ($_REQUEST['newAlumno'] != null )){
   
   $nombre = $_REQUEST['newname'];
   $apellido = $_REQUEST['newlast'];
   $correo = $_REQUEST['newemail'];
   $telefono = $_REQUEST['newphone'];
   $programa = $_REQUEST['newprog'];

   $alumno = new Alumno();
   $alumno -> addAlumno($nombre, $apellido, $correo, $telefono, $programa);

   //----------------------------------------------------------------------------

}elseif(($_REQUEST['id'] != null) && ($_REQUEST['value'] == "Actualizar")){ // actualizar
   header("location:../views/alumno/updateAlumno.php?id=".$_REQUEST['id']);

}elseif(isset($_REQUEST['actualizarAlumno'])){ // actualizar 
   $id = $_REQUEST['actAlumno'];
   $nombre = $_REQUEST['actname'];
   $apellido = $_REQUEST['actlast'];
   $correo = $_REQUEST['actemail'];
   $telefono = $_REQUEST['actphone'];
   $programa = $_REQUEST['actprog'];

   $alumno = new Alumno();
   $alumno -> actAlumno($nombre, $apellido, $correo, $telefono, $programa, $id);
   
}elseif(isset($_REQUEST['btnUpdate']) && ($_REQUEST['btnUpdate'] != null)){
   $id = $_REQUEST['actAlumno'];
   $nombre = $_REQUEST['actname'];
   $Apellido = $_REQUEST['actlast'];
   $correo = $_REQUEST['actemail'];
   $telefono = $_REQUEST['actphone'];
   $programa = $_REQUEST['actprog'];

   $alumno = new Alumno();
   $alumno -> actAlumno($nombre, $apellido, $correo, $telefono, $programa, $id);
}
}
?>