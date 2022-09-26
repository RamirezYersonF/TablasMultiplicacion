<?php
$numeroUno = "";
$numeroDos = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>Tabla multiplicar</title>
</head>
<body>
<header>
    <h1>Tablas de multiplicar</h1>
</header>
<main>
<section class="contenedor__section">
        <form action="tablamultiplicar.php" method="post">
            <label for="numero1">Ingresa el numero para multiplicar</label><br>
            <input type="number" name="numerouno" id="numero1" value="<?= $numeroUno ?>"><br>
            <label for="numero2">Ingresa hasta que numero lo quieres multiplicar </label><br>
            <input type="number" name="numerodos" id="numero2" value="<?= $numeroDos ?>"><br>
            <input type="submit" value="Calcular" class="btn">
        </form>
    </section>
    <section class="contenedor__php">
        <?php if(isset($_POST['numerouno'])){ ?>
            <?php $numeroUno = (int) $_POST['numerouno']; 
                $numeroDos = (int) $_POST['numerodos'];
                $campos = array(); ?>
                <?php if ($numeroUno == null) { ?>
                    <?php array_push($campos, "<h3>El primer campo no puede estar vacio</h3> <br>") ?>
                    <?php }elseif( $numeroUno <= -1){ ?>
                        <?php array_push($campos, "<h3>En este primer campo no se aceptan valores negativos </h3> <br>") ?>
                        <?php } ?>
                    <?php if ($numeroDos == null) { ?>
                    <?php array_push($campos, "<h3>El segundo campo no puede estar vacio</h3> <br>") ?>
                    <?php }elseif( $numeroDos <= -1){ ?>
                        <?php array_push($campos, "<h3>En este segundo campo no se aceptan valores negativos </h3> <br>") ?>
                        <?php }else{ ?>
                    <div class="contenedor__correcto">
                        <h2>Aqui tienes la respuesta</h2>
                        <?php for ($i= 1; $i <= $numeroDos ; $i++)
                        {$resultado = $numeroUno * $i; 
                        echo "<h2>".  $numeroUno . " X " . $i . " = " . $resultado . "</h2>";}?>
                        <?php }?>
                        </div>
            <!-- Bloque validacion de los campos   -->
            <?php if(count($campos) > 0){ ?>
                <div class="contenedor__error">
                    <?php for ($i=0; $i <count($campos); $i++)  echo  $campos[$i]  ?>
                <?php } ?>
            <?php } ?>
        <!-- Bloque validacion de los campos   -->
        </section>
        </main>
</body>
</html>