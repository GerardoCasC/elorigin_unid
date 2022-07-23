<?php
require_once("../lib/functions.php");
$user = get_all_categories($connect);
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

<link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!--aqui se debe hacer un echo de la categoria -->
     <h1 align="center" >catalogo de:  </h1> 

    <div class= "text_center"> <!-- el div center termina en la linea 22 -->
        <h2 align="center">CA-TA-LOGO</h2>
    <hr align="center" ="400" width="70%" color="#800080" id="lineacolor">
    </div>

        <!--"CATALOGO de los productos mediante Cards" -->
    <p align="center">bienvenido al catalogo</p>
    <?php
        while ($fila = mysqli_fetch_array($user)) {
    ?>
    <div class="container">

        <div class="card">
            <img src="../css/ralsey_blont.jpg" alt=""> <br>
            <h5 class="card-title"><?php echo $fila["name"]; ?></h5>  
             <p class="card-text">
                <?php if ( $fila["status"] == 1 ): ?>
                    <p class="card-text"> <small> <a href="../front_products/index.php">ver productos</a> </small> </p>
                <?php elseif ( $fila["status"] == 0 ): ?>
                    <h6 class=out >en mantenimiento </h6>
                <?php endif; ?>
             </p>
             
            </div>
        

        
    </div>
    <br>
    <?php
    }
    ?>
    <br><br>
       <h5 align="center"> ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⣿⣿⣿⡿⢋⣩⣭⣶⣶⣮⣭⡙⠿⣿⣿⣿⣿⣿⣿</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⣿⠿⣋⣴⣿⣿⣿⣿⣿⣿⣿⣿⣿⣦⡙⢿⣿⣿⣿</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⡃⠄⠹⡿⣿⣿⣿⣿⠟⠛⣿⣿⣿⣿⣷⡌⢿⣿⣿</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⠐⣠⡶⣶⣲⡎⢻⣿⣤⣴⣾⣿⣿⣿⣿⣿⠸⣿⣿</h5>
       <h5 align="center"> ⣿⠟⣋⡥⡶⣞⡯⣟⣾⣺⢽⡧⣥⣭⣉⢻⣿⣿⣿⣿⣿⣆⢻⣿</h5>
       <h5 align="center"> ⡃⣾⢯⢿⢽⣫⡯⣷⣳⢯⡯⠯⠷⠻⠞⣼⣿⣿⣿⣿⣿⣿⡌⣿</h5>
       <h5 align="center"> ⣦⣍⡙⠫⠛⠕⣋⡓⠭⣡⢶⠗⣡⣶⡝⣿⣿⣿⣿⣿⣿⣿⣧⢹</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⣿⣘⣛⣋⣡⣵⣾⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⢸</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⢸</h5>
       <h5 align="center"> ⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢸⣿⣿⣿⣿⣿⣿⣿⢸</h5>
</body>
</html>