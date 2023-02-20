<?php

include_once __DIR__ . '/../Models/Animal.php';
include_once __DIR__ . '/../Models/Product.php';
include_once __DIR__ . '/../Models/Food.php';
include_once __DIR__ . '/../Models/Toy.php';
include_once __DIR__ . '/../Models/Kennel.php';

$productsList = [
    ['name' => 'Monge Adult', 'category_name' => 'cibo', 'categories' => [['name' => 'cane', 'size' => 'media', 'age' => 'adult']], 'price' => 45.90, 'description' => 'Le crocchette di Monge Salmone e Riso All Breeds Adult sono un alimento completo per cani adulti di tutte le taglie formulato con un\'unica fonte proteica: il salmone.', 'imgUrl' => 'https://arcaplanet.vtexassets.com/arquivos/ids/270797/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1763307843', 'type' => 'secco', 'ingredients' => ['Salmone', 'Riso'], 'weight' => 12],
    ['name' => 'Pallina con Punte', 'category_name' => 'gioco', 'categories' => [['name' => 'cane', 'size' => 'any', 'age' => 'any'], ['name' => 'gatto', 'size' => 'any', 'age' => 'any']], 'price' => 0.99, 'description' => 'Pallina con Punte è un simpatico gioco per di 4 cm di diametro. Divertimento assicurato!', 'imgUrl' => 'https://arcaplanet.vtexassets.com/arquivos/ids/266785/yes-pallina-con-punte-pack.jpg?v=1763288520', 'material' => 'plastica'],
    ['name' => 'Cuccia Alcazar', 'category_name' => 'cuccia', 'categories' => [['name' => 'cane', 'size' => 'gigante', 'age' => 'any']], 'price' => 135, 20, 'description' => 'Alcazar di Pet Around You è una cuccia da esterno per cani realizzata in robusta resina termoplastica e con un materiale resistente agli urti e ai raggi UV.', 'imgUrl' => 'https://arcaplanet.vtexassets.com/arquivos/ids/227611/p-a-y--cuccia-alcazar-90.jpg?v=1762643028', 'material' => 'resina termoplastica', 'width' => 66, 'height' => 68, 'depth' => 95]
];

$products = [];

foreach ($productsList as $product) {
    $categories = [];
    foreach ($product['categories'] as $category) {
        $animal = new Animal($category['name'], $category['size'], $category['age']);
        $categories[] = $animal;
    }
    if ($product['category_name'] === 'cibo') {
        $food = new Food($product['name'], $categories, $product['price'], $product['description'], $product['type'], $product['ingredients'], $product['weight'], $product['imgUrl']);
        $products[] = $food;
    } elseif ($product['category_name'] === 'gioco') {
        $toy = new Toy($product['name'], $categories, $product['price'], $product['description'], $product['material'], $product['imgUrl']);
        $products[] = $toy;
    } elseif ($product['category_name'] === 'cuccia') {
        $kennel = new Kennel($product['name'], $categories, $product['price'], $product['description'], $product['material'], $product['width'], $product['height'], $product['depth'], $product['imgUrl']);
        $products[] = $kennel;
    }
}
