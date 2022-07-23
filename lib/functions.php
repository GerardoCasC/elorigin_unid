<?php
require_once("../lib/connect.php");

function get_all_users($connect){
    $consulta="SELECT * FROM users";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
    }
?>