<?php
require_once("../lib/functions.php");
$user = get_all_users($connect);
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
<h1 align="center">TIENDAS ONLINE</h1>
</div>
<div class="container">
<div class="col-sm-4 offset-sm-4">
    <?php
        while ($fila = mysqli_fetch_array($user)) {
    ?>
    <br> <br> <br>
    <h3 align="center" style="padding: 10px; border: 2px solid red;"><?php echo $fila["names"]; ?></h3>
    <h5 align="center"><?php echo $fila["email"]; ?></h5>
    <h6 align="center">
        <?php if ( $fila["status"] == 1 ): ?>
           Estado: Activo
        <?php elseif ( $fila["status"] == 0 ): ?>
           Estado: Inactivo
        <?php endif; ?>
    </h6> 
    <h5 align="center">
        <?php if ( $fila["status"] == 1 ): ?>
          <a href="../front_categories/index.php?ID=<?php echo $fila
         ["id"]; ?>">Visitar catálogo</a>
        <?php elseif ( $fila["status"] == 0 ): ?>
           <a href="../front_categories/index.php">Visitar catálogo</a>
        <?php endif; ?>
    </h6> 
    <?php
    }
    ?>
</div>
</div>
</body>
</html>