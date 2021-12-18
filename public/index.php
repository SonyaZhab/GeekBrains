<?php

require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../template');
$twig = new \Twig\Environment($loader);
$images = [
    'images/photo-1.jpg',
    'images/photo-2.jpg',
    'images/photo-3.jpg',
    'images/photo-4.jpg',
    'images/photo-5.jpg',
    'images/photo-6.jpg',
    'images/photo-7.jpg',
    'images/photo-8.jpg',
    'images/photo-9.jpg',
    'images/photo-10.jpg',
    'images/photo-11.jpg',
    'images/photo-12.jpg',
    'images/photo-13.jpg',
    'images/photo-14.jpg',
    'images/photo-15.jpg',
    'images/photo-16.jpg',
    'images/photo-17.jpg'
];
// var_dump($images);

try{
    $template = $twig -> load('index.html.twig');

    echo $template -> render([
        'images' => $images,
        'title' => 'Picture'
    ]);

} catch (Exception $e){
    echo $e -> getMessage();
}

?>