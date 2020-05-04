<?php
require '../vendor/autoload.php';



$data = [
    1 => [
        'title' => 'friend',
        'img' => 'https://image.shutterstock.com/image-vector/8-bit-pixel-koala-vector-600w-1425783923.jpg'
    ],
    2 => [
        'title' => 'data_before',
        'img' => 'https://media.giphy.com/media/WV9m7eHIbV6uvG9eRG/giphy.gif'
    ],
    3 => [
        'title' => 'death',
        'img' => 'https://cdn1.vectorstock.com/i/1000x1000/49/25/retro-human-pixel-skull-8-bit-pop-art-vector-24354925.jpg'
    ],
    4 => [
        'title' => 'cat',
        'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkX4ElM5gtNpal1QX9va94_3nA2CwBBcaWFvhPfwTD7EcYT0_u9Q&s'
    ],
    5 => [
        'title' => 'love',
        'img' => 'https://ih1.redbubble.net/image.152460257.1685/farp,small,wall_texture,product,750x1000.u6.jpg'
    ]

];



$loader = new Twig\Loader\FilesystemLoader('../src/View/');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', ['data' => $data]);