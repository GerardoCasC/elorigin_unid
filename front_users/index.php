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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="estilos.css">
</head>
<body style="background-color:#E6E6FA;">
<div class= "text_center">
    <h2 align="center">TIENDAS</h2>
<hr align="center" ="400" width="70%" color="#800080" id="lineacolor">
</div>
<div class="container">
<div class="row">
<?php
    while ($fila = mysqli_fetch_array($user)) {
?>


    <div class="card">
        <img src="../css/ralsey_blont.jpg" alt=""> <br>
        <h5 class="card-title"><?php echo $fila["names"]; ?></h5>  
         <p class="card-text">
            <?php if ( $fila["status"] == 1 ): ?>

                <p class="card-text"> <small>  <a href="../front_categories/?user_id=<?php echo $fila
     ["id"]; ?>">Ver productos</a>  </small> </p>
            <?php elseif ( $fila["status"] == 0 ): ?>
                <h6 class=out >en mantenimiento </h6>
            <?php endif; ?>
         </p>
         
        </div>
    

    

<br>
<?php
}
?>
<div class="col-m-6">
</div>
</div>
</div>
</body>
</html>