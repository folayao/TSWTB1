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

/* Esto me trae todos los registros de la base de datos */

$registers = Register::all();

function PrintRegistersFromDB($register)
{
    echo '<li class="work-position">';
    echo '<h5>' . $register->nombre . '</h5>';
    echo '<p>' . $register->descripcion . '</p>';
    echo '</li>';
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Registros</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Recursive:wght@600&display=swap');

    body {
        font-family: 'Recursive', sans-serif;
    }

    .row {
        display: flex;
        align-items: center;
        flex-direction: column;
    }
    
    a{
        margin-bottom: 10px;
    }

    .card{
        background: linear-gradient(#ff5722,#00bcd4);
        color: #fff;
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <h2>Lista de Items</h2>
            <a href="/trabajo1TESW/index.php" class="btn btn-primary align-item-center">Regresar a la Pagina principal</a>
        </div>

        <div class="card text-left">
            <div class="card-body">
                <ul class="unstyle">
                        <?php
                        /* Este ciclo trae todos los registros uno por uno y los muestra con la funcion PrintRFDB */
                        for ($i = 0; $i < count($registers); $i++) {
                            PrintRegistersFromDB($registers[$i]);
                        }
                        ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>