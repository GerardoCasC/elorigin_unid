<?php
require_once("../lib/connect.php");

function get_all_users($connect){
    $consulta="SELECT * FROM users";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
    }

    function get_all_categories($connect){
        $consulta="SELECT * FROM categories";
        $resultado = mysqli_query($connect, $consulta);
        return $resultado;
        }

    //aqui va la parte de andres
    function get_categories($connect, $user_id){  
        $consulta="SELECT * FROM categories WHERE user_id=$user_id";
        $resultado = mysqli_query($connect, $consulta);
        
        return $resultado;
        
        }

        function get_products($connect, $category_id, $user_id){
            $consulta="SELECT * FROM products WHERE category_id=$category_id and user_id=$user_id";
            $resultado = mysqli_query($connect, $consulta);
            return $resultado; 
        }
?>