<?php
$category_id=$_GET["category_id"];
require_once("../lib/functions.php");
$user = get_products($connect, $category_id);
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

    <!--aqui se debe hacer un echo de la categoria -->

    <div class= "text_center"> <!-- el div center termina en la linea 22 -->
        <h2 align="center">PRODUCTOS</h2>
    <hr align="center" ="400" width="70%" color="#800080" id="lineacolor">
    </div>

        <!--"CATALOGO de los productos mediante Cards" -->
    <?php
        while ($fila = mysqli_fetch_array($user)) {
    ?>
    <div class="container">

        <div class="card"> 
            <br>
            <h4 class="card-title"><?php echo $fila["name"]; ?></h4>  <br>
            <th>Descripcion:</th>
            <h5 class="card-title"><?php echo $fila["description"]; ?></h5>  
            <th>Precio: </th> 
            <h5 class="card-title"><?php echo $fila["price"]; ?></h5>  
            <th>Cantidad disponible</th>
            <h5 class="card-title"><?php echo $fila["quantity"]; ?></h5>   
             <p class="card-text">
                
                <?php if ( $fila["status"] == 1 ): ?>
                    <h6 class= in> Disponible </h6>
                <?php elseif ( $fila["status"] == 0 ): ?>
                    <h6 class=out >No disponible </h6>
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