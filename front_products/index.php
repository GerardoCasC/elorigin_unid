<?php
$user_id=$_GET["user_id"];
$category_id=$_GET["category_id"];
require_once("../lib/functions.php");
$resultado = get_all_categories($connect);
$category = mysqli_fetch_array($resultado);
$product = get_products($connect, $category_id, $user_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front categories</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="estilazo.css">
</head>
<body>
    <div class= "text_center">
    <h2 align="center">PRODUCTOS </h2>
        <h2 align="center">Categoría: <?php echo $category ["name"] ?>  </h2>

    <hr align="center" ="400" width="70%" color="#800080" id="lineacolor">
    </div>
    <?php
        while ($fila = mysqli_fetch_array($product)) {
    ?>
    <div class="container">

        <div class="card"> 
        <img src="../css/ralsey_blont.jpg" alt=""> <br>
            <br>
            <h4 class="card-text"><?php echo $fila["name"]; ?></h4>  <br>
            <h5>Descripcion:</h5>
            <h6 class="card-text"><?php echo $fila["description"]; ?></h6>  
            <h5>Precio: </h5> 
            <h6 class="card-text">$<?php echo $fila["price"]; ?></h6>  
            <h5>Cantidad disponible</h5>
            <h6 class="card-text"><?php echo $fila["quantity"]; ?> unidades</h6>   
             <p class="card-text">
                
                <?php if ( $fila["status"] == 1 ): ?>
                    <h5 class= in> Disponible </h5>
                <?php elseif ( $fila["status"] == 0 ): ?>
                    <h5 class=out >No disponible </h5>
                <?php endif; ?>
             </p>
             <p class="card-text">  </p>
            </div>
        

        
    </div>
    <br>
    <?php
    }
    ?>
    <br><br>
</body>
</html>