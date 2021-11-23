<?php

$mysqli = mysqli_connect("localhost","root","","knitted_clothing");

$image_id = $_GET['image_id'];

if($mysqli){
  $count_views = mysqli_query($mysqli, "update images set views = views + 1 where id = {$image_id};");

  $result = mysqli_query($mysqli, "select server_adress, views from images where id = {$image_id}; ");
  while($row = mysqli_fetch_all($result)){
    $info_img = [];
    foreach($row as $img_id){
      $info_img[] = $img_id;
      foreach($info_img as $a){
        if(isset($_GET['image_id'])){
          echo
            '<div class="img_box">
              <img class="photo" src="../' . $a[0] . '" alt="">
                <h4 class="views" style="width: 150px;
                  padding-left: 10px;
                  margin: 15px;
                  font-size: 36px;
                  text-align: center;">'. $a[1] . ' views</h4>
            </div>';
        }
      }
    }
  }
    mysqli_close($mysqli);
}else{
    die('Couldnt connect to DB');
}
?>