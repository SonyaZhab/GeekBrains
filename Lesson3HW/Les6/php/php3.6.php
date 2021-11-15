<?php
// Задача №6
//создать из меню сайта меню ввиде массива и вставить его в html. попробовать сделать подменю
// $menu = [
//     "home" => "index.php",
//     "about" => "about.php",
//     "service" => "service.php",
//     "portfolio" => "portfolio.php",
//     "contact" => "contact.php"
// ];
$menu = [
    "home" => ["link" => "home", "href" => "index.php"],
    "about" => ["link" => "about","href" => "about.php"],
    "service" => ["link" => "service","href" => "service.php"],
    "portfolio" => ["link" => "portfolio", "href" => "portfolio.php"],
    "contact" => ["link" => "contact", "href" => "contact.php"]
];
echo "<ul class='ul'>";
foreach ($menu as $item ){
    echo "<li><a href='{$item[href]}'>{$item[link]}<a><li>";
};
echo "</ul>";
?>
<!-- <ul class="ul">
    <li><a href='<//?=$menu["home"]?>'>home</a></li>
    <li><a href='<//?=$menu["about"]?>'>about</a></li>
    <li><a href='<//?=$menu["service"]?>'>service</a></li>
    <li><a href='<//?=$menu["portfolio"]?>'>portfolio</a></li>
    <li><a href='<//?=$menu["contact"]?>'>contact</a></li>
</ul> -->
