<?php
$mysqli = mysqli_connect("localhost","root","","knitted_clothing");

$page = mysqli_escape_string($mysqli, $_GET['page']);
$count_item = 8;
$next_offset = $page * $count_item;

if($mysqli){
    $page_count = mysqli_query($mysqli, "select id from images where 1");
    while($row = mysqli_fetch_all($page_count, MYSQLI_ASSOC)){
        $pages = count($row);
    }
    // echo $pages;

    $result = mysqli_query($mysqli, "select server_adress from images order by views desc limit {$count_item} offset {$next_offset} ");/*  */
    while($row = mysqli_fetch_all($result, MYSQLI_ASSOC)){

        $arr_img = [];
        foreach($row as $item){
            $arr_img[] = $item;
        }

        $pages = ceil($pages / $count_item);
        // echo $pages;

        foreach($arr_img as $img){
            foreach($img as $item){            
                echo '<div class="img_box">
                        <a href="../' . $item . '" target="_blank">
                        <img class="photo" src="../' . $item . '" alt="">
                        </a>
                    </div>';
            }
        }
        echo '<div class="pages">';
        for($p = 0; $p < $pages; $p++) {
            echo '<a href="?page=';
            echo $p;
            echo '"><button class="flipping">';
            echo $p + 1;
            echo '</button></a>';
        }
            echo '</div>';
    }

    mysqli_close($mysqli);
}
else{
    die('Couldnt connect to DB');
}
