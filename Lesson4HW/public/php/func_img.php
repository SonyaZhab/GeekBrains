<?php

$dirs = scandir('./images');
$images = [];
foreach($dirs as $dir){
    if($dir !== '.' && $dir !== '..'){
        $images[] = $dir;
    }
}

foreach ($images as $image){
    echo '<a href="images/' . $image . '" target="_blank"><img class="photo" src="images/' . $image. '" alt=""></a>';
}
?>