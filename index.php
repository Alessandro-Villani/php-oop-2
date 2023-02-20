<?php

include_once __DIR__ . '/data/index.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>Pet Ecommerce</title>
</head>

<body>
    <main>
        <div class="container py-5">
            <div class="row row-cols-3">
                <?php foreach ($products as $product) : ?>
                    <div class="col d-flex">
                        <div class="card text-center">
                            <figure style="height: 400px;">
                                <img src="<?= $product->getimgUrl() ?>" class="card-img-top" alt="<?= $product->getName() ?>">
                            </figure>
                            <div class="card-body">
                                <h3><?= $product->getName() ?></h3>
                                <p><?= $product->getDescription() ?></p>
                                <p><strong><?= $product->getPrice() ?> €</strong></p>
                                <?php if ($product instanceof Food) : ?>
                                    <?php foreach ($product->getCategories() as $category) : ?>
                                        <p>Per: <?= ucfirst($category->getName()) ?>, taglia: <?= ucfirst($category->getSize()) ?>, <?= ucfirst($category->getAge()) ?></p>
                                        <p>Tipo : <?= ucfirst($product->getType()) ?></p>
                                        <p>Ingredienti: <?= ucfirst($product->getIngredients()) ?></p>
                                        <p>Peso: <?= $product->getWeight() ?> Kg</p>
                                    <?php endforeach ?>
                                <?php elseif ($product instanceof Kennel) : ?>
                                    <?php foreach ($product->getCategories() as $category) : ?>
                                        <p>Per: <?= ucfirst($category->getName()) ?>, taglia: <?= ucfirst($category->getSize()) ?></p>
                                    <?php endforeach ?>
                                    <p>Materiale: <?= $product->getMaterial() ?></p>
                                    <p>Dimensioni: W <?= $product->getDimension('width') ?>cm H <?= $product->getDimension('height') ?>cm D <?= $product->getDimension('depth') ?>cm</p>
                                <?php else : ?>
                                    <p>Per:
                                        <?php foreach ($product->getCategories() as $i => $category) : ?>
                                            <?= ucfirst($category->getName()) ?>
                                            <?php if ($i < count($product->getCategories()) - 1) : ?>
                                                ,
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </p>
                                    <p>Materiale: <?= $product->getMaterial() ?></p>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
</body>

</html>