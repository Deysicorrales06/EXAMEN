<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio02</title>
    <link rel="stylesheet" href="<?php echo asset ('resources/css/bootstrap.min.css')?>">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> 
        <!-- escribir el codigo del ejercicio -->
        <form action="ejercicio02.php" method="post">
        <h1 class="TEXT-CENTER">CALCULADORA</h1>
            <div class="row" class="text-center" >
                <div class="cols-sm-4">
                <h3 class="bg-primary">DATOS</h3>
                    <div class="fomr-group">
                    <label for="">Número 1</label>
                    <input type="number" class="form-control" required>

                    <label for="">Número 2</label>
                    <input type="number" class="form-control" required>
                </div><br>
                    <button type="submit" class="btn btn-primary">calcular</button>
                </div>
                <div class="col-sm-4">
                    <h2>Resultados</h2>
                    <label for="">Suma:
                        <?php 
                           ?>
                    </label><br>
                    <label for="">Resta:</label><br>
                    <label for="">multiplicación:</label><br>
                    <label for="">División:</label><br>
                </div>
            </div>
        </form>
        
    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>
</html>