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

            <div class="cap">
                <h2>Capitulo 1: Pilot</h2><br>
            </div>
            <div class="contenido">
                <?php capitulo1(); ?>
            </div>

            <div class="footer">
                    <img src="cartoon.png" class="img-footer">

                    <div class="footer-text">
                        <b>BY: Johana Ramirez <br>
                            DATE: November 22th, 2022</b> 
                    </div>
            </div>
        </div>
</body>
</html>