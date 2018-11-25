<?php


function comprobar_ingreso($correo, $contrasena){
    require ("core/Conexion.php");
    $datos = array();

    $con = new Conexion();
    $conexion = $con->get_conexion();

    $correo = mysqli_real_escape_string($conexion,$correo);
    $contrasena = mysqli_real_escape_string($conexion,$contrasena);

    $sentencia = "SELECT * FROM USUARIOS WHERE correo = '$correo'";

    $resultado = $conexion->query($sentencia);

    while($registro = $resultado->fetch_array(MYSQLI_ASSOC)){
        if(password_verify($contrasena, $registro['contrasena'])){
            $datos['id_usuario'] = $registro['id_usuario'];
            $datos['nombre'] = $registro['nombre'];
            $datos['correo'] = $registro['correo'];
            //$datos['tipo_usuario'] = "administrador";
            //$datos['contrasena'] = $registro['contrasena'];
            
            //Sabiendo que el usuario existe, obtener su rol y permisos especiales
            $id_usuario = $datos['id_usuario'];
            //obteniendo rol
            $sentencia = "SELECT r.nombre_rol, r.id_rol FROM ROLES r JOIN USUARIOS_ROLES ur ON ur.id_rol = r.id_rol WHERE ur.id_usuario = {$id_usuario}";
            $registro = ($conexion->query($sentencia))->fetch_array(MYSQLI_ASSOC);
            $datos['tipo_usuario'] = $registro['nombre_rol'];
            //obteniendo permisos especiales
            $sentencia = "SELECT p.id_permiso, p.nombre_permiso FROM PERMISOS p JOIN PERMISOS_ESPECIALES pe ON pe.id_permiso = p.id_permiso WHERE id_usuario = {$id_usuario}";
            $resultadoPermisos = $conexion->query($sentencia);
            $permisosEspeciales = array();
            while($registro = $resultadoPermisos->fetch_array(MYSQLI)){
                $permisosEspeciales[$registro['id_permiso']] = $registro['nombre_permiso'];
            }
            $datos['permisos_especiales'] = $permisosEspeciales;

        } 
    }

    $con->close_conexion();

    return $datos;
}
?>