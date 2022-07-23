<?php
require_once("../lib/connect.php");

function get_all_users($connect){
    $consulta="SELECT * FROM users";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
    }

    //aqui va la parte de andres
    function get_all_categories($connect){  
        $consulta = "SELECT * FROM categories" ;
        $resultado = mysqli_query($connect, $consulta);
        
        return $resultado;
        
        }
?>
