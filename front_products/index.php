<?php
$user_id=$_GET["user_id"];
$category_id=$_GET["category_id"];
require_once("../lib/functions.php");
$resultado = get_all_categories($connect);
$category = mysqli_fetch_array($resultado);
$product = get_products($connect, $category_id, $user_id);
$product_price_asc = get_products_price_asc($connect, $category_id, $user_id);
$product_price_desc = get_products_price_desc($connect, $category_id, $user_id);
$product_quantity_asc = get_products_quantity_asc($connect, $category_id, $user_id);
$product_quantity_desc = get_products_quiantity_desc($connect, $category_id, $user_id);
//error_reporting(0);
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
<nav class="navbar sticky-top" style="background-color: #483d8b;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../front_users/index.php">Menu</a>
    <li class="navbar-bar">
    <a class="navbar-brand" href="#" onclick="window.history.back()">regresar</a>
    </li>
  </div>
</nav>
    <div class= "text_center">
    <h2 align="center">PRODUCTOS </h2>
        <h2 align="center">Categoría: <?php echo $category ["name"] ?>  </h2>

    <hr align="center" ="400" width="70%" color="#800080" id="lineacolor">
    </div>
    <div class="offset-sm-4">
    <form method="post">
  <label for="orden">Ordenar por:</label>
  <select name="orden" id="orden">
  <option value="0">Por defecto</option>
    <option value="1">Ordenar por precio - Menor a mayor</option>
    <option value="2">Ordenar por precio - Mayor a menor</option>
    <option value="3">Ordenar por cantidad - Menor a mayor</option>
    <option value="4">Ordenar por cantidad - Mayor a menor</option>
  </select>
  <input type="submit" value="Ordenar">
</form>
</div>
<?php
$orden = $_POST["orden"];
?>
<?php if ($orden == 0): ?>
<?php $type_orden = $product; ?>
<?php elseif ($orden == 1):  ?>               
<?php $type_orden = $product_price_asc; ?>
<?php elseif ($orden == 2): ?>
<?php $type_orden = $product_price_desc; ?>
<?php elseif ($orden == 3): ?>
<?php $type_orden = $product_quantity_asc; ?>
<?php elseif ($orden == 4): ?>
<?php $type_orden = $product_quantity_desc; ?>
<?php endif; ?>
<?php if ( $orden >= 0 ): ?>
    <?php
        while ($fila = mysqli_fetch_array($type_orden)) {
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

    <?php endif; ?>
   
</body>
</html>