<?php

require_once __DIR__ . '/Models/Computer.php';
require_once __DIR__ . '/Models/Laptop.php';
require_once __DIR__ . '/Models/Desktop.php';
require_once __DIR__ . '/Database/Db.php';

?>

<!doctype html>
<html lang="en">

<head>
    <title>OOP-2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body style="background-color: lightcoral;">

    <main>
        <div class="container w-50 pt-5">
            <div class="row">
                
            <? foreach ($computers as $computer) : ?>
               
                <div class="col-6 g-3">
                    <div class="card p-1">
                        <h1><?= $computer->getBrand() ?></h1>
                        <h5><?= $computer->getModel() ?></h5>
                        <p><?= $computer->getAlimentation() ?></p>
                        <p><?= $computer->getWeight() ?></p>
                        <p><?= $computer->getType() ?></p>
                    </div>
                </div>

            <? endforeach?>
            </div>
        </div>
    </main>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>