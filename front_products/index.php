<?php
$category_id=$_GET["category_id"];
require_once("../lib/functions.php");
$product = get_products($connect, $category_id);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiendas online</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:#E6E6FA;">
<div class="container" style="padding: 20px; background-color:#9370DB;">
<h1 align="center">PRODUCTOS</h1>
</div>
<div class="container">
<div class="col-sm-4 offset-sm-4">
    <?php
        while ($fila = mysqli_fetch_array($product)) {
    ?>
    <br> <br> <br>
    <h3 align="center" style="padding: 10px; border: 2px solid red;"><?php echo $fila["name"]; ?></h3>
    <h6 align="center">
        <?php if ( $fila["status"] == 1 ): ?>
           Estado: Disponible
        <?php elseif ( $fila["status"] == 0 ): ?>
           Estado: No disponible
        <?php endif; ?>
    </h6> 
    <h6 align="center"><?php echo $fila["image"]; ?></h6>
    <h6 align="center">Descrpción: <?php echo $fila["description"]; ?></h6>
    <h6 align="center">Precio: $<?php echo $fila["price"]; ?></h6>
    <h6 align="center">Cantidad disponible: <?php echo $fila["quantity"]; ?></h6>
    <?php
    }
    ?>
</div>
</div>
</body>
</html>