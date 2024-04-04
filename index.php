<?php
require './db.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Animali</title>

    <script src="https://kit.fontawesome.com/1ad8417259.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class=" bg-warning ">



    <h1 class=" text-center text-white text-uppercase border border-4 border-warning-subtle m-5 py-2 "><strong>Pet Shop</strong></h1>

    <div class="container">
        <div class="row ">
            <?php foreach ($ArrayProduct as $product) : ?>
                <div class='col-md-4'>
                    <div class='card bg-warning-subtle m-3  '>


                        <img src='<?= $product->productImg ?>' class='card-img-top object-fit-cover' alt='<?= $product->name ?>'>
                        <div class='card-body text-black'>
                            <div><?= $product->category->icon ?></div>

                            <h4 class='card-title text-black  text-uppercase'><strong><?= $product->name ?></strong></h4>
                            <p class='card-text text-danger '><strong><?= $product->price ?></strong> </p>

                            <?php if ($product instanceof Food) : ?>
                                <p class='card-text'><strong>Età:</strong> <?= $product->age ?> Mesi</p>
                                <p class='card-text'><strong>Ingredienti:</strong> <?= $product->ingredients ?></p>
                                <p class='card-text'><strong>Peso:</strong> <?= $product->weight ?></p>
                            <?php elseif ($product instanceof Accessories) : ?>
                                <p class='card-text'><strong>Materiali:</strong> <?= $product->materials ?></p>
                                <p class='card-text'><strong>Taglia :</strong> <?= $product->size ?></p>

                            <?php elseif ($product instanceof PetsGame) : ?>
                                <p class='card-text'><strong>Materiali:</strong> <?= $product->materials ?></p>
                                <p class='card-text'><strong>Età:</strong> <?= $product->age ?> Mesi</p>

                            <?php elseif ($product instanceof Hygiene) : ?>
                                <p class='card-text'><strong>Tipo di pelo:</strong> <?= $product->typeOfHair ?></p>
                            <?php endif; ?>

                            <a href="#" class="btn btn-warning text-white ">Aggiungi al carrello</a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>