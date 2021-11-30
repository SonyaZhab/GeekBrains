<?php 
if(isset($_GET['exit'])){
    session_destroy();
    setcookie('islogin', '1', time() - 1);
    header('location:../php/login.php');
    die();
}
?>
<header class="header">
    <div class="header_item">
        <a href="../index.php" class="icon">
            <h4>Вязанные вещи</h4>
        </a>
    </div>
    <div class="header_item">
        <a href="../php/profile.php" class="icon">
            <i class="fas fa-user"></i>
        </a>
        <a href="?exit" name="exit" class="exit">Выйти</a>

    </div>
    <div class="header_item">
        <a href="../php/Acart.php" class="icon">
            <i class="fas fa-shopping-cart"></i>
        </a>
    </div>
</header>
