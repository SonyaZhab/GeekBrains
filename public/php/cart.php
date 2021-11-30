<?php
session_start();

if(!isset($_SESSION['s_cart_add'])){
    $_SESSION['s_cart_add'] = array();
}

if(isset($_POST['cart_add'])){
    $arr_cart = [];

    $arr_cart[] = $_POST['cart_add'];
    $arr_cart[] = $_POST['cart_count'];

    $_SESSION['s_cart_add']['cart_add'][] = $arr_cart;
    setcookie('cart', '1', time()+20);
    header('location:/php/Acart.php');
    die();    
}

if(isset($_COOKIE['cart'])){
    foreach($_SESSION['s_cart_add'] as $cart_item){
        foreach($cart_item as $item){

            echo '<div class="cart">
                    <img src="' . $item[0]. '" alt="photo" class="cart_img">
                    <p class="description">Описание</p>
                    <div>
                        <form  action="Acart.php" method="post" >
                        <button type="submit" name="cart_min" class="cart_min">-</button>
                        <input type="text" name="cart_count"  class="cart_count" value="'. $item[1] .'">
                        <button  type="submit" name="cart_plus" class="cart_plus">+</button>
                        </form>
                    </div>
                    <button class="cart_del">Удалить</button>
                 </div>';
        }
    }
}else{
    session_destroy();
    setcookie('cart', '1', time()-20);
    echo "Ваша корзина пуста";
}

?>