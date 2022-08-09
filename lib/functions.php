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
        function get_products_price_asc($connect, $category_id, $user_id){
            $consulta="SELECT * FROM products WHERE category_id=$category_id and user_id=$user_id ORDER BY price ASC";
            $resultado = mysqli_query($connect, $consulta);
            return $resultado; 
        }
        function get_products_price_desc($connect, $category_id, $user_id){
            $consulta="SELECT * FROM products WHERE category_id=$category_id and user_id=$user_id ORDER BY price DESC";
            $resultado = mysqli_query($connect, $consulta);
            return $resultado; 
        }
        function get_products_quantity_asc($connect, $category_id, $user_id){
            $consulta="SELECT * FROM products WHERE category_id=$category_id and user_id=$user_id ORDER BY quantity ASC";
            $resultado = mysqli_query($connect, $consulta);
            return $resultado; 
        }
        function get_products_quantity_desc($connect, $category_id, $user_id){
            $consulta="SELECT * FROM products WHERE category_id=$category_id and user_id=$user_id ORDER BY quantity DESC";
            $resultado = mysqli_query($connect, $consulta);
            return $resultado; 
        }
        function get_products_name_desc($connect, $category_id, $user_id){
            $consulta="SELECT * FROM products WHERE category_id=$category_id and user_id=$user_id ORDER BY name ASC";
            $resultado = mysqli_query($connect, $consulta);
            return $resultado; 
        }
?>