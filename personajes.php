<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rick and Morty</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    
    <?php  require 'main.php'; ?>

        <div class="contenedor">
            <div class="cabecera">
                <img src="titulo2.png" class="img-cabecera">
            </div>
        
            <header>
                <nav>
                    <ul>
                        <li><a href="home.php"><img src="logo.png" id="home"></a></li>
                        <li><a href="personajes.php">Personajes</a></li>
                        <li><a href="capitulos.php">Episodios</a></l>
                    </ul>
                </nav>
            </header>

            <div class="contendor-prin">
                <div class="contenedor-com">
                    <div class="buscador">
                        <form method="post">
                            <input class="input" name="personaje" type="text" placeholder="Ingrese ID">
                            <br>
                            <br>
                            <input class="btn" type="submit" value="Buscar" >
                        </form>
                    </div>  
                    <div class="muestra">
                        <img id="buscar" src="<?php echo $datosPer[0];?>">
                        <div class = "personaje">
                            <p> ID: <?php echo $datosPer[1]; ?> </p>
                            <p> Nombre: <?php echo $datosPer[2]; ?> </p>
                            <p> Genero: <?php echo $datosPer[3]; ?> </p>
                            <p> Estatus: <?php echo $datosPer[4]; ?> </p>
                        </div>
                    </div>
                </div>
                <div class="contenedor-random">
                    <?php personajeRandom(); ?>
                </div>
            </div>
          
            <div class="footer">
                <img src="cartoon.png" class="img-footer">

                <div class="footer-text">
                    <b>BY: Johana Ramirez <br>
                        DATE: November 22th, 2022</b> 
                </div>
            </div>
</body>
</html>