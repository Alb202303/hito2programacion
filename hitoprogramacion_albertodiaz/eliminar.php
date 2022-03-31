<?php

if(isset($_POST['eliminar'])){
    $username = $_POST['usuario'];
    $resultado=$conexion1->query("DELETE FROM usuario WHERE usuario='{$_SESSION['usuario']}'");

}