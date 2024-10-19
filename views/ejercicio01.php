<?php include "partials/variables.php" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio01</title>
    <link rel="stylesheet" href="<?php echo asset('resources/css/bootstrap.min.css')?>">
</head>
<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?>
         <!-- escribir el codigo del ejercicio -->
         <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2 class="text-center">DATOS DEL CONTACTO</h2>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Introduce tu nombre" required>

                        <label for="email" class="mt-3">E-mail</label>
                        <input name="correo" type="email" class="form-control" placeholder="Introduce tu email" required>

                        <label for="edad" class="mt-3">Edad</label>
                        <input name="edad" type="number" class="form-control" placeholder="Introduce tu edad" required>

                        <button type="submit" class="btn btn-info mt-4">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 mt-5">
                <?php if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['edad'])) { ?>
                    <h3 class="tex-center">datos ingresados</h3>
                    <p><strong>Nombre:</strong> <?php echo ($_POST['nombre']); ?></p>
                    <p><strong>Email:</strong> <?php echo ($_POST['correo']); ?></p>
                    <p><strong>Edad:</strong> <?php echo ($_POST['edad']); ?></p>
                <?php }; ?>
            </div>
        </div>
</form>  
    </div>
</body>

</html>