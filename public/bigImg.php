<?php

if(isset($_GET['image'])){
    echo
      '<div>
        <img src="'. $_GET['image'] . '" alt="">
      </div>';
  }

?>