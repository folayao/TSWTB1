<?php

require_once './vendor/autoload.php';

use App\Models\Register;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'trabajo1',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

if (!empty($_POST)) {
    $registro = new Register();
    $registro->nombre = $_POST['nombre'];
    $registro->descripcion = $_POST['descripcion'];
    $registro->save();
};


?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Recursive:wght@600&display=swap');

    body {
        font-family: 'Recursive', sans-serif;
    }

    h1 {
        color: #ed6663;
    }

    .contenedor {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .jumbotron-fluid {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<body>
    <div class="jumbotron-fluid aling-items-center">
        <h1 class="display-3">Esta es una App</h1>
        <p class="lead">F en el chat por los FrameWorks</p>
        <hr class="my-2">
    </div>

    <div class="container">
        <!-- Nunca olvidar poner que accion y metodo usa el form para que php lo identifique -->
        <div class="row  contenedor">
            <form action="index.php" method="post">
                <div class="form-group row aling-items-center ">
                    <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                    <div class="col-sm-1-12">
                        <input type="text" class="form-control" name="nombre" id="inputName" placeholder="Nombre">
                    </div>
                </div>

                <div class="form-group row aling-items-center">
                    <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                    <div class="col-SM-1-12">
                        <input type="text" class="form-control" name="descripcion" id="inputName" placeholder="Descripcion">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="">
                        <button type="submit" class="btn btn-primary align-item-center">Submit</button>
                    </div>
                    <div>
                        <a href="./infoRegister.php"  class="btn btn-primary align-item-center ml-2">Ir a Registros</a>
                    </div>
                </div>
            </form>
        </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>